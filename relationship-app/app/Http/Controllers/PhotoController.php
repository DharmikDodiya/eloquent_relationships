<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Review;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function showPhoto($id){
        $photo = Photo::find($id);

        foreach ($photo->reviews as $review) {
            return $review;
        }
        return $photo;
    }
}
