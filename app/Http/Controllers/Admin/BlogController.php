<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Blog;
use App\Admin\BlogComment;
use Brian2694\Toastr\Facades\Toastr;
use\Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/blogs')) {
                mkdir('uploads/blogs',0777,true);
            }
            $image->move('uploads/blogs',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->short_content = $request->short_content;
        $blog->content = $request->content;
        $blog->status = false;
        $blog->image = $imagename;
        $mama = $blog->save();

        if($mama){
            Toastr::success('Blog Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $blog = Blog::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/blogs')) {
                mkdir('uploads/blogs',0777,true);
            }
            unlink('uploads/blogs/'.$blog->image);
            $image->move('uploads/blogs',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $blog->title = $request->title;
        $blog->short_content = $request->short_content;
        $blog->content = $request->content;
        $blog->status = false;
        $blog->image = $imagename;
        $mama = $blog->update();

        if($mama){
            Toastr::success('Blog Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.blog.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


     //Active And Un-Active funtion Start Now.......

    public function active(Request $request,$id)
    {
        

        $blog = Blog::find($id);
        $blog->status = true;
        $blog->save();


        Toastr::success('Blog Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $blog = Blog::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Blog Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if(file_exists('uploads/blogs/'.$blog->image)){
            unlink('uploads/blogs/'.$blog->image);
        }

        $blog->DELETE();
        Toastr::success('Blog Deleted Successfully... !!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function blogcomment()
    {
        $all_blog_comments = DB::table('blog_comments')->get();
        return view('admin.blogcomment.comment',compact('all_blog_comments'));
    }


    
}
