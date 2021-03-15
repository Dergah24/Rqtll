<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable  = ['adderss','tel1','tel2','tel3','facebook','twitter','linkedin','maplink','email','insta'];
}
