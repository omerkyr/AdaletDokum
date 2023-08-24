<?php

namespace App\Http\Controllers;

use App\Models\PagePhoto;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;


class UploadController extends Controller
{
    private $photos_path;

    public function __construct()
    {
        $this->photos_path = public_path('images');
    }

    /**
     * Generate Upload View
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
 */

    public  function dropzoneUI()
    {
        return view('dashboard.dropzone-upload');
    }

    /**
     * File Upload Method
     *
     * @return void
     */

    public  function uploadDropzoneFile(Request $request)
    {
dd($request);
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $filePath = time().'.'.$file->getClientOriginalName();
            $file->move(public_path('images'), $filePath);
        }

        $imageUpload = new PagePhoto();
        $imageUpload->title =  $fileName;
        $imageUpload->photo_file = $filePath;
        $imageUpload->save();
        return response()->json(['success'=>$fileName]);
    }

    public function destroyFile(Request $request)
    {
        dd($request);
        $filename =  $request->get('name');
        PagePhoto::where('original_filename',$filename)->delete();
        $path = public_path('uploads/').$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success'=>$filename]);
    }
}
