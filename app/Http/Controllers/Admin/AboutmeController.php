<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\AboutMe;
use Brian2694\Toastr\Facades\Toastr;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutme = AboutMe::all();
        return view('admin.aboutme.index',compact('aboutme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutme.create');
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
            'name' => 'required',
            'profession' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

       

        $aboutme = new AboutMe();
        $aboutme->name = $request->name;
        $aboutme->profession = $request->profession;
        $aboutme->mobile = $request->mobile;
        $aboutme->email = $request->email;
        $aboutme->description = $request->description;

        $mama = $aboutme->save();

        if($mama){
            Toastr::success('Information Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
       $aboutme = AboutMe::find($id);
       return view('admin.aboutme.edit',compact('aboutme'));
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
            'name' => 'required',
            'profession' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

       

        $aboutme = AboutMe::find($id);
        $aboutme->name = $request->name;
        $aboutme->profession = $request->profession;
        $aboutme->mobile = $request->mobile;
        $aboutme->email = $request->email;
        $aboutme->description = $request->description;

        $mama = $aboutme->update();

        if($mama){
            Toastr::success('Information Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.about.index');
        }
        else{
            Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutme = AboutMe::find($id);

        $aboutme->DELETE();
        Toastr::success('Information Deleted Successfully....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
