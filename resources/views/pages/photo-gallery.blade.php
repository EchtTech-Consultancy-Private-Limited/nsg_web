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
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
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
                                        <div class="tab-pane fade @if(isset($photogallerys->year) && $photogallerys->year==date('Y')) show active @endif"
                                         id="year{{$photogallerys->year}}-tab-pane" role="tabpanel"
                                            aria-labelledby="year{{$photogallerys->year}}-tab" tabindex="0">
                                            <div class="photogallery-slider">
                                                <h2 class="heading-red py-3">
                                                    Year {{$photogallerys->year}}
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png')}}" alt="vector" class="img-fluid" />
                                                </h2>
                                                <div class="photogallery-wrap mt-3">
                                                    <div class="photogallery-slider">
                                                        <div class="owl-carousel owl-theme photoGallerySlider"
                                                            id="photoGallerySlider2">
                                                            @if(isset($photogallerys->gallery_details) && count($photogallerys->gallery_details)>0)
                                                            @foreach($photogallerys->gallery_details as $galleryPhoto)
                                                            <div class="item">
                                                                <div class="photogallery-card">
                                                                    <div class="img-wrap">
                                                                        <img src="{{ asset('resources/uploads/GalleryManagement/'.$galleryPhoto->public_url) }}" alt="photo-gallery" class="img-fluid" />
                                                                    </div>
                                                                    <div class="img-title">
                                                                        <img src="{{ asset('assets-nsg/images/dotted-vector.png')}}"
                                                                            alt="vector" class="img-fluid" />
                                                                        <p class="text-center">
                                                                            {{ $photogallerys->title_name_en }}
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