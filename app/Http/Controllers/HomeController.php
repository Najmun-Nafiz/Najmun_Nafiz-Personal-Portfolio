<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Blog;
use App\Admin\Category;
use App\Admin\Portfolio;
use App\Admin\Addcontact;
use App\Admin\Slider;
use App\Admin\AboutMe;
use\App\Admin\BlogComment;
use\App\ContactController;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::get()->where('status',true);
        $aboutme = AboutMe::all();
        $blogs = Blog::orderBy('id','desc')->get()->where('status',true);
        
        $portfolios = Portfolio::orderBy('id','desc')->get()->where('status',true);
        $add_contact = Addcontact::get()->where('status',true);
        $categories = Category::all();
        return view('welcome',compact('sliders','aboutme','blogs','portfolios','categories','add_contact'));
    }

    public function portfolio_details($id)
    {
        $all_portfolio = Portfolio::get()->where('status',true);
        $portfolios = Portfolio::find($id);
        return view('details.portfolio_details',compact('portfolios','all_portfolio'));
    }


    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $blog_comments = BlogComment::orderBy('id','desc')->limit(3)->get();
        return view('details.blog_details',compact('blog','blog_comments'));
    }


    public function blog_comment(Request $request)
    {
       $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

       

        $blog_comment = new BlogComment();
        $blog_comment->name = $request->name;
        $blog_comment->email = $request->email;
        $blog_comment->subject = $request->subject;
        $blog_comment->message = $request->message;


        $mama = $blog_comment->save();

        if($mama){
            Toastr::success('Thanks fro feedback.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    public function usercontact(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

       

        $user_comment = new ContactController();
        $user_comment->firstname = $request->firstname;
        $user_comment->lastname = $request->lastname;
        $user_comment->email = $request->email;
        $user_comment->phone = $request->phone;
        $user_comment->message = $request->message;


        $mama = $user_comment->save();

        if($mama){
            Toastr::success('Thanks fro feedback.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    

}



