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
       // dd($request->route('slug'));
       if($slug1 != null && $slug2 != null && $slug3 != null){
            $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug3)->where([['soft_delete', 0],['status',3]])->first();
       }elseif($slug1 != null && $slug2 != null && $slug3 == null){
            $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug2)->where([['soft_delete', 0],['status',3]])->first();
       }elseif($slug1 != null && $slug2 == null && $slug3 == null){
            $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug1)->where([['soft_delete', 0],['status',3]])->first();
       }else{
            $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug1)->where([['soft_delete', 0],['status',3]])->first();
       }
       //dd($metaData);
       if($slug1 != null && $slug2 != null && $slug3 != null){
            $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
        }elseif($slug1 != null && $slug2 != null && $slug3 == null){
            $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
        }elseif($slug1 != null && $slug2 == null && $slug3 == null){
            $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
        }else{
            $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
        }

    //     if(count($main_menu_slug)>0){
    //         foreach($main_menu_slug as $main_men){
    //                 $menu = new \stdClass;
    //                 $menu->main_menu =$main_men;
    //                 $menu->main_menu->sub_menu = DB::table('website_menu_management')->where('parent_id',$main_men->uid)->where('soft_delete', 0)->where('status', 3)->get();
    //             foreach($menu->main_menu->sub_menu as $submenu){
    //                     $menu->sub_menu =$submenu;
    //                     $menu->sub_menu->sub_sub_menu = DB::table('website_menu_management')->where('parent_id',$submenu->uid)->where('soft_delete', 0)->where('status', 3)->get();
    //                 }   
    //                 //$menu->main_menu->sub_menu =$sub_menu;
    //                // $menu->sub_menu->sub_sub_menu =$sub_sub_menu;
    //             }
                
    //         }else{
    //             $menu->name =$main_menu_slug;
    //         }
       
    //    dd($menu);
        // if($slug1){
        //     $menu = new \stdClass;
        //     $single_menu = DB::table('website_menu_management')->where('url',$slug1)->where('soft_delete', 0)->where('status', 3)->first();
        //     if($single_menu){
        //         $menu->name =$single_menu;
        //         $sub_menu = DB::table('website_menu_management')->where('uid',$single_menu->parent_id)->where('soft_delete', 0)->where('status', 3)->first();
        //         if($sub_menu){
        //             $menu->name =$sub_menu;  
        //         }
        //     }
        //     if(isset($sub_menu) && $sub_menu !=''){
        //         $subsub_menu = DB::table('website_menu_management')->where('parent_id',$sub_menu->uid)->where('soft_delete', 0)->where('status', 3)->get();
        //         if($subsub_menu){
        //             $menu->name =$subsub_menu;  
        //         }
        //     }
        //     // else{
        //     //     return view('pages.error'); 
        //     // }
            
        // }
        // if(isset($sub_menu) && $sub_menu !='' || isset($subsub_menu) && $subsub_menu !=''){
        //     $mainMenu = $sub_menu??$subsub_menu;
        // }else{
        //     $mainMenu ='';
        // }
        $mainMenu ='';
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
            if($getForm !=''){
                $getFormData = DB::table('form_data_management')->where('form_design_id',$getForm->uid)->where('soft_delete', 0)->where('status', 3)->get();
            }else{
                if(Session::get('locale') == 'hi'){  $titleName =config('staticTextLang.comingsoon_hi')?? 'NSG'; } else {  $titleName =config('staticTextLang.comingsoon_en')?? 'NSG';  }
                    return view('pages.error-master', ['title' => $titleName,'sideMenu'=>$menu->name, 
                    'manMenu' =>$mainMenu,]);
            }
           // dd($getFormData);
        }
        else{
            if(Session::get('locale') == 'hi'){  $titleName =config('staticTextLang.comingsoon_hi')?? 'NSG'; } else {  $titleName =config('staticTextLang.comingsoon_en')?? 'NSG';  }
                return view('pages.error-master', ['title' => $titleName,'sideMenu'=>$menu->name, 
                'manMenu' =>$mainMenu,]);
           
        }
        /** get menu submenu */
        
        //dd(json_decode($getForm->content));

        $data = new \stdClass;
        $data->metaDatas =$metaData??$single_menu;
        $data->pageContents =$pageContent??[];
        $data->pagePdfs =$pagePdf??[];
        $data->pageGallerys =$pageGallery??[];
        $data->pageBanners =$pageBanner??'';
        $data->formbuilderdata =$getFormData??[];
        $data->formDataTableHead =isset($getForm->content)?json_decode($getForm->content):'';
        $data->formDataTableHeadCount =isset($getForm->content)?(count(json_decode($getForm->content))-1):'';
        if(Session::get('locale') == 'hi'){  $titleName =$metaData->page_title_hi ?? 'NSG'; } else {  $titleName =$metaData->page_title_en ?? 'NSG';  }

        //dd($data);

        return view('master-page', ['title' => $titleName,
                    'sideMenu'=>$menu->name??'', 
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
