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
                     @if(Session::get('locale') == 'hi') {{ $pageData->metaDatas->page_title_hi }} @else {{ $pageData->metaDatas->page_title_en }} @endif
                  </h3>
               </div>
                  <p class="desc-black">
                  @if(isset($pageData->pageContents))
                     @if(Session::get('locale') == 'hi') {!! $pageData->pageContents->page_content_hi !!} @else {!! $pageData->pageContents->page_content_en !!} @endif
                  @endif
                  </p>
                  
                  <div class="common-table table-responsive">
                     <table id="nsg_datatable" class="display" style="width:100%">
                        <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th>Salary</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                 <td>Tiger Nixon</td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>2011-04-25</td>
                                 <td>$320,800</td>
                              </tr>
                              <tr>
                                 <td>Garrett Winters</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>63</td>
                                 <td>2011-07-25</td>
                                 <td>$170,750</td>
                              </tr>
                              <tr>
                                 <td>Ashton Cox</td>
                                 <td>Junior Technical Author</td>
                                 <td>San Francisco</td>
                                 <td>66</td>
                                 <td>2009-01-12</td>
                                 <td>$86,000</td>
                              </tr>
                        </tbody>
                     </table>
                  </div>
                 
            </div>
         </div>
      </div>
   </div>
</section>
@endsection