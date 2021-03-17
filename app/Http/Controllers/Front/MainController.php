<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Galery;
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
    public function __construct()
    {
        $contact =Contact::whereId(1)->first();
       return view()->share('contact',$contact);
    }
    public function index()
    {

        $lng= App::getLocale();
        $lang = ['az', 'en', 'ru'];
        if($lng == 'az') {
            App::setLocale('az');
            $sliders= Slider::select('title_az as title','desc_az as desc','image')->get();
            $products = Product::select('title_az as title','image')->get();

        }elseif($lng=='ru'){
            App::setLocale('ru');
             $sliders= Slider::select('title_ru   as title ','desc_ru  as desc','image')->get();
             $products = Product::select('title_az as title','image')->get();
        }

        elseif($lng=='en'){
            App::setLocale('en');
             $sliders= Slider::select('title_en  as title','desc_en as desc','image')->get();
             $products = Product::select('title_az as title','image')->get();
        }else{
            $sliders= Slider::select('title_az  as title','desc_az as desc','image')->get();
            $products = Product::select('title_az as title','image')->get();
        }
        $galeriImages = Galery::all();
        $partners = Partner::all();

        return view('front.page.index',compact('partners','sliders','products','galeriImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contuctUs()
    {
        return view('Front.page.contuctus');
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
