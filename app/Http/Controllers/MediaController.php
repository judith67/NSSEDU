<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;


class MediaController extends Controller
{
    public function upload_media(Request $request){
        $data = $request->validate([
            'image' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        //dd($extension);

        if(!$this->validateImgExtension($extension)){

            $err_msg = "Unsupported Image Format";
            return $this->redirectPage('admin.media-upload',$err_msg);

        }

        $path = $request->file('image')->store('medias');

        // $manager = new ImageManager();
        // //dd(asset('storage/'.$path));
        
        // $image = $manager->make('storage/'.$path)->resize(360, 270);
        // $image->save('storage/'.$path);
        $media = new Media();
        $media->title = $data['title'];
        $media->content = $data['content'];
        $media->image = $path;
        $resp = $media->save();
        if($resp){
            
            return view("admin.media-upload", ['msg' => "Uploaded Successfully"]);
        } else{
            return $this->redirectPage("admin.media-upload", "Error Uploading Image");
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

    public function fetchMedias(){
        
        $medias = Media::orderBy('created_at', 'desc')->get();
        //dd($medias);
        if($medias != null){
            return view('blog', ['medias' => $medias]);
        }
        return view('blog');
        
    }

    public function fetchAdminMedias(){
        
        $medias = Media::orderBy('created_at', 'desc')->get();
        //dd($medias);
        if($medias != null){
            return view('admin.delete-media', ['medias' => $medias]);
        }
        return view('admin.delete-media');
        
    }

    public function deleteMedia($id){
        $media = Media::find($id);
        if($media == null){
            return $this->fetchAdminMedias();
        }
        $media->delete();
        return $this->fetchAdminMedias();
    }
}
