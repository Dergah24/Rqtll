<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galery;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GaleryPostRequest;

class GaleryConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Galery::all();
        return view('back.galery.list',compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleryPostRequest $request)
    {

        $date = new Galery();
        if ($request->file()){
          if($request->title){
            $name = $request->title.'.'.$request->image->extension();
          }else{
            $name = time().'galery.'.$request->image->extension();
          }

           $request->image->move(public_path('image'),$name);

           $date->image=$name;

           $date->title =$request->title;

           $date->save();
        }
       return redirect()->back()->with('saccess','Yeni sekil elave edildi elave edildi');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleryPostRequest $request, $id)
    {

        $date =  Galery::where('id',$id)->first();

        $date->title=$request->title;
        if ($request->file()){
          if($request->title){
            $name = $request->title.'.'.$request->image->extension();
          }else{
            $name = time().'galery.'.$request->image->extension();
          }

           $request->image->move(public_path('image'),$name);

           $date->image=$name;
        }
        $date->save();

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
        $galery = Galery::whereId($id)->first();

        $image_path = app_path("images/news/".$galery->image);

        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
       
        $galery->delete();

        return redirect()->back();
    }
}
