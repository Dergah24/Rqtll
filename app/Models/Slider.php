<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

   protected $fillabel = ['title_az','title_en','title_ru','desc_az','desc_ru','desc_en','link','slug_az','slug_ru','slug_en','image'];
}
