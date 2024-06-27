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
                            <li class="breadcrumb-item active" aria-current="page">@if(Session::get('locale') == 'hi') {{ 'फोटो गैलरी विवरण' }} @else {{ 'Photo Gallery Details' }} @endif</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black">
                    @if(Session::get('locale') == 'hi') {{ 'फोटो गैलरी विवरण' }} @else {{ 'Photo Gallery Details' }} @endif
                </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-4 mt-4">
                    <div class="photogallery-wrap">
                        <div class="photogallery-list">
                            <div class="row">
                            @if(isset($allphotogallery) && count($allphotogallery)>0)
                                @foreach($allphotogallery as $allphotogallerys)
                                    <div class="col-md-3">
                                        <a href="{{ asset('resources/uploads/GalleryManagement/'.$allphotogallerys->public_url) }}" data-lightbox="photogallery" class="photogallery-card mb-4">
                                            <div class="img-wrap">
                                                <img src="{{ asset('resources/uploads/GalleryManagement/'.$allphotogallerys->public_url) }}" alt="photo-gallery" class="img-fluid" />
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