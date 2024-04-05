@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="wrapper common-bg-right">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrap mb-4">
               <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                     <li class="breadcrumb-item">{{$manMenu->name_en??''}}</li>
                     <li class="breadcrumb-item active" aria-current="page">{{$title??''}}</li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-md-4">
            <div class="link-wrap mb-3">
               <h3 class="heading-white">
                    {{$manMenu->name_en??''}}
               </h3>
               <ul>
                  @if(isset($sideMenu))
                  @foreach($sideMenu as $sideMenus)
                  <li>
                     <a 
                     href="@php if(isset($sideMenus->url) && $sideMenus->url == '#'){ echo 'javascript:void(0)'; }else{ echo $sideMenus->url; } @endphp"
                      target="@php if($sideMenus->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp">
                     <img src="{{ asset('assets-nsg/images/arrow-right.svg') }}" alt="arrow-right" class="img-fluid" />
                        @if(Session::get('locale') == 'hi') {{ $sideMenus->name_hi }} @else {{ $sideMenus->name_en }} @endif
                     </a>
                  </li>
                  @endforeach
                 @endif
               </ul>
            </div>
         </div>
         <div class="col-md-8">
            <div class="common-card p-4 mb-3">
               <div class="d-flex align-items-center justify-content-between pb-2 border-bottom">
                  <h3 class="heading-red">
                     404
                  </h3>
               </div>
                    <p class="desc-black">
                         @if(Session::get('locale') == 'hi') {{ config('staticTextLang.404_hi') }} @else {{ config('staticTextLang.404_en') }} @endif
                    </p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection