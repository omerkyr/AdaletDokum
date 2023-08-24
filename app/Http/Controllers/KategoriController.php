<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $uploadPath = "fronted/images/banner/";

    public function kategorilist($id){

        $kategoris = kategori::orderby("id")->where('kategori_type','=',$id)->get();
        $kategori = ['type'=>$id, 'name'=>config('ayarlar.page_type')[$id-1]];
        return view("dashboard.kategori-liste",compact("kategoris","kategori"));
    }

    public function kategoriduzenle($id){
        $kategori = kategori::find($id);
        return view("dashboard.kategori-duzenle",compact("kategori"));
    }
    public function kategoriekle($id){
        $kategori = new kategori();
        $kategoris = kategori::where('kategori_type','=',$id)->orderby("id")->get();
        $kategori->kategori_type = $id;
        return view("dashboard.kategori-ekle",compact("kategori","kategoris"));
    }
    public function kategoriupdate(Request $request,$id){


        $kategoriupdate = kategori::find($id);
        $kategoriupdate->kategori_title = $request->kategori_title;
        $kategoriupdate->kategori_aciklama = $request->kategori_aciklama;
        $kategoriupdate->kategori_link = $request->kategori_link;
        $kategoriupdate->kategori_banner_status = $request->kategori_banner_status=='on'?1:0;
        $kategoriupdate->kategori_status = $request->kategori_status=='on'?1:0;

        // Start of Banner
        $formFileName = "kategori_banner";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $kategoriupdate->kategori_banner = $attachFileFinalName;
        }
        // End of Banner

        $kategoriupdate->seo_title = $request->seo_title;
        $kategoriupdate->seo_description = $request->seo_description;
        $kategoriupdate->seo_keywords = $request->seo_keywords;
        $kategoriupdate->seo_url_slug = $request->seo_url_slug;

        $kategoriupdate->save();
        return redirect()->back()->with('KategoriUpdateSuccess',trans('Güncelleme İşlemi Başarıyla Yapıldı.'));

    }
    public function kategorieklesave(Request $request){
        $kategoriekle = new kategori();

        $kategoriekle->kategori_title = $request->kategori_title;
        $kategoriekle->kategori_aciklama = $request->kategori_aciklama;
        $kategoriekle->kategori_link = $request->kategori_link;
        $kategoriekle->kategori_type = $request->kategori_type;
        $kategoriekle->kategori_banner_status = $request->kategori_banner_status=='on'?1:0;
        $kategoriekle->kategori_status = $request->kategori_status=='on'?1:0;

        // Start of Banner
        $formFileName = "kategori_banner";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $kategoriekle->kategori_banner = $attachFileFinalName;
        }
        // End of Banner

        $kategoriekle->seo_title = $request->kategori_title;
        $kategoriekle->seo_url_slug = str_slug( $kategoriekle->kategori_title);
        $kategoriekle->save();
        return redirect()->back()->with('KategoriEkleSuccess',trans('Ekleme İşlemi Başarıyla Yapıldı.'));

    }
}
