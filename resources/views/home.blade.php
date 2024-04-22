@extends('layout.master')
@section('title')
{{ __('National Security Guard | Home') }}
@endsection
@section('content')
<section class="hero-wrap">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center">
         @if(isset($sectionZero) && count($sectionZero)>0)
            @foreach($sectionZero as $sectionZeros)
               @if(Session::get('locale') == 'hi') {!! $sectionZeros->content_hi !!} @else {!! $sectionZeros->content_en !!} @endif
            @endforeach
         @endif
         </div>
         <div class="col-md-12 col-lg-6">
            <div class="banner-slider" id="common-slider">
               <div class="owl-carousel owl-theme" id="bannerSlider">
                  @if(isset($banner) && count($banner)>0)
                     @foreach($banner as $banners)
                     <div class="item">
                        <img src="{{ asset('resources/uploads/banner/'.$banners->public_url)}}" alt="{{ $banners->title_name_en }}" class="img-fluid" />
                     </div>
                     @endforeach
                  @else
                     <img src="{{ asset('assets-nsg/images/banner1.png')}}" alt="banner" class="img-fluid" />
                  @endif
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-3 d-flex justify-content-center">
            <div class="minister-wrap" data-aos="fade-left" data-aos-duration="3000">
               <!-- <div class="minister-content mb-3">
                  <div class="minister-info">
                     <h3 class="name">
                        Shri. Narendra Modi
                     </h3>
                     <p class="title">
                        Honorable Prime Minister of India
                     </p>
                  </div>
                  <div class="img-wrap">
                     <img src="{{ asset('assets-nsg/images/narendra-modi.png')}}" alt="Shri. Narendra Modi" class="img-fluid" />
                  </div>
               </div>
               <div class="minister-content">
                  <div class="minister-info">
                     <h3 class="name">
                        Shri. Amit Shah
                     </h3>
                     <p class="title">
                        Minister of Home Affairs of India
                     </p>
                  </div>
                  <div class="img-wrap">
                     <img src="{{ asset('assets-nsg/images/amit-shah.png')}}" alt="Shri. Amit Shah" class="img-fluid" />
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</section>

