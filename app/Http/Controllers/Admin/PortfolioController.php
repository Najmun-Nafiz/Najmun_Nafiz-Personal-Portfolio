<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Category;
use App\Admin\Portfolio;
use Brian2694\Toastr\Facades\Toastr;
use\Carbon\Carbon;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.portfolio.create',compact('categories'));
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
            'projectname' => 'required',
            'name' => 'required',
            'created_name' => 'required',
            'category_id' => 'required',
            'skills' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')) {
                mkdir('uploads/portfolio',0777,true);
            }
            $image->move('uploads/portfolio',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $portfolio = new Portfolio();
        $portfolio->projectname = $request->projectname;
        $portfolio->name = $request->name;
        $portfolio->created_name = $request->created_name;
        $portfolio->category_id = $request->category_id;
        $portfolio->skills = $request->skills;
        $portfolio->description = $request->description;
        $portfolio->status = false;
        $portfolio->image = $imagename;
        $mama = $portfolio->save();

        if($mama){
            Toastr::success('Portfolio Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $portfolio = Portfolio::find($id);
        $categories = Category::all();
        return view('admin.portfolio.edit',compact('portfolio','categories'));
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
            'projectname' => 'required',
            'name' => 'required',
            'created_name' => 'required',
            'category_id' => 'required',
            'skills' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $portfolio = Portfolio::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/portfolio')) {
                mkdir('uploads/portfolio',0777,true);
            }
            unlink('uploads/portfolio/'.$portfolio->image);
            $image->move('uploads/portfolio',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $portfolio->projectname = $request->projectname;
        $portfolio->name = $request->name;
        $portfolio->created_name = $request->created_name;
        $portfolio->category_id = $request->category_id;
        $portfolio->skills = $request->skills;
        $portfolio->description = $request->description;
        $portfolio->status = false;
        $portfolio->image = $imagename;
        $mama = $portfolio->update();

        if($mama){
            Toastr::success('Portfolio Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.portfolio.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    //Active And Un-Active funtion Start Now.......

    public function active(Request $request,$id)
    {
        

        $portfolio = Portfolio::find($id);
        $portfolio->status = true;
        $portfolio->save();


        Toastr::success('Portfolio Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $portfolio = Portfolio::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Portfolio Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $portfolio = Portfolio::find($id);

        if(file_exists('uploads/portfolio/'.$portfolio->image)){
            unlink('uploads/portfolio/'.$portfolio->image);
        }

        $portfolio->DELETE();
        return redirect()->back()->with('successMsg','Portfolio Deleted Successfully Wuth Directory Image....');
    }
}
