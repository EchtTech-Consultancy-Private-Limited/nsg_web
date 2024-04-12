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
                     <li class="breadcrumb-item">@if(Session::get('locale') == 'hi') {{ $manMenu->name_hi??'' }} @else {{ $manMenu->name_en??'' }} @endif</li>
                     <li class="breadcrumb-item active" aria-current="page">{{$title??''}}</li>
                  </ol>
               </nav>
            </div>
         </div>
         <div class="col-md-4">
            <div class="link-wrap mb-3 sidebar-menu">
               <h3 class="heading-white">
                  About
               </h3>
               <ul>
                  <li class="accordion accordion-flush position-relative sl-accordion" id="sidebarDropdown_1">
                     <div class="accordion-item">
                        <div class="list-start" id="flush-headingOne_1">
                           <a
                              class="nav-link collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#flush-collapseOne_1"
                              aria-expanded="false"
                              aria-controls="flush-collapseOne"
                              tabindex="0"
                              >
                           <img src="{{ asset('assets-nsg/images/arrow-right.svg') }}" alt="arrow-right" class="img-fluid" />   Paper Testing
                           </a>
                        </div>
                        <div
                           id="flush-collapseOne_1"
                           class="accordion-collapse collapse"
                           aria-labelledby="flush-headingOne_1"
                           data-bs-parent="#sidebarDropdown_1"
                           >
                           <!-- qm-active -->
                           <div class="accordion-body p-0">
                              <ul class="p-0 m-0 mt-2 dropdown-card">
                                 <li class="">
                                    <a href="https://dev.cppri.staggings.in/division/paper-testing/introduction-of-paper-testing" class="" tabindex="0">
                                    Introduction of Paper Testing
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
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
                                    <td class="text-center">{{$pdfdata->start_date}}</td>
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
                                       @php $i = isset($pageData->formDataTableHeadCount)?$pageData->formDataTableHeadCount:'0'; @endphp
                                       @foreach($pageData->formDataTableHead as $head)
                                          @if($head->label !='Submit' && $head->label !='submit')
                                          <th>
                                             {{  $head->label??'' }}
                                          </th>
                                          @endif
                                       @endforeach
                                    @endif
                                 </tr>
                           </thead>
                           <tbody>
                           @if(isset($pageData->formbuilderdata) && count($pageData->formbuilderdata)>0)
                              @foreach($pageData->formbuilderdata as $formbuilderdatas)
                                       <tr>
                                          @foreach(json_decode($formbuilderdatas->content) as $key=>$fdata)
                                             @if($key !=null && $key !='')
                                             <td>{{$fdata}}</td>
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
            </div>
            <!-- Gallery Begin -->
               @if(isset($pageData->pageGallerys) && count($pageData->pageGallerys)>0)
                  <div class="common-card p-4 mb-3">
                    <div class="d-flex align-items-center justify-content-between pb-2 border-bottom">
                        <h3 class="heading-red">
                            Images with Title
                        </h3>
                        <a href="#" class="link-yellow">
                            View All
                        </a>
                    </div>
                    <div class="master-gallery-wrap mt-3">
                        <div class="master-gallery-slider" id="common-slider">
                            <div class="owl-carousel owl-theme" id="masterGallerySlider">
                              <div class="item">
                                <div class="img-wrap">
                                  <img src="assets/images/gallery-img1.png" alt="taj" class="img-fluid" />
                                  <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                        Sed ut perspiciatis unde omnis
                                    </p>
                                    <a href="#" class="view-more">
                                        <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="img-wrap">
                                  <img src="assets/images/gallery-img2.png" alt="taj" class="img-fluid" />
                                  <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                        Sed ut perspiciatis unde omnis
                                    </p>
                                    <a href="#" class="view-more">
                                        <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="img-wrap">
                                  <img src="assets/images/gallery-img3.png" alt="taj" class="img-fluid" />
                                  <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                        Sed ut perspiciatis unde omnis
                                    </p>
                                    <a href="#" class="view-more">
                                        <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="img-wrap">
                                  <img src="assets/images/gallery-img4.png" alt="taj" class="img-fluid" />
                                  <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                        Sed ut perspiciatis unde omnis
                                    </p>
                                    <a href="#" class="view-more">
                                        <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="item">
                                <div class="img-wrap">
                                  <img src="assets/images/gallery-img5.png" alt="taj" class="img-fluid" />
                                  <div class="d-flex align-items-center justify-content-between p-3">
                                    <p class="title">
                                        Sed ut perspiciatis unde omnis
                                    </p>
                                    <a href="#" class="view-more">
                                        <img src="assets/images/view.svg" alt="view" class="img-fluid" />
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                @endif
            <!-- Gallery End -->
         </div>
      </div>
   </div>
</section>
@endsection