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
                            <li class="breadcrumb-item active" aria-current="page">@if(Session::get('locale') == 'hi') {{ 'गैलरी' }} @else {{ 'Gallery' }} @endif</li>
                            <li class="breadcrumb-item active" aria-current="page">@if(Session::get('locale') == 'hi') {{ 'फोटो गैलरी' }} @else {{ 'Photo Gallery' }} @endif</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black">
                    @if(Session::get('locale') == 'hi') {{ 'फोटो गैलरी' }} @else {{ 'Photo Gallery' }} @endif
                </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-4 mt-4">
                    <div class="photogallery-wrap">
                        <div class="photogallery-slider">
                            <div class="row">
                            @if(isset($photogallery) && count($photogallery)>0)
                                @foreach($photogallery as $key=>$photogallerys)
                                    <div class="col-md-3 mt-15">
                                        <a href="{{ url('gallery/gallery-details/'.$photogallerys->uid) }}" class="photogallery-card mb-4">
                                            <div class="img-wrap">
                                            @if(isset($photogallerys->gallery_details) && count($photogallerys->gallery_details)>0)
                                                <img src="{{ asset('resources/uploads/GalleryManagement/'.$photogallerys->gallery_details[0]->public_url) }}" alt="photo-gallery" class="img-fluid" />
                                            @endif
                                                <span class="total-img">
                                                    {{ count($photogallerys->gallery_details)??'00' }} Pics
                                                </span>
                                            </div>
                                            <div class="img-title">
                                                <!-- <img src="assets/images/dotted-vector.png"
                                                    alt="vector" class="img-fluid" /> -->
                                                <p class="text-center">
                                                    @if(Session::get('locale') == 'hi') {{ $photogallerys->title_name_hi }} @else {{ $photogallerys->title_name_en }} @endif
                                                </p>
                                            </div>
                                        </a>
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