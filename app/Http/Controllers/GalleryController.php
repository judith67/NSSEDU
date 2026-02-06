<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;

class GalleryController extends Controller
{
    public function create_gallery(Request $request){
        $data = $request->validate([
            'image' => 'required',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        //dd($extension);

        if(!$this->validateImgExtension($extension)){

            $err_msg = "Unsupported Image Format";
            return $this->redirectPage('admin.gallery-upload',$err_msg);

        }

        $path = $request->file('image')->store('gallery');

        // $manager = new ImageManager();
        // //dd(asset('storage/'.$path));
        
        // $image = $manager->make('storage/'.$path)->resize(360, 270);
        // $image->save('storage/'.$path);
        
        $gallery = new Gallery();
        $gallery->image = $path;
        $resp = $gallery->save();
        if($resp){
            
            return view("admin.gallery-upload", ['msg' => "Uploaded Successfully"]);
        } else{
            return $this->redirectPage("admin.gallery-upload", "Error Uploading Image");
        }
    }

    public function validateImgExtension($ext){
        $extensions = array("jpg","jpeg", "gif", "png", "apng", "svg", "bmp", "ico", "png", "ico");
        foreach($extensions as $extension){
            if(strcmp($extension,strtolower($ext)) == 0){
                return true;
            }
        }                  
        return false;
    }

    public function redirectPage($view, $err_msg = null){
        if($err_msg == null){
            return view($view);
        }
        return view($view, ['err_msg' => $err_msg]);
    }

    public function fetchGallery(){
        
        $images = Gallery::orderBy('created_at', 'desc')->get();
        //dd($images);
        if($images != null){
            return view('gallery', ['images' => $images]);
        }
        return view('gallery');
        
    }
    public function fetchAdminImages(){
        
        $images = Gallery::orderBy('created_at', 'desc')->get();
        //dd($images);
        if($images != null){
            return view('admin.delete-image', ['images' => $images]);
        }
        return view('admin.delete-image');
        
    }

    public function deleteImage($id){
        $gallery = Gallery::find($id);
        if($gallery == null){
            return $this->fetchAdminImages();
        }
        $gallery->delete();
        return $this->fetchAdminImages();
    }
    
}
