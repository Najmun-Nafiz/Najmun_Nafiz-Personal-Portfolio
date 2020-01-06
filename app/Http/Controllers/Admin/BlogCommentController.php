<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin\BlogComment;
use App\Http\Controllers\Controller;

class BlogCommentController extends Controller
{
    public function blogcomment()
    {
        $all_blog_comments = DB::table('blog_comments')->get();
        return view('admin.blogcomment.comment')->with('all_blog_comments',$all_blog_comments);
    }


     public function comment_destroy($id)
    {
        $blog_comments = BlogComment::find($id);
        $blog_comments->DELETE();
        Toastr::success('Blog CComment Deleted Successfully... !!', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
