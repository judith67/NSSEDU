<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function upload_certificate(Request $request){
        $data = $request->validate([
            'file' => 'required',
            'tcNumber' => 'required|string|max:255|unique:certificates',
            'name' => 'required|string|max:255',
        ]);

        $extension = $request->file('file')->getClientOriginalExtension();
        //dd($extension);

        if(!$this->validateFileExtension($extension)){

            $err_msg = "Unsupported Certificate Format";
            return $this->redirectPage('admin.certificate',$err_msg);

        }

        $path = $request->file('file')->store('certificates');

        $certificate = new Certificate();
        $certificate->tcNumber = $data['tcNumber'];
        $certificate->name = $data['name'];
        $certificate->file = $path;
        $resp = $certificate->save();
        if($resp){
            
            return view("admin.certificate", ['msg' => "Uploaded Successfully"]);
        } else{
            return $this->redirectPage("admin.certificate", "Error Uploading Certificate");
        }
    }

    public function validateFileExtension($ext){
        $extensions = array("pdf");
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

    public function downloadCertifcate(Request $request){
        $data = $request->validate([
            'tcNumber' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $tcNumber = $data['tcNumber'];
        $name = $data['name'];

        $certificate = Certificate::orderBy('created_at', 'desc')
                    ->where('tcNumber',$tcNumber)->first();
         //dd($certificate->file);
        if($certificate == null){
            return $this->redirectPage("certificate", "No student found");
        }

        $file = asset('storage/'.$certificate->file);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return Storage::download($certificate->file, $name.'.pdf', $headers);
    }
}
