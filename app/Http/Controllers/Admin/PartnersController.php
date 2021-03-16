<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requests;
use App\Http\Requests\PartnerPostRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Partners;
use Symfony\Component\HttpFoundation\RequestStack;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {

        $partners = Partners::all();
       return view('back.partner.list',compact('partners'));
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
    public function store(PartnerPostRequest $request)
    {
        $partner = new Partners();
        if ($request->file()){
           $name = $request->title.'.'.$request->image->extension();

           $request->image->move(public_path('image'),$name);

           $partner->image=$name;

           $partner->title =$request->title;

           $partner->save();
        }
       return redirect()->back()->with('saccess','Parner elave edildi');
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
       // return $id;
        $partnerEdit = Partners::whereId($id)->get();
       // return response('partnerEdit',$partnerEdit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerUpdateRequest $request, $id)
    {

         $partner =  Partners::where('id',$id)->first();

        $partner->title=$request->title;
        if ($request->file()){
           $name = $request->title.'.'.$request->image->extension();

           $request->image->move(public_path('image'),$name);

           $partner->image=$name;
        }
        $partner->save();

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
      $partner = Partners::whereId($id)->first();

        $image_path = app_path("images/news/".$partner->image);

        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }

        $partner->delete();

        return redirect()->back();
    }
}
