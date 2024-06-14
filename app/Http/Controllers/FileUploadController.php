<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function fileUploadPost(Request $request)
    {
        // dump($request->berkas);
        // Handle the file upload logic here
        // return "File has been uploaded successfully";


        // if ($request->hasFile('berkas')) {
        //     echo "path() : " . $request->berkas->path() . "<br>";
        //     echo "extension() : " . $request->berkas->extension() . "<br>";
        //     //orinal extension
        //     echo "getClientOriginalExtension() : " . $request->berkas->getClientOriginalExtension() . "<br>";
        //     //get mime type
        //     echo "getMimeType() : " . $request->berkas->getMimeType() . "<br>";
        //     //get name
        //     echo "getClientOriginalName() : " . $request->berkas->getClientOriginalName() . "<br>";
        //     //get size
        //     echo "getSize() : " . $request->berkas->getSize() . "<br>";
        // }

        // else
        // {
        //     echo "No file selected";
        // }

        $request->validate([
            'berkas' => 'required|file|image|max:500 ',
        ]);
        $extfile= $request->berkas->getClientOriginalName();
        $namaFile = 'web-'.time().'.'.$extfile;
        $patch = $request->berkas->store('uploads',$namaFile );
        echo "File has been uploaded successfully in :" . $patch;






    }
}
