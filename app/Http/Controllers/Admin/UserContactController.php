<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin\UserComment;
use App\ContactController;
use App\Http\Controllers\Controller;

use Brian2694\Toastr\Facades\Toastr;
use App\Notifications\MessageReply;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Session;
Session_start();

class UserContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function user_comment()
    {
        $contacts = ContactController::all();
        return view('admin.notifications.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function replys($id)
    {
        $reply = ContactController::find($id);
        return view('admin.notifications.reply',compact('reply'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request,$id)
    {
        $this->validate($request,[

            'reply' => 'required',
        
        ]);

        $mail_send = ContactController::find($id);

        $mail_send->reply = $request->reply;
        $mail_send->update();
        Session::put('reply',$mail_send);


        // Notification::route('mail', $reserve->email )
        //     ->notify(new ReservationConfirmed());

        Notification::route('mail',$mail_send->email)
            ->notify(new MessageReply());

        Toastr::success('Message Reply Successfully Sent.....', 'Success', ["positionClass" => "toast-top-right"]);

        

        return redirect()->route('admin.user.comment');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = ContactController::find($id);

        $info->DELETE();
        Toastr::success('Message Deleted Successfully....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
