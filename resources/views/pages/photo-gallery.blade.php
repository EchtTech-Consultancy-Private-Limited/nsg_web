@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="photogallery-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrap mb-4">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="year2025-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2025-tab-pane" type="button" role="tab"
                                            aria-controls="year2025-tab-pane" aria-selected="true">2025</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2024-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2024-tab-pane" type="button" role="tab"
                                            aria-controls="year2024-tab-pane" aria-selected="false">2024</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2023-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2023-tab-pane" type="button" role="tab"
                                            aria-controls="year2023-tab-pane" aria-selected="false">2023</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2022-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2022-tab-pane" type="button" role="tab"
                                            aria-controls="year2022-tab-pane" aria-selected="false">2022</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2021-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2021-tab-pane" type="button" role="tab"
                                            aria-controls="year2021-tab-pane" aria-selected="false">2021</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="year2020-tab" data-bs-toggle="tab"
                                            data-bs-target="#year2020-tab-pane" type="button" role="tab"
                                            aria-controls="year2020-tab-pane" aria-selected="false">2020</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="year2025-tab-pane" role="tabpanel"
                                        aria-labelledby="year2025-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2025
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider1">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year2024-tab-pane" role="tabpanel"
                                        aria-labelledby="year2024-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2024
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider2">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year2023-tab-pane" role="tabpanel"
                                        aria-labelledby="year2023-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2023
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider3">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year2022-tab-pane" role="tabpanel"
                                        aria-labelledby="year2022-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2022
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider4">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year2021-tab-pane" role="tabpanel"
                                        aria-labelledby="year2021-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2021
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider5">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year2020-tab-pane" role="tabpanel"
                                        aria-labelledby="year2020-tab" tabindex="0">
                                        <div class="photogallery-slider">
                                            <h2 class="heading-red py-3">
                                                Year 2020
                                                <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                            </h2>
                                            <div class="photogallery-wrap mt-3">
                                                <div class="photogallery-slider">
                                                    <div class="owl-carousel owl-theme photoGallerySlider" id="photoGallerySlider6">
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery1.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        22 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery2.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        8 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="photogallery-card">
                                                                <div class="img-wrap">
                                                                    <img src="{{ asset('assets-nsg/images/photogallery3.png') }}" alt="photo-gallery"
                                                                        class="img-fluid" />
                                                                    <span class="total-img">
                                                                        20 Pics
                                                                    </span>
                                                                </div>
                                                                <div class="img-title">
                                                                    <img src="{{ asset('assets-nsg/images/dotted-vector.png') }}" alt="vector" class="img-fluid" />
                                                                    <p class="text-center">
                                                                        Important Events for the Month of March 2024
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection