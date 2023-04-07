<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
     private $saveFolder = '/public/Images/';
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')){
            $completeFileName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();

            $compPIC = str_replace(' ', '_', $fileName).'_'.rand().'_'.time().'.'.$extension;

            $path =$request->file('image')->storeAs($this->saveFolder, $compPIC);
            dd($path);
        }
    }
}
