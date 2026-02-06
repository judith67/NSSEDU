<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Gallery;

class IndexController extends Controller
{

    public function fetchIndex(){
        
        $medias = Media::orderBy('created_at', 'desc')->limit(3)->get();
        $images = Gallery::orderBy('created_at', 'desc')->limit(4)->get();
        return view('index', ['medias' => $medias, 'images' => $images]);
        
        
    }
    
}
