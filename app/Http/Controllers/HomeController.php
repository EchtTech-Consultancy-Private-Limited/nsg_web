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
    public function getAllPageContent(Request $request, $slug, $middelSlug = null, $lastSlugs = null, $finalSlug = null, $finallastSlug = null)
    {   
       // dd($request->route('slug'));
        $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug)->where([['soft_delete', 0],['status',3]])->first();
       // dd($metaData);
        if($slug){
            $menu = new \stdClass;
            $single_menu = DB::table('website_menu_management')->where('url',$slug)->where('soft_delete', 0)->where('status', 3)->first();
            if($single_menu){
                $menu->name =$single_menu;
                $sing_menu = DB::table('website_menu_management')->where('uid',$single_menu->parent_id)->where('soft_delete', 0)->where('status', 3)->first();
                if($sing_menu){
                    $menu->name =$sing_menu;  
                }
            }
            if(isset($sing_menu) && $sing_menu){
                $side_menu = DB::table('website_menu_management')->where('parent_id',$sing_menu->uid)->where('soft_delete', 0)->where('status', 3)->get();
                if($side_menu){
                    $menu->name =$side_menu;  
                }
            }else{
                return view('pages.error'); 
            }
            
        }
        if($sing_menu){
            $mainMenu = $sing_menu;
        }else{
            $mainMenu ='';
        }

        if($metaData == null){
            if(Session::get('locale') == 'hi'){  $titleName =config('staticTextLang.comingsoon_hi')?? 'NSG'; } else {  $titleName =config('staticTextLang.comingsoon_en')?? 'NSG';  }
            return view('pages.error-master', ['title' => $titleName,'sideMenu'=>$menu->name, 
            'manMenu' =>$mainMenu,]);
        }else{
            $pageContent = DB::table('dynamic_page_content')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->first();
            $pagePdf = DB::table('dynamic_content_page_pdf')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->get();
            $pageGallery = DB::table('dynamic_content_page_gallery')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->get();
            $pageBanner = DB::table('dynamic_page_banner')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->first();
        }
        /** get menu submenu */
        
        //dd($mainMenu);
        $data = new \stdClass;
        $data->metaDatas =$metaData;
        $data->pageContents =$pageContent;
        $data->pagePdfs =$pagePdf;
        $data->pageGallerys =$pageGallery;
        $data->pageBanners =$pageBanner;
        if(Session::get('locale') == 'hi'){  $titleName =$metaData->page_title_hi ?? 'NSG'; } else {  $titleName =$metaData->page_title_en ?? 'NSG';  }

        //dd($data);

        return view('master-page', ['title' => $titleName,
                    'sideMenu'=>$menu->name, 
                    'manMenu' =>$mainMenu,
                    'pageData'=>$data,
                    'slug' =>$request->route('slug')??''
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
        return view('pages.photo-gallery',['title' => $titleName]);
    }
}
