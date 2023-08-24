<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use App\Models\Haber;
use App\Models\kategori;
use App\Models\Menu;
use App\Models\page;
use App\Models\PagePhoto;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $uploadPath = "fronted/images/slider/";
    public function anaysafa()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        $sliders = Slider::orderby("id")->get();
        $kategoripages = kategori::with('pages')->where('kategori_status','1')->first();
        $pagesblog = page::where('page_type','=','2')->take(5)->get();
        $sayfaduyuru = page::where("status",1)->where("kategori_id",">","0")->orderby("kategori_id")->get();
        $sayfas = page::with('kategori')->where("status",1)->get();
        return view("fronted.index",compact('ayar','sliders','habers',"sayfaduyuru","kategoripages","sayfas","pagesblog"));
    }

    public function url($url)
    {

        $ayar = Ayar::orderby("id")->first();

        $kategori = kategori::with('pages')->where('kategori_status','1')->where("seo_url_slug",$url)->latest()->first();
        $kategoriler = kategori::where('kategori_status','1')->orderBy("id")->get();

        $sayfa_photo = page::with('photos')->where('status','1')->get();

        if (!empty($kategori)){

            $kategoris = kategori::where('kategori_status','1')->where('kategori_type','=',$kategori->kategori_type)->get();
            return view("fronted.liste",compact('kategori','ayar',"kategoris","sayfa_photo","kategoriler"));
        }
        $kategoripages = kategori::with('pages')->where('kategori_status','1')->orderBy("id")->first();
        $sayfa = page::with('kategori')->with('file')->with('photos')->where('status','1')->where("seo_url_slug",$url)->first();


        if (!empty($sayfa)){

            return view("fronted.sayfa",compact('sayfa','ayar','kategoripages','kategoriler'));
        }

        return view("errors.404");


    }
    public function blanksayfa()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.blank-page",compact('ayar','habers'));
    }
    public function iletisim()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.iletisim",compact('ayar','habers'));
    }
    public function hakkimizda()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.hakkimizda",compact('ayar','habers'));
    }
    public function misyonvizyon()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.misyon-vizyon",compact('ayar','habers'));
    }
    public function yegalani()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.yeg-alani",compact('ayar','habers'));
    }
    public function haberler()
    {
        $ayar = Ayar::orderby("id")->first();
        $habers = Haber::orderby("id")->get();
        return view("fronted.haberler-sayfasi",compact('ayar','habers'));
    }

    public function haberlistesi(){
        $habers = Haber::orderby("id")->get();
        return view("dashboard.haber-liste",compact("habers"));
    }

    public function haberduzenle($id){
        $haber = Haber::find($id);
        return view("dashboard.haber-duzenle",compact("haber"));
    }
    public function haberekle(){
        $haber = Haber::orderby("id")->get();
        return view("dashboard.haber-ekle",compact("haber"));
    }
    public function sliderduzenle($id){
        $slider = Slider::find($id);
        return view("dashboard.slider-duzenle",compact("slider"));
    }
    public function sliderekle(){
        $slider = Slider::orderby("id")->get();
        return view("dashboard.slider-ekle",compact("slider"));
    }
    public function menuekle($id){
        $newmenu = new Menu;
        $newmenu->menu_type = $id;
        $selectpages = page::where('status','=','1')->orderby('id')->get();
        $kategorilist = kategori::where('kategori_status','=','1')->get();
        $newmenu->menu_status = 1;
        $ustmenu = Menu::where('menu_type','=',$id)->where('menu_ust_id','=','0')->orderby("id")->get();

        return view("dashboard.menu-ekle",compact("newmenu","ustmenu","selectpages","kategorilist"));
    }
    public function menuduzenle($id){
        $newmenu = Menu::with('selectpage')->find($id);
        $selectpages = page::where('status','=','1')->orderby('id')->get();
        $kategorilist = kategori::where('kategori_status','=','1')->get();
        $ustmenu = Menu::where('menu_type','=',$newmenu->menu_type)->where('menu_ust_id','=','0')->orderby("id")->get();
        return view("dashboard.menu-duzenle",compact("newmenu","ustmenu","selectpages","kategorilist"));
    }

//    public function haberekle(){
//        $haber = Haber::orderby("id")->get();
//        return view("dashboard.haber-duzenle",compact("haber"));
//    }

    public function haberupdate(Request $request, $id)
    {

        $habersayfasi = Haber::find($id);
        $habersayfasi->haber_title = $request->haber_title;
        $habersayfasi->haber_content = $request->haber_content;
        $habersayfasi->haber_kategori = $request->haber_kategori;
        $habersayfasi->haber_yetkili = $request->haber_yetkili;
        $habersayfasi->haber_image = "default-resim2.png";
        $habersayfasi->haber_slug = str_slug($habersayfasi->haber_title);
        $habersayfasi->save();

        return redirect()->back()->with('toast_success', 'Güncelleme İşlemi Başarılı.');
    }

    public function habereklesave(Request $request){

        $habersayfasi = new Haber();
        $habersayfasi->haber_title = $request->haber_title;
        $habersayfasi->haber_content = $request->haber_content;
        $habersayfasi->haber_kategori = $request->haber_kategori;
        $habersayfasi->haber_yetkili = $request->haber_yetkili;
        $habersayfasi->haber_tur = 1;
        $habersayfasi->haber_image = "default-resim2.png";
        $habersayfasi->haber_slug = str_slug( $habersayfasi->haber_title) ;
        $habersayfasi->save();

        return redirect()->back()->with('toast_success', 'Ekleme İşlemi Başarılı.');

    }
    public function slidersave(Request $request){

        $slidersayfasi = new Slider();
        // Start of Logo
        $formFileName = "slider_resim";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $slidersayfasi->slider_resim = $attachFileFinalName;
        }
        // End of Logo

        $slidersayfasi->slider_tur = "1";
        $slidersayfasi->slider_title = $request->slider_title;
        $slidersayfasi->slider_aciklama = $request->slider_aciklama;
        $slidersayfasi->slider_url = $request->slider_url;
        $slidersayfasi->slider_status = $request->slider_status;
        $slidersayfasi->save();

        return redirect()->back()->with('SliderAddSaveSuccess',trans('Ekleme İşlemi Başarıyla Yapıldı.'));

    }

    public function sliderupdate(Request $request, $id){
        $slidersayfasi = Slider::find($id);
        // Start of Logo
        $formFileName = "slider_resim";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $slidersayfasi->slider_resim = $attachFileFinalName;
        }
        // End of Logo

        $slidersayfasi->slider_tur = "1";
        $slidersayfasi->slider_title = $request->slider_title;
        $slidersayfasi->slider_aciklama = $request->slider_aciklama;
        $slidersayfasi->slider_url = $request->slider_url;
        $slidersayfasi->slider_status = $request->slider_status;
        $slidersayfasi->save();

        return redirect()->back()->with('SliderUpdateSuccess',trans('Ekleme İşlemi Başarıyla Yapıldı.'));

    }


}
