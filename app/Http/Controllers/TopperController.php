<?php

namespace App\Http\Controllers;

use App\Models\Topper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManager;

class TopperController extends Controller
{
    public function update_topper(Request $request){
        $data = $request->validate([
            'image' => 'required',
            'name' => 'required|string|max:255',
            'class' => 'required',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        //dd($extension);

        if(!$this->validateImgExtension($extension)){

            $err_msg = "Unsupported Image Format";
            return $this->redirectPage('admin.toppers-form',$err_msg);

        }

        $path = $request->file('image')->store('toppers');

        // $manager = new ImageManager();
        //dd(asset('storage/'.$path));
        
        // $image = $manager->make('storage/'.$path)->resize(263, 300);
        // $image->save('storage/'.$path);
        $topper = new Topper();
        // if($topper == null){
        //     return $this->redirectPage("admin.toppers-form", "Error Uploading Topper");
        //  }
        $topper->name = $data['name'];
        $topper->image = $path;
        $topper->class = $data['class'];
        $resp = $topper->save();
        if($resp){
            
            return view("admin.toppers-form", ['msg' => "Uploaded Successfully"]);
        } else{
            return $this->redirectPage("admin.toppers-form", "Error Uploading Image");
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

    public function fetchToppers(){
        
        $toppers = Topper::orderBy('class', 'desc')->get();
        //dd($toppers);
        if($toppers != null){
            return view('toppers', ['toppers' => $toppers]);
        }
        return view('toppers');
        
    }

    public function fetchAdminToppers(){
        
        $toppers = Topper::orderBy('class', 'asc')->get();
        //dd($toppers);
        if($toppers != null){
            return view('admin.all-toppers', ['toppers' => $toppers]);
        }
        return view('admin.all-toppers');
        
    }

    public function deleteToppers($id){
        $topper = Topper::find($id);
        if($topper == null){
            return $this->fetchAdminToppers();
        }
        $topper->delete();
        return $this->fetchAdminToppers();
    }
}
