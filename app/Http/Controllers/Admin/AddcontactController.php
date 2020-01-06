<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Addcontact;
use Brian2694\Toastr\Facades\Toastr;

class AddcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_info = Addcontact::all();
        return view('admin.add_contact.index',compact('all_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_contact.create');
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
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);

       

        $info = new Addcontact();
        $info->address = $request->address;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->content = $request->content;
        $info->status = false;

        $mama = $info->save();

        if($mama){
            Toastr::success('Contact-Information Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Addcontact::find($id);
        return view('admin.add_contact.edit',compact('info'));
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
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);

       

        $info = Addcontact::find($id);
        $info->address = $request->address;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->content = $request->content;
        $info->status = false;

        $mama = $info->update();

        if($mama){
            Toastr::success('Contact-Information Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.contact.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }


    //Active Unactive Section Start.........

     public function active(Request $request,$id)
    {
        

        $info = Addcontact::find($id);
        $info->status = true;
        $info->save();


        Toastr::success('Contact-Information Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $info = Addcontact::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Contact-Information Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $info = Addcontact::find($id);

        $info->DELETE();
        Toastr::success('Contact Information Deleted Successfully....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
