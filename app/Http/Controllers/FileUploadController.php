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

        // $request->validate([
        //     'berkas' => 'required|file|image|max:500 ',
        // ]);
        // $extfile= $request->berkas->getClientOriginalName();
        // $namaFile = 'web-'.time().'.'.$extfile;
        // $path = $request->berkas->storeAs('public',$namaFile );
        // echo "File has been uploaded successfully in :" . $path;


        // $pathBaru= asset('storage/'.$namaFile);
        // echo "proses upload file berhasil di : " . $path;
        // //br
        // echo "<br>";
        // //tampilkan link
        // echo "tampilkaan link: <a href='".$pathBaru."'>".$pathBaruh."</a>


        $request->validate([
            'berkas' => 'required|file|image|max:5000',
        ]);
        $extfile = $request->berkas->getClientOriginalName();

        $namaFile = 'web-' . time() . '.' . $extfile;

        $path = $request->berkas->move('public', $namaFile);

        $path = str_replace("\\","//",$path);

        echo "Variable path berisi : " . $path . "<br>";

        $pathBaru = asset('gambar/' . $namaFile);

        echo "Proses upload file berhasil di : " . $path . "<br>";

        echo "<br>";

        echo "Tampilkan link : <a href='" . $pathBaru . "'>" . $pathBaru . "</a>";






    }
}
