<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, App, DB;

class HomeController extends Controller
{
    protected $app;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function index()
    {
        $titleName = 'Home';
        return view('home', ['title' => $titleName]);
    }
    public function SetLang(Request $request)
    {
        session()->put('locale', $request->data);
        $locale = $request->data;
        App::setLocale($locale);
        return response()->json(['data' => $request->data, True]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllPageContent(Request $request, $slug1 = null, $slug2 = null, $slug3 = null)
    {   
       if($slug1 != null && $slug2 != null && $slug3 != null){
            $slug = $slug3;
       }elseif($slug1 != null && $slug2 != null && $slug3 == null){
            $slug = $slug2;
       }elseif($slug1 != null && $slug2 == null && $slug3 == null){
            $slug = $slug1;
       }else{
            $slug = $slug1;
       }
       $breadcum3 = DB::table('website_menu_management')->where('url',$slug3)->where('soft_delete', 0)->where('status', 3)->first();
       $breadcum2 = DB::table('website_menu_management')->where('url',$slug2)->where('soft_delete', 0)->where('status', 3)->first();
       $breadcum1 = DB::table('website_menu_management')->where('url',$slug1)->where('soft_delete', 0)->where('status', 3)->first();
       if(Session::get('locale') == 'hi'){  $breadcums1 =$breadcum1->name_hi ?? ''; } else {  $breadcums1 =$breadcum1->name_en ?? '';  }
       if(Session::get('locale') == 'hi'){  $breadcums2 =$breadcum2->name_hi ?? ''; } else {  $breadcums2 =$breadcum2->name_en ?? '';  }
       if(Session::get('locale') == 'hi'){  $breadcums3 =$breadcum3->name_hi ?? ''; } else {  $breadcums3 =$breadcum3->name_en ?? '';  }
       
       $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
       if(count($main_menu_slug)>0){
            foreach($main_menu_slug as $main_men){
                    $menu = new \stdClass;
                    $menu->main_menu =$main_men;
                    $menu->main_menu->sub_menu = DB::table('website_menu_management')->where('parent_id',$main_men->uid)->where('soft_delete', 0)->where('status', 3)->get();
                foreach($menu->main_menu->sub_menu as $submenu){
                        $menu->sub_menu =$submenu;
                        $menu->sub_menu->sub_sub_menu = DB::table('website_menu_management')->where('parent_id',$submenu->uid)->where('soft_delete', 0)->where('status', 3)->get();
                    }   
                }
            }else{
                return view('pages.error');
            }
        if(Session::get('locale') == 'hi'){  $titleName =config('staticTextLang.comingsoon_hi')?? 'जल्द आ रहा है'; } else {  $titleName =config('staticTextLang.comingsoon_en')?? 'coming soon';  }
        $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug)->where([['soft_delete', 0],['status',3]])->first();
        if(isset($metaData) && $metaData != null){
            $pageContent = DB::table('dynamic_page_content')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0]])->first();
            $pagePdf = DB::table('dynamic_content_page_pdf')->where('dcpm_id',$metaData->uid)
                                ->where([['soft_delete', 0]])->orderBy(DB::raw("DATE_FORMAT(start_date,'%Y-%m-%d')"), 'desc')->get();
            $pageGallery = DB::table('dynamic_content_page_gallery')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0]])->get();
            $pageBanner = DB::table('dynamic_page_banner')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0]])->first();
        }
        elseif($slug){
            $single_menu = DB::table('website_menu_management')->where('url',$slug)->where('soft_delete', 0)->where('status', 3)->first();
            $getForm = DB::table('form_designs_management')->where('website_menu_uid',$single_menu->uid)->where('soft_delete', 0)->where('status', 3)->first();
            if(!empty($getForm)){
                $getFormData = DB::table('form_data_management')->where('form_design_id',$getForm->uid)->where('soft_delete', 0)->where('status', 3)->get();
            }
        }
        $data = new \stdClass;
        $data->metaDatas =$metaData??'';
        $data->pageContents =$pageContent??[];
        $data->pagePdfs =$pagePdf??[];
        $data->pageGallerys =$pageGallery??[];
        $data->pageBanners =$pageBanner??'';
        $data->formbuilderdata =$getFormData??[];
        $data->formDataTableHead =isset($getForm->content)?json_decode($getForm->content):'';
        $data->formDataTableHeadCount =isset($getForm->content)?(count(json_decode($getForm->content))-1):'';
        if(Session::get('locale') == 'hi'){  $titleName =$metaData->page_title_hi ?? 'जल्द आ रहा है'; } else {  $titleName =$metaData->page_title_en ?? 'coming soon';  }
        //dd($slug);
        //dd($menu);
        return view('master-page', [
                    'title' => $titleName,
                    'sideMenu'=>$menu??'', 
                    'pageData'=>$data,
                    'slug' =>$slug??'',
                    'breadcum1' => $breadcums1,
                    'breadcum2' => $breadcums2,
                    'breadcum3' => $breadcums3,
                ]);
    }

    function getMenuTree($menus, $parentId)
    {
        $branch = array();
        
        foreach ($menus as $menu) {

            if ($menu->parent_id == $parentId) {

                $children = $this->getMenuTree($menus, $menu->uid);
                if ($children) {
                    $menu->children = $children;
                }
                $branch[] = $menu;
            }
        }
        return $branch;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUs(Request $request)
    {
        $titleName = 'Contact Us';
       return view('pages.contact-us',['title' => $titleName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function RegisterForNCNC(Request $request)
    {
        $titleName = 'Register For NCNC';
        return view('pages.register-for-ncnc',['title' => $titleName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function feedbackDataSave(Request $request)
    {
        $titleName = 'Feed Back';
        return view('pages.feedback',['title' => $titleName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function siteMapList(Request $request)
    {
        $titleName = 'Site Map';
        return view('pages.sitemap',['title' => $titleName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function photoGallery(Request $request)
    {
        $titleName = 'Photo Gallery';
        $galleryData = [];
            $gallery = DB::table('gallery_management')
                ->where('type', 0)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($gallery) > 0) {
                foreach ($gallery as $images) {
                    $gallay_images = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_images) > 0) {
                        $galleryData[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_images
                        ];
                    }
                }
            }
        //dd($galleryData);
        return view('pages.photo-gallery',['title' => $titleName,'photogallery'=>$galleryData]);
    }

    public function veerGatha(Request $request)
    {
        $titleName = 'Veer Gatha';
        $veergathalist = DB::table('employee_directories as emp')
                ->select('emp.*','deprt.name_en as desi_name_en','deprt.name_hi as desi_name_hi',
                    DB::raw("CONCAT(emp.fname_en, ' ', emp.mname_en, ' ', emp.lname_en) as name_en"),
                    DB::raw("CONCAT(emp.fname_hi, ' ', emp.mname_hi, ' ', emp.lname_hi) as name_hi"))
                ->leftjoin('emp_depart_designations as deprt','emp.designation_id','=','deprt.uid')
                ->where('emp.status', 3)
                ->where('emp.soft_delete', 0)
                ->orderBy('emp.short_order','desc')
                ->get();
        //dd($veergathalist);
        return view('pages.veer-gatha',['title' => $titleName,'veerlist'=>$veergathalist]);
    }
    public function organizationChart(Request $request)
    {
        $titleName = 'Organization Chart';
        return view('pages.organization-chart',['title' => $titleName]);
    }
}
