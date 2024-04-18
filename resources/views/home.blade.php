@extends('layout.master')
@section('title')
{{ __('National Security Guard | Home') }}
@endsection
@section('content')
<section class="hero-wrap">
   <div class="container-fluid px-lg-5">
      <div class="row">
         <div class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center">
            <div class="director-wrap" data-aos="fade-right" data-aos-duration="3000">
               <div class="director-img">
                  <img src="{{ asset('assets-nsg/images/ips-dg.png')}}" alt="Shri MA Ganapathy" class="img-fluid" />
               </div>
               <h3 class="name">
                  Daljit Singh Chawdhary
               </h3>
               <p class="title">
                  IPS Director General
               </p>
               <div class="btn-wrap d-flex align-items-center justify-content-center mt-3">
                  <button class="btn btn-red">DG's Message</button>
               </div>
            </div>
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
                  <a href="#" class="link-yellow">
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
                  <a href="#" class="view-more">
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
                  <a href="#" class="link-yellow">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
                  </a>
               </div>
               <div class="list-wrap">
                  <ul class="common-scrollbar">
                     <li>
                        <span class="date">9th August, 2023</span>
                        <p class="desc">
                           The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal for
                           Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of Republic Day,
                           2024.
                        </p>
                     </li>
                     <li>
                        <span class="date">9th August, 2023</span>
                        <p class="desc">
                           The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal for
                           Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of Republic Day,
                           2024.
                        </p>
                     </li>
                     <li>
                        <span class="date">9th August, 2023</span>
                        <p class="desc">
                           The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal for
                           Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of Republic Day,
                           2024.
                        </p>
                     </li>
                     <li>
                        <span class="date">9th August, 2023</span>
                        <p class="desc">
                           The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal for
                           Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of Republic Day,
                           2024.
                        </p>
                     </li>
                     <li>
                        <span class="date">9th August, 2023</span>
                        <p class="desc">
                           The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal for
                           Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of Republic Day,
                           2024.
                        </p>
                     </li>
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
                  <a href="#" class="link-yellow">
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
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tenders-tab" data-bs-toggle="tab"
                  data-bs-target="#tenders-tab-pane" type="button" role="tab" aria-controls="tenders-tab-pane"
                  aria-selected="true">Current Tenders</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="eoi-tab" data-bs-toggle="tab" data-bs-target="#eoi-tab-pane"
                  type="button" role="tab" aria-controls="eoi-tab-pane" aria-selected="false">Current Auctions</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="draft-tab" data-bs-toggle="tab" data-bs-target="#draft-tab-pane"
                  type="button" role="tab" aria-controls="draft-tab-pane" aria-selected="false">QRS for Comments</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="award-tab" data-bs-toggle="tab" data-bs-target="#award-tab-pane"
                  type="button" role="tab" aria-controls="award-tab-pane" aria-selected="false">Tenders Awarded</button>
              </li>
            </ul>
            <div class="tab-content" id="blackTabContent">
              <div class="tab-pane fade show active" id="tenders-tab-pane" role="tabpanel" aria-labelledby="tenders-tab"
                tabindex="0">
                <div class="list-wrap">
                  <ul class="common-scrollbar">
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="eoi-tab-pane" role="tabpanel" aria-labelledby="eoi-tab" tabindex="0">
                <div class="list-wrap">
                  <ul class="common-scrollbar">
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="draft-tab-pane" role="tabpanel" aria-labelledby="draft-tab" tabindex="0">
                <div class="list-wrap">
                  <ul class="common-scrollbar">
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="award-tab-pane" role="tabpanel" aria-labelledby="award-tab" tabindex="0">
                <div class="list-wrap">
                  <ul class="common-scrollbar">
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                    <li>
                      <span class="date">9th August, 2023</span>
                      <p class="desc">
                        The President is pleased to award “President’s Medal for Distinguished Service”(PSM) and “Medal
                        for Meritorious Service”(MSM) to the following officers and men of CRPF on the occasion of
                        Republic Day, 2024.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <a href="#" class="link-yellow">
               @if(Session::get('locale') == 'hi') {{ config('staticTextLang.ba_hi') }} @else {{ config('staticTextLang.ba_en') }} @endif
            </a>
          </div>
        </div>
         <div class="col-md-12 col-lg-4">
            <div class="card-wrap card-red mb-3 mb-lg-0"  data-aos="fade-up" data-aos-duration="1000">
               <h2 class="card-heading">
               @if(Session::get('locale') == 'hi') {{ config('staticTextLang.Honours_Awards_hi') }} @else {{ config('staticTextLang.Honours_Awards_en') }} @endif
               </h2>
               <div class="card-image">
                  <img src="{{ asset('assets-nsg/images/awards.png')}}" alt="awards" class="img-fluid" />
               </div>
               <p class="card-title">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.Honours_Awards_description_hi') }} @else {{ config('staticTextLang.Honours_Awards_description_en') }} @endif
               </p>
               <div class="btn-wrap">
                  <a href="{{ url('more-links/honours-&-awards/gallantry-awards-(army)') }}"
                     class="btn btn-red">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.Continue_hi') }} @else {{ config('staticTextLang.Continue_en') }} @endif
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="card-wrap card-black  mb-3 mb-lg-0"  data-aos="fade-up" data-aos-duration="1500">
               <h2 class="card-heading">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.The_National_Security_Guard_hi') }} @else {{ config('staticTextLang.The_National_Security_Guard_en') }} @endif
               </h2>
               <div class="card-image">
                  <img src="{{ asset('assets-nsg/images/nsg.png')}}" alt="nsg" class="img-fluid" />
               </div>
               <p class="card-title">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.The_National_Security_Guard_description_hi') }} @else {{ config('staticTextLang.The_National_Security_Guard_description_en') }} @endif
               </p>
               <div class="btn-wrap">
                  <a href="{{ url('about-us/about-nsg') }}"
                     class="btn btn-red">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.Continue_hi') }} @else {{ config('staticTextLang.Continue_en') }} @endif
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="card-wrap card-red  mb-3 mb-md-0"  data-aos="fade-up" data-aos-duration="2000">
               <h2 class="card-heading">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.Our_Martyrs_hi') }} @else {{ config('staticTextLang.Our_Martyrs_en') }} @endif
               </h2>
               <div class="card-image">
                  <img src="{{ asset('assets-nsg/images/e-sharadhanjali.png')}}" alt="e-sharadhanjali" class="img-fluid" />
               </div>
               <p class="card-title">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.Our_Martyrs_Pride_of_the_Nation_hi') }} @else {{ config('staticTextLang.Our_Martyrs_Pride_of_the_Nation_en') }} @endif
               </p>
               <div class="btn-wrap">
                  <a href="{{ url('veer-gatha') }}" 
                     class="btn btn-red">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.Continue_hi') }} @else {{ config('staticTextLang.Continue_en') }} @endif
                  </a>
               </div>
            </div>
         </div>
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