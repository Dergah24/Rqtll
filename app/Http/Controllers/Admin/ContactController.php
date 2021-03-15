<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contact = Contact::find(1)->first();
        return view('back.contact.list',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPostRequest $request)
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
        $contact = Contact::find(1)->first();
        return view('back.contact.update',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactPostRequest $request, $id)
    {
   //    return $request->post();
        $prefix = "+994";
       Contact::where('id',$id)->update([
        'address'=>$request->address,
        'email'  =>$request->email,
        'tel1'   =>$prefix."". $request->tel1,
        'tel2'   =>$prefix."".$request->tel2,
        'tel3'   =>$prefix."".$request->tel3,
        'facebook'=>$request->facebook,
        'insta'=>$request->insta,
        'twitter'=>$request->twitter,
        'linkedin'=>$request->linkedin,
        'maplink'=>$request->maplink,
    ]);

    return redirect()->route('contact.index');
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
