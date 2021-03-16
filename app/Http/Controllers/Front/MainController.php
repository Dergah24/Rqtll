<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        App::setLocale('az');
        $lng= App::getLocale();
        if($lng == 'az') {
            $sliders= Slider::select('title_az','desc_az','image')->get();
            $products = Product::select('title_az as title','image')->get();

        }

        if($lng=='ru'){
             $sliders= Slider::select('title_ru ','desc_ru','image')->get();
             $products = Product::select('title_az as title','image')->get();
        }

        if($lng=='en'){
             $sliders= Slider::select('title_en','desc_en','image')->get();
             $products = Product::select('title_az as title','image')->get();
        }
        $partners = Partner::all();
        $contact =Contact::whereId(1)->first();
        return view('front.page.index',compact('contact','partners','sliders','products','lng'));
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
    public function store(Request $request)
    {
        //
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
        //
    }
}
