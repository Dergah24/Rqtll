<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderPostRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;


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
        return view('back.slider.list',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderPostRequest $request)
    {
        $slider = new Slider();

        $slider->title_az = $request->title_az;
        $slider->desc_az  = $request->desc_az;
        $slider->slug_az  = Str::slug($request->title_az, '-');

        if(isset($request->title_ru) && isset($request->desc_ru)){

         $slider->title_en = $request->title_en;
        $slider->desc_en  = $request->desc_en;
        $slider->slug_en  = Str::slug($request->title_en, '-');

        }else{
            $slider->title_en = $request->title_az;
            $slider->desc_en  = $request->desc_az;
            $slider->slug_en  = Str::slug($request->title_az, '-');
        }

        if(isset($request->title_en) && isset($request->desc_en)){
            $slider->title_ru = $request->title_ru;
            $slider->desc_ru  = $request->desc_ru;
            $slider->slug_en  = Str::slug($request->title_en, '-');

        }else{
            $slider->title_ru = $request->title_az;
            $slider->desc_ru  = $request->desc_az;
            $slider->slug_ru  = Str::slug($request->title_ru, '-');
        }



        $slider->link     = $request->link;

        if($request->file()){
             $fileName = $request->title_az.'.'.$request->image->extension();
             $fileNamePath = 'uploads/'.$fileName;
             $slider->image = $fileNamePath;
             $request->image->move(public_path('uploads'), $fileName);
        }
        $slider->save();

        return back()->with('success','Yeni slayder elave edildi');


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
        $slider = Slider::findOrFail($id);
        return view('back.slider.update',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, $id)
    {

        $slider = Slider::where('id',$id)->first();

        $slider->title_az = $request->title_az;
        $slider->title_en = $request->title_en;
        $slider->title_ru = $request->title_ru;

        $slider->desc_az  = $request->desc_az;
        $slider->desc_en  = $request->desc_en;
        $slider->desc_ru  = $request->desc_ru;

        $slider->slug_az  = Str::slug($request->title_az, '-');
        $slider->slug_ru  = Str::slug($request->title_ru, '-');
        $slider->slug_en  = Str::slug($request->title_en, '-');

        $slider->link     = $request->link;

        if($request->file()){
             $fileName = $request->title_az.'.'.$request->image->extension();
             $fileNamePath = 'uploads/'.$fileName;
             $slider->image = $fileNamePath;
             $request->image->move(public_path('uploads'), $fileName);
        }
        $slider->save();
            return redirect()->route("slider.index")->with('success',"Slayder  Yenilendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::whereId($id)->first();


        $slider->delete();

        return redirect()->route("slider.index")->with('success',"Slayder  Silindi");
    }
}
