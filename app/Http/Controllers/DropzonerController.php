<?php

namespace App\Http\Controllers;

use App\Models\PagePhoto;
use Illuminate\Http\Request;

class DropzonerController extends Controller
{
    public function fileCreate()
    {
        return view('dashboard.sayfa-duzenle');
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/photo/'),$imageName);

        $imageUpload = new PagePhoto();
        $imageUpload->photo_file = $imageName;
        $imageUpload->title = $imageName;
        $imageUpload->page_id = $request->page_id;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        PagePhoto::where('photo_file',$filename)->delete();
        $path=public_path().'/images/photo/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
    public function imageSlideDestroy($id)
    {
        //
        $ImageList = PagePhoto::find($id);
        if (!empty($ImageList)) {
            $ImageList->delete();
            return redirect()->back()->with('ImageDeleteSuccess',trans('Silme İşlemi Başarıyla Yapıldı.'));
        } else {
            return redirect()->back();
        }
    }

}