<section class="achievement-wrap" id="main_content">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-lg-4">
            <div class="card-wrap card-white mb-3 mb-lg-0" data-aos="fade-up" data-aos-duration="1000">
               <div class="d-flex align-items-center justify-content-between pb-3">
                  <h2 class="heading-red">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.Achievements_hi') }} @else {{ config('staticTextLang.Achievements_en') }} @endif
                  </h2>
                  <a href="{{ url('more-links/achievements/international-competitions-seminar') }}" class="link-yellow">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
                  </a>
               </div>
               <div class="img-wrap mb-4">
                  <img src="{{ asset('assets-nsg/images/taj.png')}}" alt="taj" class="img-fluid" />
               </div>
               <div class="d-flex align-items-center justify-content-between">
                  <p class="title">
                     Successful NSG Operation at Taj, Mumbai
                  </p>
                  <a href="{{ url('more-links/achievements/international-competitions-seminar') }}" class="view-more">
                  <img src="{{ asset('assets-nsg/images/view.svg')}}" alt="view" class="img-fluid" />
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="img-wrap mb-3 mb-lg-0 h-100" data-aos="fade-up" data-aos-duration="1500">
               <img src="{{ asset('assets-nsg/images/nsg-vision.png')}}" alt="nsg-vision" class="img-fluid h-100" />
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="card-wrap card-white mb-3 mb-lg-0" data-aos="fade-up" data-aos-duration="2000">
               <div class="d-flex align-items-center justify-content-between pb-3">
                  <h2 class="heading-red">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ln_hi') }} @else {{ config('staticTextLang.ln_en') }} @endif
                  </h2>
                  <a href="{{ route('news-list') }}" class="link-yellow">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
                  </a>
               </div>
               <div class="list-wrap">
                  <ul class="common-scrollbar">
                  @if(isset($news_managements) && count($news_managements)>0)
                     @foreach($news_managements as $news_management)
                     <li>
                        <span class="date">
                           {{\Carbon\Carbon::parse($news_management->startDate)->format('d')}}th {{\Carbon\Carbon::parse($news_management->startDate)->format('M')}}, {{\Carbon\Carbon::parse($news_management->startDate)->format('Y')}}
                        </span>
                        <p class="desc">
                           @if(Session::get('locale') == 'hi') {{ $news_management->title_name_hi }} @else {{ $news_management->title_name_en }} @endif
                        </p>
                     </li>
                     @endforeach
                  @endif
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="gallery-wrap">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-lg-6">
            <div class="gallery-slider">
               <div class="d-flex align-items-center justify-content-between pb-3">
                  <h2 class="heading-red">
                     @if(Session::get('locale') == 'hi') {{ config('staticTextLang.pg_hi') }} @else {{ config('staticTextLang.pg_en') }} @endif
                  </h2>
                  <a href="{{ url('gallery/photo-gallery') }}" class="link-yellow">
                     @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
                  </a>
               </div>
               <div id="photoCarousel" class="carousel slide photo-slider" data-interval="false">
                  <div class="carousel-inner">
                     @if(isset($homegallery) && count($homegallery)>0)
                        @foreach($homegallery as $homegallerys)
                        <div class="carousel-item">
                           <img src="{{ asset('resources/uploads/GalleryManagement/'.$homegallerys->public_url)}}" class="img-fluid" alt="slide" />
                        </div>
                        @endforeach
                     @endif
                  </div>
                  <div class="carousel-indicators common-scrollbar">
                     @if(isset($homegallery) && count($homegallery)>0)
                        @foreach($homegallery as $key=>$homegallerys)
                        <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="{{$key}}" class=""
                           aria-current="true" aria-label="Slide {{$key+1}}">
                           <img src="{{ asset('resources/uploads/GalleryManagement/'.$homegallerys->public_url)}}" class="img-fluid" alt="thumbnail" />
                        </button>
                        @endforeach
                     @endif
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </button>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-6">
          <div class="award-wrap">
            <ul class="nav nav-tabs" id="blackTab" role="tablist">
               @if(isset($tenderTypes) && count($tenderTypes)>0)
                  @foreach($tenderTypes as $tenderTyp)
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="{{$tenderTyp->type_slug}}" data-bs-toggle="tab"
                           data-bs-target="#{{$tenderTyp->type_slug}}_tab" type="button" role="tab" aria-controls="{{$tenderTyp->type_slug}}_tab"
                           aria-selected="true">
                           @if(Session::get('locale') == 'hi') {{ $tenderTyp->type_name_hi }} @else {{ $tenderTyp->type_name_en }} @endif
                        </button>
                     </li>
                  @endforeach
               @endif
            </ul>
            <div class="tab-content" id="blackTabContent">
               @if(isset($tender_managements) && count($tender_managements)>0)
                  @foreach($tender_managements as $tender_management)
                  <div class="tab-pane fade @php if(isset($tender_management->tender_typeid) && $tender_management->tender_typeid =='current-tenders'){ echo 'active show'; }else{ ''; } @endphp" id="{{$tender_management->tender_typeid??''}}_tab" role="tabpanel" aria-labelledby="{{$tender_management->tender_typeid??''}}"
                     tabindex="0">
                     <div class="list-wrap">
                        <ul class="common-scrollbar">
                           <li>
                              <span class="date">{{\Carbon\Carbon::parse($tender_management->startDate)->format('d')}}th {{\Carbon\Carbon::parse($tender_management->startDate)->format('M')}}, {{\Carbon\Carbon::parse($tender_management->startDate)->format('Y')}}</span>
                              <a href="{{ asset('resources/uploads/TenderManagement/'.$tender_management->public_url) }}" download="" tabindex="0" target="_blank">
                                 <p class="desc">
                                    @if(Session::get('locale') == 'hi') {{ $tender_management->title_name_hi }} @else {{ $tender_management->title_name_en }} @endif
                                 </p>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <a href="{{ url('tender/'.$tender_management->tender_typeid) }}" class="link-yellow">
                        @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
                     </a>
                  </div>
                  @endforeach
               @endif
            </div>
            
          </div>
        </div>
        @if(isset($sectionData) && count($sectionData)>0)
            @foreach($sectionData as $sectionDatas)
               <div class="col-md-12 col-lg-4">
                  @if(Session::get('locale') == 'hi') {!! $sectionDatas->content_hi !!} @else {!! $sectionDatas->content_en !!} @endif
               </div>
            @endforeach
         @endif
      </div>
   </div>
</section>
<section class="eliminator-wrap">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="eliminator-content m-neg"  data-aos="fade-up" data-aos-duration="3000">
               <div class="heading-wrap">
                  <h2 class="heading">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.nsgte_hi') }} @else {{ config('staticTextLang.nsgte_en') }} @endif
                  </h2>
               </div>
               <div class="eliminator-video">
                  <iframe height="450" src="https://www.youtube.com/embed/">
                  </iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection