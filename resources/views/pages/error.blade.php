@extends('layout.master')
@section('title')
{{ __('NSG |'.' '.'Error') }}
@endsection
@section('content')
<section class="error-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-wrap mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Error 404</li>
                  </ol>
                </nav>
              </div>
              <h2 class="heading-black">
                Error 404
              </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card error-bg p-5 mt-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="error-content">
                                <span class="title">
                                    Error 404
                                </span>
                                <h3 class="heading">
                                    Oops! Page not found.
                                </h3>
                                <p class="desc">
                                     @if(Session::get('locale') == 'hi') {{ config('staticTextLang.404_hi') }} @else {{ config('staticTextLang.404_en') }} @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="error-img text-center">
                                <img src="{{ asset('assets-nsg/images/error.svg') }}" alt="error" class="img-fluid w-50 h-50" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection