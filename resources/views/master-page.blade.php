@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$breadcum1??'NSG') }}
@endsection
@section('content')
<section class="wrapper common-bg-right" id="main_content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcrumb-wrap mb-4">
               <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
                     <li class="breadcrumb-item">
                        {{$breadcum1 ??''}}
                     </li>
                     @if(isset($breadcum2) && $breadcum2 !='')
                     <li class="breadcrumb-item active" aria-current="page">
                        {{$breadcum2??''}}
                     </li>
                     @endif
                     @if(isset($breadcum3) && $breadcum3 !='')
                     <li class="breadcrumb-item active" aria-current="page">
                        {{$breadcum3??''}}
                     </li>
                     @endif
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
                  @php if(Session::get('locale') == 'hi'){  $alrt ="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"; } else { $alrt ="return confirm('This link will take you to an external web site.')"; } @endphp
                  @if(isset($sideMenu->main_menu->sub_menu) && count($sideMenu->main_menu->sub_menu)==0)
                  <li class="accordion accordion-flush position-relative sl-accordion" id="sidebarDropdown_1">
                        <div class="accordion-item">
                           <div class="list-start @php if(isset($slug) && $sideMenu->main_menu->url ==$slug){ echo 'qm-active'; }else{ echo ''; } @endphp" id="flush-headingOne_1">
                                 <a href="{{ url($sideMenu->main_menu->url) }}"
                                    target="@php if(isset($sideMenu->main_menu->tab_type) && $sideMenu->main_menu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                                    class="nav-link" type="button" 
                                    onclick="@php if($sideMenu->main_menu->tab_type ==1){ echo $alrt; }else{ echo ''; } @endphp"
                                    data-bs-toggle="" data-bs-target="#flush-collapseOne_1"
                                    aria-expanded="false"aria-controls="flush-collapseOne"tabindex="0">
                                    <img src="{{ asset('assets-nsg/images/arrow-right.svg') }}" alt="arrow-right" class="img-fluid" />
                                    @if(Session::get('locale') == 'hi') {{ $sideMenu->main_menu->name_hi??'' }} @else {{ $sideMenu->main_menu->name_en??'' }} @endif
                                 </a>
                           </div>
                        </div>
                     </li>
                  @endif
                  @if(isset($sideMenu->main_menu->sub_menu) && count($sideMenu->main_menu->sub_menu)>0)
                     @foreach($sideMenu->main_menu->sub_menu as $key=>$subMenu)
                        <li class="accordion accordion-flush position-relative sl-accordion" id="sidebarDropdown_{{$key}}">
                           <div class="accordion-item">
                              <div class="list-start @php if(isset($slug) && $subMenu->url ==$slug){ echo 'qm-active'; }else{ echo ''; } @endphp" id="flush-headingOne_{{$key}}">
                                 <a href="{{ $subMenu->url }}"
                                    onclick="@php if($subMenu->tab_type ==1){ echo $alrt; }else{ echo ''; } @endphp"
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
                                             <a href="{{ $subsubMenu->url }}" 
                                             class="" tabindex="0"
                                             onclick="@php if($subsubMenu->tab_type ==1){ echo $alrt; }else{ echo ''; } @endphp"
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
         @if(isset($pageData->metaDatas) && $pageData->metaDatas !='' || $pageData->metaDatas != null || isset($pageData->formbuilderdata) && count($pageData->formbuilderdata)>0)
         <div class="col-md-8">
            <div class="common-card p-4 mb-3">
               <div class="d-flex align-items-center justify-content-between pb-2 border-bottom">
                  <h3 class="heading-red">
                     @if(Session::get('locale') == 'hi') {{ $pageData->metaDatas->page_title_hi??'' }} @else {{ $pageData->metaDatas->page_title_en??'' }} @endif
                  </h3>
               </div>
                  <p class="desc-black">
                  @if(isset($pageData->pageContents))
                     @if(Session::get('locale') == 'hi') {!! $pageData->pageContents->page_content_hi??'' !!} @else {!! $pageData->pageContents->page_content_en??'' !!} @endif
                  @endif
                  </p>
                  <!-- PDF Begin -->
                  @if(isset($pageData->pagePdfs) && count($pageData->pagePdfs)>0)
                     <div class="table-responsive">
                        <table id="nsg_datatable" class="display common-table" style="width:100%">
                           <thead>
                                 <tr>
                                    @if(isset($pageData->pagePdfs[0]->table_head) && $pageData->pagePdfs[0]->table_head !=0)
                                       @foreach(json_decode($pageData->pagePdfs[0]->table_head) as $head)
                                          <th>{{$head->tablehead}}</th>
                                       @endforeach
                                    @endif
                                 </tr>
                           </thead>
                           <tbody>
                           @if(isset($pageData->pagePdfs) && count($pageData->pagePdfs)>0)
                              @foreach($pageData->pagePdfs as $key=>$pdfdata)
                                 <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td>{{$pdfdata->pdf_title}}</td>
                                    <td class="views-field views-field-field-amount-rs- download" data-label="
                                       Request Doc">
                                       <a href="{{ asset('resources/uploads/PageContentPdf/'.$pdfdata->public_url) }}" download="" tabindex="0" target="_blank">
                                          Download
                                       </a> <i class="fa fa-file-pdf-o text-danger ms-2"></i>  <span class="size">({{$pdfdata->pdfimage_size}})</span>
                                    </td>
                                    <td class="text-center">{{\Carbon\Carbon::parse($pdfdata->start_date)->format('d-m-Y')}}</td>
                                 </tr>
                              @endforeach
                           @endif
                           </tbody>
                        </table>
                     </div>
                  @endif
                  <!-- PDF End -->
                  <!-- Form Builder Data Begin -->
                  @if(isset($pageData->formbuilderdata) && count($pageData->formbuilderdata)>0)
                     <div class="table-responsive">
                        <table id="nsg_datatable" class="display common-table" style="width:100%">
                           <thead>
                                 <tr>
                                    @if(isset($pageData->formDataTableHead) && count($pageData->formDataTableHead)>0)
                                       @foreach($pageData->formDataTableHead as $head)
                                          <th>
                                             {{  $head->label }}
                                          </th>
                                       @endforeach
                                    @endif
                                 </tr>
                           </thead>
                           <tbody>
                           @if(isset($pageData->formbuilderdata) && count($pageData->formbuilderdata)>0)
                              @foreach($pageData->formbuilderdata as $formbuilderdatas)
                                       <tr>
                                       @foreach($formbuilderdatas as $key=>$value)
                                          @if($key !=null && $key !='')
                                          <td>{{$value}}</td>
                                          @endif
                                       @endforeach
                                       </tr>
                              @endforeach
                           @endif
                           </tbody>
                        </table>
                     </div>
                  @endif
                  <!-- Form Builder Data End -->
                   <!-- Gallery Begin -->
                   @if(isset($pageData->pageGallerys) && count($pageData->pageGallerys)>0)
                    <div class="master-gallery-wrap mt-3">
                        <div class="master-gallery-slider" id="common-slider">
                           <div class="owl-carousel owl-theme" id="masterGallerySlider">
                           @foreach($pageData->pageGallerys as $key=>$pageGallery)
                              <div class="item">
                              <div class="img-wrap">
                                 <img src="{{ asset('resources/uploads/PageContentGallery/'.$pageGallery->public_url) }}" alt="taj" class="img-fluid" />
                                 <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                       {{ $pageGallery->image_title }}
                                    </p>
                                    <!-- <a href="#" class="view-more">
                                       <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a> -->
                                 </div>
                              </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                @endif
            <!-- Gallery End -->
         </div>
         @else
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
         @endif
      </div>
   </div>
</section>
@endsection