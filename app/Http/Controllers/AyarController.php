<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use App\Models\kategori;
use App\Models\Menu;
use App\Models\page;
use App\Models\Page_Photo;
use App\Models\PageFile;
use App\Models\PagePhoto;
use App\Models\Slider;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class AyarController extends Controller
{
    private $uploadPath = "images/";
    private $uploadPathPage = "fronted/images/gallery";
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadimageEditor(Request $request){
        if ($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;


            $request->file('upload')->move(public_path('media'),$fileName);

            $url = asset('media/' . $fileName);
            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url'=>$url
            ]);


        }
    }


    public function index(){
        $ayar = Ayar::orderby("id")->first();
//        $blog = blog::where("blog_slug","=",$blog_slug)->where("blog_tur","=",2)->first();
//        if (!empty($ayar))
            return view("dashboard.genel-ayarlar",compact("ayar"));
    }
    public function sliderliste(){
        $ayar = Ayar::orderby("id")->first();
        $sliders = Slider::orderby("id")->get();
//        $blog = blog::where("blog_slug","=",$blog_slug)->where("blog_tur","=",2)->first();
//        if (!empty($ayar))
            return view("dashboard.slider-liste",compact("ayar","sliders"));
    }
    public function editor(){
        $ayar = Ayar::orderby("id")->first();
        $sliders = Slider::orderby("id")->get();
            return view("dashboard.editor",compact("ayar","sliders"));
    }
    public function menulist($id){
        $ayar = Ayar::orderby("id")->first();
        $menus = Menu::with(['ust_menu','alt_menu'])->where('menu_type','=',$id)->where('menu_ust_id','=',0)->orderby('menu_sira')->get();
        $menutipi = ['type'=>$id, 'name'=>config('ayarlar.menu_type')[$id-1]];
            return view("dashboard.menu-liste",compact("ayar","menus","menutipi"));
    }
    public function sayfalist($id){
        $pages = page::orderby("id")->where('page_type','=',$id)->get();
        $kategori = ['type'=>$id, 'name'=>config('ayarlar.page_type')[$id-1]];
            return view("dashboard.sayfa-liste",compact("pages","kategori"));
    }
    public function sayfaekle($page_type){
        $newpage = new page();
        $newpages = page::orderby("id")->first();
        $kategoris = kategori::where("kategori_type",'=',$page_type)->orderby("id")->get();
        $kategoriname = ['name'=>config('ayarlar.page_type')];
        return view("dashboard.sayfa-ekle",compact("newpage","newpages","kategoris","kategoriname","page_type"));
    }
    public function sayfaduzenle($id){
        $editpage = page::find($id);
//        $pages = page::where('status','1')->get();
        $kategorilist = kategori::where('kategori_status','=','1')->get();
        $sayfa = PageFile::where("page_id","=","$id")->get();
        $photo = PagePhoto::where("page_id","=","$id")->get();
        $imageLists = PagePhoto::where('page_id','=',$id)->orderby('id',"DESC")->get();
//        $kategori = kategori::orderby("id")->get();
        return view("dashboard.sayfa-duzenle",compact("editpage","kategorilist","sayfa","photo","imageLists"));
    }

    public function ayarupdate(Request $request, $id){
        // Start of Logo
        $formFileName = "site_logo";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));
        $ayarupdate = Ayar::find($id);

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $ayarupdate->site_logo = $attachFileFinalName;
        }
        // End of Logo
        //    // Start of Favicon
        $formFileName1 = "site_favicon";
        $attachFileFinalName1 = "";
//        dd($request->file($formFileName));
        if ($request->$formFileName1 != "") {
            $attachFileFinalName1 = time() . rand(1111, 9999) . '.' . $request->file($formFileName1)->getClientOriginalName();
            $path = $this->uploadPath;
            $request->file($formFileName1)->move($path, $attachFileFinalName1);
            $ayarupdate->site_favicon = $attachFileFinalName1;
        }
        // End of Favicon



        $ayarupdate->site_color = $request->site_color;
        $ayarupdate->site_title = $request->site_title;
        $ayarupdate->site_keywords = $request->site_keywords;
        $ayarupdate->site_description = $request->site_description;


        $ayarupdate->contact_adres = $request->contact_adres;
        $ayarupdate->contact_tel = $request->contact_tel;
        $ayarupdate->contact_tel2 = $request->contact_tel2;
        $ayarupdate->contact_email = $request->contact_email;
        $ayarupdate->sosyal_instagram = $request->sosyal_instagram;
        $ayarupdate->sosyal_facebook = $request->sosyal_facebook;
        $ayarupdate->sosyal_twitter = $request->sosyal_twitter;
        $ayarupdate->sosyal_linkedin = $request->sosyal_linkedin;
        $ayarupdate->sosyal_youtube = $request->sosyal_youtube;
        $ayarupdate->sosyal_whatsapp = $request->sosyal_whatsapp;
