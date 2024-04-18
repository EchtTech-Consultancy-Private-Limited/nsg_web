@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="photogallery-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrap mb-4">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            <li class="breadcrumb-item active" aria-current="page">Photo Gallery Category</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black">
                    Photo Gallery Category
                </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="photogallery-tabs">
                                <ul class="nav nav-tabs" id="photoGalleryTab" role="tablist">
                                    @foreach($years as $v)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link @if(date('Y') == $v) active @endif" id="year{{$v}}-tab" data-bs-toggle="tab"
                                            data-bs-target="#year{{$v}}-tab-pane" type="button" role="tab"
                                            aria-controls="year{{$v}}-tab-pane" aria-selected="true">{{$v}}</button>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                @if(isset($photogallery) && count($photogallery)>0)
                                    @foreach($photogallery as $key=>$photogallerys)
                                <div class="tab-pane fade @if(date('Y') == \Carbon\Carbon::parse($photogallery[$key]['gallery_details'][$key]->start_date)->format('Y')) show active @endif" 
                                id="year{{\Carbon\Carbon::parse($photogallery[$key]['gallery_details'][$key]->start_date)->format('Y')}}-tab-pane" role="tabpanel"
                                        aria-labelledby="year{{\Carbon\Carbon::parse($photogallery[$key]['gallery_details'][$key]->start_date)->format('Y')}}-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year {{\Carbon\Carbon::parse($photogallery[$key]['gallery_details'][$key]->start_date)->format('Y')}}
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider1">
                                                    @if(isset($photogallery[$key]['gallery_details']) && count($photogallery[$key]['gallery_details'])>0)
                                                    @foreach($photogallery[$key]['gallery_details'] as $imeages)
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('resources/uploads/GalleryManagement/'.$imeages->public_url) }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <!-- <span class="total-img">
                                                                        22 Pics
                                                                    </span> -->
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        
                                                                        @if(Session::get('locale') == 'hi') {{ $photogallerys['gallery']->title_name_hi??'' }} @else {{ $photogallerys['gallery']->title_name_en??''}} @endif
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection