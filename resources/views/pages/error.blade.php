@extends('layout.master')
@section('title')
{{ __('NSG |'.' '.'Error') }}
@endsection
@section('content')
<section class="contact-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="error">404</h1>
                <div class="page">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.404_hi') }} @else {{ config('staticTextLang.404_en') }} @endif</div>
                {{-- <a class="back-home" href="{{url('/')}}">Back to home</a> --}}
            </div>
        </div>
    </div>
</section>
@endsection