<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App, Route, DB, Session, Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

// Call Helper

class CommonComposer
{
    protected $request;

    /**
     * Create a new common composer.
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        try {
            $visitCounter = DB::table('visiting_counters')->count();
            $banner = DB::table('home_page_banner_management')->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
            $footerMenu = DB::table('website_menu_management')->whereIn('menu_place', [1, 3])->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
            $menus = DB::table('website_menu_management')->whereIn('menu_place', [0,3,4])->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
            $menuName = $this->getMenuTree($menus, 0);
            // dd($footerMenu);
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
                                ->take(10)
                                ->get();

            $social_links = DB::table('social_links')->where('status', 3)->where('soft_delete', 0)->first();
            $logo = DB::table('website_core_settings')->where('status', 3)->where('soft_delete', 0)->first();
            $notification= DB::table('recent_activities')->where('end_date', '>=', now()->toDateString())->where('notification_others',1)->where('status', 3)->where('soft_delete', 0)->latest('created_at')->get();
            $press_release= DB::table('recent_activities')->where('end_date', '>=', now()->toDateString())->where('notification_others',2)->where('status', 3)->where('soft_delete', 0)->latest('created_at')->get();
            $privateGovCLient= DB::table('private_government_clients')->where('status', 3)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            // $tender_management = DB::table('tender_management')->where('soft_delete', 0)->take(5)->latest('created_at')->get();
            $tender_management = DB::table('tender_management')
                                ->where('tender_management.soft_delete', 0)
                                ->where('tender_management.status', 3)
                                ->join('tender_details', 'tender_management.uid', '=', 'tender_details.tender_id')
                                ->where('tender_details.soft_delete', 0)
                                ->whereDate('tender_details.archivel_date', '>=', now()->toDateString())
                                ->latest('tender_management.created_at')
                                ->latest('tender_details.created_at')
                                ->select('tender_management.*')
                                ->get();
            // gallery photo
            $galleryHome = DB::table('gallery_details')
                ->where('type', 0)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->whereYear('start_date', date('Y'))
                ->latest('created_at')->take(3)
                ->get();
            $galleryData = [];
            $gallery = DB::table('gallery_management')
                ->where('type', 0)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->where('year', date('Y'))
                ->latest('created_at')
                ->get();

            if (count($gallery) > 0) {
                foreach ($gallery as $images) {
                    $gallay_images = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->whereYear('start_date', date('Y'))
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
            // gallery video
            $galleryVideo = [];
            $videoGallery = DB::table('gallery_management')
                ->where('type', 1)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($videoGallery) > 0) {
                foreach ($videoGallery as $images) {
                    $gallay_video = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_video) > 0) {
                        $galleryVideo[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_video
                        ];
                    }
                }
            }

            $quickLink = DB::table('website_menu_management')->where('menu_place',4)->where('status', 3)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();

            $view->with(['notification'=>$notification,'press_release'=>$press_release,'social_links' => $social_links, 'logo' => $logo, 
            'visitCounters' => $visitCounter, 'quickLink' => $quickLink, 'alertMessage' => $this->checkLanguage(),
             'headerMenu' => $menuName, 'footerMenu' => $footerMenu, 'banner' => $banner,
             'news_management' => $news_management,
             'privateGovCLients'=> $privateGovCLient,
             'tender_management' => $tender_management,'galleryData'=>$galleryData,'homegallery' =>$galleryHome,
             'galleryVideo' => $galleryVideo]);
      
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
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



    function checkLanguage()
    {
        if (Session::get('locale') == 'hi') {
            return 'यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।';
        } else {
            return 'This link will take you to an external web site.';
        }
    }
}
