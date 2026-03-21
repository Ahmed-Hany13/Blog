<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request,$data)
    {
        if ($request->hasFile('image')) {
            $file = $request->file("image");
            $path = Storage::disk('public')->put("", $file);
            $data['image'] = $path;
        }
    }
}
