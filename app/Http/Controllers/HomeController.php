<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\CaptchaCode;
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
        $sectionZero = DB::table('home_page_sections_list as sl')
                            ->select('sd.*')
                            ->join('home_page_sections_designs_details as sd','sd.hpsi_id','=','sl.uid')
                            ->where('sl.sort_order',0)
                            ->where('sl.soft_delete', 0)
                            ->where('sl.status', 3)
                            ->get();
        $sectionOne = DB::table('home_page_sections_list as sl')
                            ->select('sd.*')
                            ->join('home_page_sections_designs_details as sd','sd.hpsi_id','=','sl.uid')
                            ->where('sl.sort_order',1)
                            ->where('sl.soft_delete', 0)
                            ->where('sl.status', 3)
                            ->get();
        $sectionTwo = DB::table('home_page_sections_list as sl')
                            ->select('sd.*')
                            ->join('home_page_sections_designs_details as sd','sd.hpsi_id','=','sl.uid')
                            ->where('sl.sort_order',2)
                            ->where('sl.soft_delete', 0)
                            ->where('sl.status', 3)
                            ->get();
        $tenderType = DB::table('tender_type')->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
        
        $news_management = DB::table('news_management')
                                ->select('news_management.start_date as startDate'
                                ,'news_management.title_name_en as title_name_en'
                                ,'news_management.title_name_hi as title_name_hi','news_details.*')
                                ->where('news_management.soft_delete', 0)
                                ->where('news_management.status', 3)
                                ->leftjoin('news_details', 'news_management.uid', '=', 'news_details.news_id')
                                ->where('news_details.soft_delete', 0)
                                ->whereDate('news_details.archivel_date', '>=', now()->toDateString())
                                ->latest('news_management.created_at')
                                ->latest('news_details.created_at')
                                ->get();

        $tender_management = DB::table('tender_management')
                                ->select('tender_management.start_date as startDate'
                                ,'tender_management.title_name_en as title_name_en'
                                ,'tender_management.title_name_hi as title_name_hi','tender_management.tender_typeid',
                                'tender_management.tender_cost',
                                'tender_details.*')
                                ->where('tender_management.soft_delete', 0)
                                ->where('tender_management.status', 3)
                                ->leftjoin('tender_details', 'tender_management.uid', '=', 'tender_details.tender_id')
                                ->where('tender_details.soft_delete', 0)
                                ->whereDate('tender_details.archivel_date', '>=', now()->toDateString())
                                ->latest('tender_management.created_at')
                                ->latest('tender_details.created_at')
                                ->get();
        //dd($tender_management);
        return view('home', ['title' => $titleName,'sectionData'=>$sectionTwo??[],
                  'sectionZero' =>$sectionZero??[], 'sectionOne'=>$sectionOne??[],
                  'tenderTypes'=>$tenderType??[],
                  'tender_managements' =>$tender_management,
                  'news_managements'=>$news_management
                 ]);
    }

    public function getTenderData(Request $request, $slug){
        
        $tender_management = DB::table('tender_management')
                            ->select('tender_management.start_date as startDate','tender_management.end_date as endDate'
                            ,'tender_management.title_name_en as title_name_en'
                            ,'tender_management.title_name_hi as title_name_hi','tender_management.tender_typeid',
                            'tender_management.tender_cost','tender_management.description_en','tender_management.description_hi',
                            'tender_details.*')
                            ->where('tender_management.soft_delete', 0)
                            ->where('tender_management.status', 3)
                            ->leftjoin('tender_details', 'tender_management.uid', '=', 'tender_details.tender_id')
                            ->where('tender_management.tender_typeid', $slug)
                            ->where('tender_details.soft_delete', 0)
                            ->whereDate('tender_details.archivel_date', '>=', now()->toDateString())
                            ->latest('tender_management.created_at')
                            ->latest('tender_details.created_at')
                            ->get();
         if(isset($slug) && $slug== 'current-tenders'){
            $titleName='Current Tenders';
         }elseif(isset($slug) && $slug== 'current-auctions'){
            $titleName='Current Auctions';
         }elseif(isset($slug) && $slug== 'qrs-for-comments'){
            $titleName='QR'.'s'.' for Comments';
         }elseif(isset($slug) && $slug== 'tenders-awarded'){
            $titleName='Tenders Awarded';
         }else{
            $titleName='Tenders';
         }
        // dd($tender_management);
        return view('pages.tender-list',[
            'title' => $titleName,
            'slug'=>$slug,
            'tender_managements' =>$tender_management,
            ]);
    }
    public function getArchiveTenderData(Request $request, $slug){
        
        $tender_management = DB::table('tender_management')
                            ->select('tender_management.start_date as startDate','tender_management.end_date as endDate'
                            ,'tender_management.title_name_en as title_name_en'
                            ,'tender_management.title_name_hi as title_name_hi','tender_management.tender_typeid',
                            'tender_management.tender_cost','tender_management.description_en','tender_management.description_hi',
                            'tender_details.*')
                            ->where('tender_management.soft_delete', 0)
                            ->where('tender_management.status', 3)
                            ->leftjoin('tender_details', 'tender_management.uid', '=', 'tender_details.tender_id')
                            ->where('tender_management.tender_typeid', $slug)
                            ->where('tender_details.soft_delete', 0)
                            ->whereDate('tender_details.archivel_date', '<=', now()->toDateString())
                            ->latest('tender_management.created_at')
                            ->latest('tender_details.created_at')
                            ->get();
         if(isset($slug) && $slug== 'current-tenders'){
            $titleName='Current Tenders';
         }elseif(isset($slug) && $slug== 'current-auctions'){
            $titleName='Current Auctions';
         }elseif(isset($slug) && $slug== 'qrs-for-comments'){
            $titleName='QR'.'s'.' for Comments';
         }elseif(isset($slug) && $slug== 'tenders-awarded'){
            $titleName='Tenders Awarded';
         }else{
            $titleName='Tenders';
         }
        // dd($tender_management);
        return view('pages.tender-archive-list',[
            'title' => $titleName,
            'slug'=>$slug,
            'tender_managements' =>$tender_management,
            ]);
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
       $breadcum3 = DB::table('website_menu_management')->where('url',$slug3)->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->first();
       $breadcum2 = DB::table('website_menu_management')->where('url',$slug2)->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->first();
       $breadcum1 = DB::table('website_menu_management')->where('url',$slug1)->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->first();
       if(Session::get('locale') == 'hi'){  $breadcums1 =$breadcum1->name_hi ?? ''; } else {  $breadcums1 =$breadcum1->name_en ?? '';  }
       if(Session::get('locale') == 'hi'){  $breadcums2 =$breadcum2->name_hi ?? ''; } else {  $breadcums2 =$breadcum2->name_en ?? '';  }
       if(Session::get('locale') == 'hi'){  $breadcums3 =$breadcum3->name_hi ?? ''; } else {  $breadcums3 =$breadcum3->name_en ?? '';  }
       
       $main_menu_slug = DB::table('website_menu_management')->where('url',$slug1)->where([['soft_delete', 0],['status',3]])->get();
       if(count($main_menu_slug)>0){
            foreach($main_menu_slug as $main_men){
                    $menu = new \stdClass;
                    $menu->main_menu =$main_men;
                    $menu->main_menu->sub_menu = DB::table('website_menu_management')->where('parent_id',$main_men->uid)->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
                foreach($menu->main_menu->sub_menu as $submenu){
                        $menu->sub_menu =$submenu;
                        $menu->sub_menu->sub_sub_menu = DB::table('website_menu_management')->where('parent_id',$submenu->uid)->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
                    }   
                }
            }else{
                return view('pages.error');
            }
            $getForm = '';
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
            if($single_menu !=null){
                $getForm = DB::table('form_designs_management')->where('website_menu_uid',$single_menu->uid)->where('soft_delete', 0)->where('status', 3)->first();
                if(!empty($getForm)){
                    $getFormData = DB::table('form_data_management')->where('form_design_id',$getForm->uid)->where('soft_delete', 0)->where('status', 3)->get();
                }
            }
        }
       // dd($getForm);
       if(!empty($getForm)){
        foreach(json_decode($getForm->content) as $tableHead){
                if($tableHead->label != 'Submit' && $tableHead->label != 'submit' && $tableHead->label != 'save' && $tableHead->label != 'Save'){
                    $head[]=$tableHead;
                }
            }
        }
        
       
        $data = new \stdClass;
        $data->metaDatas =$metaData??'';
        $data->pageContents =$pageContent??[];
        $data->pagePdfs =$pagePdf??[];
        $data->pageGallerys =$pageGallery??[];
        $data->pageBanners =$pageBanner??'';
        $data->formbuilderdata =$getFormData??[];
        //$data->formDataTableHead =isset($getForm->content)?json_decode($getForm->content):'';
        $data->formDataTableHead =isset($head)?$head:[];
        $data->formDataTableHeadCount =isset($getForm->content)?(count(json_decode($getForm->content))-1):'';
        if(Session::get('locale') == 'hi'){  $titleName =$metaData->page_title_hi ?? 'जल्द आ रहा है'; } else {  $titleName =$metaData->page_title_en ?? 'coming soon';  }
        //dd($slug);
       // dd($data);
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
    public function newsList(Request $request)
    {
        $titleName = 'News';
        $news_management = DB::table('news_management')
                                ->select('news_management.start_date as startDate'
                                ,'news_management.title_name_en as title_name_en'
                                ,'news_management.title_name_en as title_name_hi','news_details.*')
                                ->where('news_management.soft_delete', 0)
                                ->where('news_management.status', 3)
                                ->leftjoin('news_details', 'news_management.uid', '=', 'news_details.news_id')
                                ->where('news_details.soft_delete', 0)
                                ->whereDate('news_details.archivel_date', '>=', now()->toDateString())
                                ->latest('news_management.created_at')
                                ->latest('news_details.created_at')
                                ->get();
       return view('pages.news-list',[
                    'title' => $titleName,
                    'news_managements'=>$news_management
    ]);
    }

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
        $CustomCaptchas = new CaptchaCode();
        $CustomCaptch = $CustomCaptchas->generateCode();
        Session::put('captcha', $CustomCaptch);
        return view('pages.register-for-ncnc',['title' => $titleName,'CustomCaptch'=>$CustomCaptch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function feedbackDataSave(Request $request)
    {
        
        $CustomCaptchas = new CaptchaCode();
        
        $CustomCaptch = $CustomCaptchas->generateCode();
        Session::put('captcha', $CustomCaptch);
        //dd($CustomCaptch);
        $titleName = 'Feed Back';
        return view('pages.feedback',['title' => $titleName,'CustomCaptch'=>$CustomCaptch]);
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


    public function screenreaderaccess(Request $request)
    {
        
        $titleName = 'Screen Reader Access';
        return view('pages.screen-reader-access',['title' => $titleName]);
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
        $now = date('Y');
        $then = $now - 8;
        $years = range( $now, $then );
        //dd($galleryData);
            return view('pages.photo-gallery',['title' => $titleName,
            'photogallery'=>$galleryData,
            'years'=>$years,
        ]);
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
                ->orderBy('emp.short_order','asc')
                ->get();
        //dd($veergathalist);
        return view('pages.veer-gatha',['title' => $titleName,'veerlist'=>$veergathalist]);
    }
    public function organizationChart(Request $request)
    {
        $titleName = 'Organization Chart';
        return view('pages.organization-chart',['title' => $titleName]);
    }

    public function feedbackDataStore(Request $request){
        // Validate the incoming request data
        //dd(Session::get('capcode'));
        try{
        $request->validate([
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/|max:40',
            'feedbackRelatedTo' => 'required',
            'email' => 'required|email',
            'remark' => 'required|string',
            'captchacode' => 'required|in:'.Session::get('captcha'),
            // Add more validation rules as needed
        ],[
            'fullname.required' => 'The name field is required.',
            'fullname.regex' => 'The name must be a string.',
            'fullname.max' => 'The name may not be greater than 40 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'remark.required' => 'The remark field is required.',
            'feedbackRelatedTo.required' => 'The feedback Related To field is required.',
            'captchacode.required' => 'The Captcha field is required.',
            'captchacode.captchacode' => 'Please enter a valid Captcha',
        ]);
        // Create or save the data
        DB::table('feedback')->insert([
                'name'=>$request->fullname,
                'email'=>$request->email,
                'designation'=>$request->feedbackRelatedTo,
                'message'=>$request->remark,
        ]);
        }catch(Throwable $e){report($e);
            return false;
        }
        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }
    public function RegisterForNCNCStore(Request $request){
        // Validate the incoming request data
        try{
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'registration_No_of_the_firm' => 'required',
            'fileUpload' => 'required|mimes:jpeg,bmp,png,gif,svg|max:25000',
            's_no' => 'required',
            'name_dt' => 'required',
            'designation_dt' => 'required',
            'nationality' => 'required',
            'passport_no' => 'required',
            'id_no' => 'required',
            'email' => 'required',
            'remark' => 'required',
            'captcha' => 'required|in:'.Session::get('captcha'),
        ],[
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 40 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'remark.required' => 'The remark field is required.',
            'designation.required' => 'The designation field is required.',
            'designation_dt.required' => 'The designation details field is required.',
            'registration_No_of_the_firm.required' => 'The registration No of the firm field is required.',
            'fileUpload.required' => 'The file upload field is required.',
            's_no.required' => 'The s no field is required.',
            'name_dt.required' => 'The name field is required.',
            'nationality.required' => 'The nationality field is required.',
            'passport_no.required' => 'The passport no field is required.',
            'id_no.required' => 'The id no field is required.',
            'passport_no.required' => 'The passport no field is required.',
            'captcha.required' => 'The Captcha field is required.',
            'captcha.captcha' => 'Please enter a valid Captcha',
        ]);
        if($request->hasFile('fileUpload')){    
            $file=$request->file('fileUpload');
            $newname=time().rand(10,99).'.'.$file->getClientOriginalExtension();
            $path=resource_path(env('IMAGE_FILE_FOLDER_WEB').'/registerforncncfiles');
            $file->move($path,$newname);
        }
        DB::table('register-for-ncnc')->insert([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'name_of_the_firm'=>$request->name_of_the_firm,
            'registration_No_of_the_firm'=>$request->registration_No_of_the_firm,
            'foreign_address'=>$request->foreign_address,
            'indian_address'=>$request->indian_address,
            'nomenclature_of_wpneqpt'=>$request->nomenclature_of_wpneqpt,
            'brief_description_of_wpneqpt'=>$request->brief_description_of_wpneqpt,
            'details_of_eom'=>$request->details_of_eom,
            'term_of_service'=>$newname??'',
            's_no'=>$request->s_no,
            'name_dt'=>$request->name_dt,
            'designation_dt'=>$request->designation_dt,
            'nationality'=>$request->nationality,
            'passport_no'=>$request->passport_no,
            'id_no'=>$request->id_no,
            'email_address'=>$request->email,
            'remarks'=>$request->remark,
        ]);
        }catch(Throwable $e){report($e);
            return false;
       }
        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }
    
}
