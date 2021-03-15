<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests\ProductPostRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =Product::all();
        return view('Back.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPostRequest $request)
    {
       
         $product = new Product();
      

        if($request->hasFile('image')){
            $fileName = $request->title_az.time().'.'.$request->image->extension();
            $fileNamePath = 'uploads/'.$fileName;
            $product->image=$fileNamePath;
            $request->image->move(public_path('uploads'), $fileName);
       }

       
       $product->title_az = $request->title_az;
       $product->title_en = $request->title_en;
       $product->title_ru = $request->title_ru;

       $product->slug_az =Str::slug($request->title_az, '-');
       $product->slug_en =Str::slug($request->title_en, '-');
       $product->slug_ru =Str::slug($request->title_ru, '-');


      
       $product->save();

       return redirect()->back()->with('success',"Mehsul Elave edildi");

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
        $product = Product::find($id)->first();
        return view('Back.product.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $product =  Product::find($id)->first();

        $product->title_az = $request->title_az;
        $product->title_en = $request->title_en;
        $product->title_ru = $request->title_ru;

        $product->slug_az =Str::slug($request->title_az, '-');
        $product->slug_en =Str::slug($request->title_en, '-');
        $product->slug_ru =Str::slug($request->title_ru, '-');

        if($request->file()){
            $fileName = $request->title_az.time().'.'.$request->image->extension();
            $fileNamePath = 'uploads/'.$fileName;
            $product->image = $fileNamePath;
            $request->image->move(public_path('uploads'), $fileName);
       }
       $product->save();

       return redirect()->back()->with('success','Mehsul yenilendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->first();

        $image = Product::select('image')->where('id',$id)->first();

        if($image){
            File::delete(public_path('upload/'.$image));
             //unink(public_path('upload/'.$image));
        }else{
            dd('File does not exists.');
        }

        $product->delete();

        return redirect()->route('product.index')->with('success','Mehsul silindi');
    }
}
