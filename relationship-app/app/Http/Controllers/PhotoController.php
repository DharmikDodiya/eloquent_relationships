<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use App\Models\Video;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function showPhoto($id){
        $photo = Video::find($id);  
  
        dd($photo->tags);
    }
}
