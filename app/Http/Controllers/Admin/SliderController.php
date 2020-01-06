<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Slider;
use\Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'carrear' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/sliders')) {
                mkdir('uploads/sliders',0777,true);
            }
            $image->move('uploads/sliders',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        $slider = new Slider();
        $slider->name = $request->name;
        $slider->carrear = $request->carrear;
        $slider->description = $request->description;
        $slider->status = false;
        $slider->image = $imagename;
        $mama = $slider->save();

        if($mama){
            Toastr::success('Slider Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
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
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
            'carrear' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $slider = Slider::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'
            .$image->getClientOriginalExtension();

            if (!file_exists('uploads/sliders')) {
                mkdir('uploads/sliders',0777,true);
            }
            unlink('uploads/sliders/'.$slider->image);
            $image->move('uploads/sliders',$imagename);
        }
        else{
            $imagename = 'default.png';
        }

        
        $slider->name = $request->name;
        $slider->carrear = $request->carrear;
        $slider->description = $request->description;
        $slider->status = false;
        $slider->image = $imagename;
        $mama = $slider->update();

        if($mama){
            Toastr::success('Slider Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.slider.index');
        }
        else{
            //Toastr::success('Something Error !!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->with('errorMsg','Ther have error....!!');
        }
    }


    public function active(Request $request,$id)
    {
        

        $slider = Slider::find($id);
        $slider->status = true;
        $slider->save();


        Toastr::success('Slider Is Activated....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


    public function unactive(Request $request,$id)
    {
        $slider = Slider::find($id)->WHERE('id',$id)->update(['status'=>0]);
        

        Toastr::success('Slider Is Un-Activated....', 'Success', ["positionClass" => "toast-top-right"]);
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
        $slider = Slider::find($id);

        unlink('uploads/sliders/'.$slider->image);
        $slider->DELETE();
        Toastr::success('Slider Deleted Successfully....', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
