<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session, App, DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $metaData = DB::table('dynamic_content_page_metatag')->where('menu_slug',$slug)->where([['soft_delete', 0],['status',3]])->first();
        
        if($metaData == null){
            $titleName = 'Error';
            return view('pages.error', ['title' => $titleName]);
        }else{
            $pageContent = DB::table('dynamic_page_content')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->first();
            $pagePdf = DB::table('dynamic_content_page_pdf')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->get();
            $pageGallery = DB::table('dynamic_content_page_gallery')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->get();
            $pageBanner = DB::table('dynamic_page_banner')->where('dcpm_id',$metaData->uid)->where([['soft_delete', 0],['status',3]])->first();
        }
        $data = new \stdClass;
        $data->metaDatas =$metaData;
        $data->pageContents =$pageContent;
        $data->pagePdfs =$pagePdf;
        $data->pageGallerys =$pageGallery;
        $data->pageBanners =$pageBanner;
        $titleName = $metaData->page_title_en ?? 'NSG';
        return view('master-page', ['title' => $titleName, 'pageData'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
