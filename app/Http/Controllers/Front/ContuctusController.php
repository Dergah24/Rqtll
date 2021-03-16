<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContuctusController extends Controller
{
    public function index(){
        return view('front.page.contuctus');
    }
}