//        $ayarupdate->blog_slug = str_slug( $blogsayfasi->blog_title);
        $ayarupdate->save();

        return redirect()->back()->with('toast_success', 'Güncelleme İşlemi Başarılı.');

    }

    public function menueklesave(Request $request){
//        $next_nor_no = Menu::where('menu_type','=',$request->menu_type)->where('menu_ust_id','=',$request->menu_ust_id)->max('menu_sira');
//        if ($next_nor_no < 1) {
//            $next_nor_no = 1;
//        } else {
//            $next_nor_no++;
//        }

        $menueklesave = new Menu();
//        $menueklesave->menu_sira = $next_nor_no;
        $menueklesave->menu_type = $request->menu_type;
        $menueklesave->menu_ust_id = $request->menu_ust_id;
        $menueklesave->menu_title = $request->menu_title;
        $menueklesave->menu_status = $request->menu_status;
        $menueklesave->menu_link = $request->menu_link;
        $menueklesave->menu_sira = $request->menu_sira;
        $menueklesave->menu_page_id = $request->menu_page_id;
        $menueklesave->menu_link_type = $request->menu_link_type;
        $menueklesave->kategori_id = $request->kategori_id;

        if($menueklesave->menu_link_type==0) {
            $menueklesave->menu_page_id =0;
            $menueklesave->kategori_id =0;
        }
        elseif ($menueklesave->menu_link_type==1)
        {
            $menueklesave->menu_link = "";
            $menueklesave->kategori_id =0;
        }
        else{
            $menueklesave->menu_link = "";
            $menueklesave->menu_page_id =0;
        }

        $menueklesave->save();

        return redirect()->back()->with('menuSuccess',trans('Ekleme İşlemi Başarıyla Yapıldı.'));
//        return redirect()->back()->with('basarili', 'Ekleme İşlemi Başarılı.');

    }
    public function menusupdate(Request $request,$id){

        $menusupdate = Menu::find($id);
//        dd($menusupdate->menu_ust_id);
        $menusupdate->menu_sira = $request->menu_sira;
        $menusupdate->menu_type = $request->menu_type;
        $menusupdate->menu_ust_id = $request->menu_ust_id;
        $menusupdate->menu_title = $request->menu_title;
        $menusupdate->menu_status = $request->menu_status;
        $menusupdate->menu_link = $request->menu_link;
        $menusupdate->menu_page_id = $request->menu_page_id;
        $menusupdate->menu_link_type = $request->menu_link_type;
        $menusupdate->kategori_id = $request->kategori_id;

        if($menusupdate->menu_link_type==0) {
            $menusupdate->menu_page_id =0;
            $menusupdate->kategori_id =0;
        }
        elseif ($menusupdate->menu_link_type==1)
        {
            $menusupdate->menu_link = "";
            $menusupdate->kategori_id =0;
        }
        else{
            $menusupdate->menu_link = "";
            $menusupdate->menu_page_id =0;
        }

        $menusupdate->save();
        return redirect()->back()->with('menuUpdateSuccess',trans('Güncelleme İşlemi Başarıyla Yapıldı.'));

    }
    public function menusil($id)
    {
        //
        $Menu = Menu::find($id);
        if (!empty($Menu)) {
            $Menu->delete();
            Menu::where('menu_ust_id','=',$id)->delete();
            return redirect()->back()->with('toast_success', 'Silme İşlemi Başarılı.');
        } else {
            return redirect()->back()->with('toast_error', 'Silem İşlemi Başarısız.');
        }
    }
    public function sayfaeklesave(Request $request){

        $yenisayfaekle = new page();
        $yenisayfaekle->title = $request->title;
        $yenisayfaekle->details = $request->details;
        $yenisayfaekle->photo_file = $request->photo_file;
        $yenisayfaekle->status = $request->status;
        $yenisayfaekle->seo_title = $request->title;
        $yenisayfaekle->page_type = $request->page_type;
        $yenisayfaekle->kategori_id = $request->kategori_id;
        $yenisayfaekle->seo_url_slug = str_slug( $yenisayfaekle->title) ;
        $yenisayfaekle->save();

        return redirect()->back()->with('PageSuccess',trans('Ekleme İşlemi Başarıyla Yapıldı.'));
    }
    public function sayfasil($id)
    {
        //
        $page = page::find($id);
        if (!empty($page)) {
            $page->delete();
            return redirect()->back()->with('PageDeleteSuccess',trans('Silme İşlemi Başarıyla Yapıldı.'));
        } else {
            return redirect()->back();
        }
    }
    public function sayfaupdate(Request $request,$id){


        $formFileName = "photo_file";
        $attachFileFinalName = "";
//        dd($request->file($formFileName));
        $sayfaupdate = page::find($id);

//       $dosyalar = $request->allFiles();

        if ($request->$formFileName != "") {
            $attachFileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalName();
            $path = $this->uploadPathPage;
            $request->file($formFileName)->move($path, $attachFileFinalName);
            $sayfaupdate->photo_file = $attachFileFinalName;
        }

        if(($request->file('attach_file')) != null) {
            foreach ($request->file('attach_file') as $productImage) {
                $file = $productImage;
                $file->move('pdf', $file->getClientOriginalName());
                $pagefile = new PageFile();
                $pagefile->page_id = $sayfaupdate->id;
                $pagefile->title = $file->getClientOriginalName();
                $pagefile->attach_file = $file->getClientOriginalName();
                $pagefile->save();
            }
        }


        $sayfaupdate->title = $request->title;
        $sayfaupdate->kisa_aciklama = $request->kisa_aciklama;
        $sayfaupdate->details = $request->details;
        $sayfaupdate->status = $request->status;
        $sayfaupdate->seo_title = $request->seo_title;
        $sayfaupdate->date = $request->date;
        $sayfaupdate->seo_description = $request->seo_description;
        $sayfaupdate->seo_keywords = $request->seo_keywords;
        $sayfaupdate->seo_url_slug = $request->seo_url_slug;
        $sayfaupdate->menu_status = $request->menu_status=='on'?1:0;
        $sayfaupdate->kategori_id = $request->kategori_id;
        $sayfaupdate->save();
        return redirect()->back()->with('SayfaUpdateSuccess',trans('Güncelleme İşlemi Başarıyla Yapıldı.'));

    }


    public function sayfadosyasil($id)
    {
        //
        $pageFile = PageFile::find($id);
        if (!empty($pageFile)) {
            $pageFile->delete();
            return redirect()->back()->with('PageDeleteSuccess',trans('Silme İşlemi Başarıyla Yapıldı.'));
        } else {
            return redirect()->back();
        }
    }
    public function kategorisil($id)
    {
        //
        $KategoriSil = kategori::find($id);
        if (!empty($KategoriSil)) {
            $KategoriSil->delete();
            return redirect()->back()->with('PageDeleteSuccess',trans('Silme İşlemi Başarıyla Yapıldı.'));
        } else {
            return redirect()->back();
        }
    }
    public function slidersil($id)
    {
        //
        $SliderSil = Slider::find($id);
        if (!empty($SliderSil)) {
            $SliderSil->delete();
            return redirect()->back()->with('PageDeleteSuccess',trans('Silme İşlemi Başarıyla Yapıldı.'));
        } else {
            return redirect()->back();
        }
    }

}
