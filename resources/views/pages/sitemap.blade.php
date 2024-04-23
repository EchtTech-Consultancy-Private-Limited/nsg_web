@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="contact-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-wrap mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                  </ol>
                </nav>
              </div>
              <h2 class="heading-black">
                Sitemap
              </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="heading-red">
                                Top Menus
                            </h3>
                        </div>
                        @if(isset($headerMenu) && count($headerMenu)>0)
                          @foreach($headerMenu as $firstmenu)
                            <div class="col-md-3">
                                <div class="sitemap-header-list">
                                    <ul>
                                        <li>
                                            <h3>@if(Session::get('locale') == 'hi')  {{ $firstmenu->name_hi }} @else {{ $firstmenu->name_en }} @endif</h3>
                                            <ul>
                                            @if(isset($firstmenu->children) && count($firstmenu->children)>0)
                                              @foreach($firstmenu->children as $secondmenu)
                                                <li>
                                                    <a href="#">@if(Session::get('locale') == 'hi')  {{ $secondmenu->name_hi }} @else {{ $secondmenu->name_en }} @endif</a>
                                                    <ul>
                                                      @if(isset($secondmenu->children) && count($secondmenu->children)>0)
                                                        @foreach($secondmenu->children as $thirdmenu)
                                                          <li>
                                                              <a href="#">@if(Session::get('locale') == 'hi')  {{ $thirdmenu->name_hi }} @else {{ $thirdmenu->name_en }} @endif</a>
                                                          </li>
                                                        @endforeach
                                                      @endif
                                                    </ul>
                                                </li>
                                              @endforeach
                                            @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          @endforeach
                        @endif
                        <div class="col-md-12">
                            <div class="seprator">
                                <hr />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading-red mt-5">
                                Footer
                            </h3>
                        </div>
                        @if(isset($footerMenu) && count($footerMenu)>0)
                          @foreach($footerMenu as $footerMenus)
                            <div class="col-md-3">
                                <div class="sitemap-header-list">
                                    <ul>
                                        <li>
                                            <h3>@if(Session::get('locale') == 'hi')  {{ $footerMenus->name_hi }} @else {{ $footerMenus->name_en }} @endif</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection