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
                     <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
                     <li class="breadcrumb-item">{{$manMenu->name_en??''}}</li>
                     <li class="breadcrumb-item active" aria-current="page">{{$title??''}}</li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-md-4">
            <div class="link-wrap mb-3 sidebar-menu">
               <h3 class="heading-white">
                  @if(Session::get('locale') == 'hi') {{ $sideMenu->main_menu->name_hi??'' }} @else {{ $sideMenu->main_menu->name_en??'' }} @endif
               </h3>
               <ul>
                  @if(isset($sideMenu->main_menu->sub_menu) && count($sideMenu->main_menu->sub_menu)>0)
                     @foreach($sideMenu->main_menu->sub_menu as $key=>$subMenu)
                        <li class="accordion accordion-flush position-relative sl-accordion" id="sidebarDropdown_{{$key}}">
                           <div class="accordion-item">
                              <div class="list-start @php if(isset($slug) && $subMenu->url ==$slug){ echo 'qm-active'; }else{ echo ''; } @endphp" id="flush-headingOne_{{$key}}">
                                 <a href="{{ $subMenu->url }}"
                                    target="@php if(isset($subMenu->tab_type) && $subMenu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                                    class="nav-link @php if(isset($subMenu->sub_sub_menu) && count($subMenu->sub_sub_menu)>0){ echo'collapsed'; }else{ echo ''; } @endphp" type="button" 
                                    data-bs-toggle="@php if(isset($subMenu->sub_sub_menu) && count($subMenu->sub_sub_menu)>0){ echo'collapse'; }else{ echo 'collapsed'; } @endphp" data-bs-target="#flush-collapseOne_{{$key}}"
                                    aria-expanded="false"aria-controls="flush-collapseOne"tabindex="0">
                                    <img src="{{ asset('assets-nsg/images/arrow-right.svg') }}" alt="arrow-right" class="img-fluid" />
                                    @if(Session::get('locale') == 'hi') {{ $subMenu->name_hi??'' }} @else {{ $subMenu->name_en??'' }} @endif
                                 </a>
                              </div>
                              <div id="flush-collapseOne_{{$key}}" class="accordion-collapse collapse" 
                                 aria-labelledby="flush-headingOne_1"
                                 data-bs-parent="#sidebarDropdown_{{$key}}">
                                 <!-- qm-active -->
                                 <div class="accordion-body p-0">
                                    <ul class="p-0 m-0 mt-2 dropdown-card">
                                       @if(isset($subMenu->sub_sub_menu) && count($subMenu->sub_sub_menu)>0)
                                          @foreach($subMenu->sub_sub_menu as $key=>$subsubMenu)
                                          <li class="@php if(isset($slug) && $subsubMenu->url ==$slug){ echo 'qm-active'; }else{ echo ''; } @endphp">
                                             <a href="{{$subsubMenu->url}}" class="" tabindex="0"
                                             target="@php if(isset($subsubMenu->tab_type) && $subsubMenu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                                             >
                                                @if(Session::get('locale') == 'hi') {{ $subsubMenu->name_hi??'' }} @else {{ $subsubMenu->name_en??'' }} @endif
                                             </a>
                                          </li>
                                       @endforeach
                                    @endif
                                    </ul>
                                 </div>
                              </div>
                           </div>
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
                        @if(Session::get('locale') == 'hi') {{ config('staticTextLang.comingsoon_hi') }} @else {{ config('staticTextLang.comingsoon_en') }} @endif
                  </h3>
               </div>
                  <p class="desc-black">
                        @if(Session::get('locale') == 'hi') {{ config('staticTextLang.comingsoon_hi') }} @else {{ config('staticTextLang.comingsoon_en') }} @endif
                  </p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection