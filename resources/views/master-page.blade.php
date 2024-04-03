@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="wrapper common-bg-right">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="link-wrap mb-3">
               <h3 class="heading-white">
                  About
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
                     <table class="table table-striped mb-0">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">S.No</th>
                              <th scope="col">Seminars/Conferences</th>
                              <th scope="col">Code No.</th>
                              <th scope="col">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">1</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">2</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">3</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">4</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">5</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center">6</td>
                              <td>Sed ut perspiciatis unde omnis iste natus error sit</td>
                              <td>A124</td>
                              <td>
                                 <div class="btn-wrap d-flex align-items-center">
                                    <button class="btn edit-btn p-0 me-3">
                                    <img src="{{ asset('assets-nsg/images/edit.svg') }}" alt="edit" class="img-fluid" />
                                    </button>
                                    <button class="btn delete-btn p-0">
                                    <img src="{{ asset('assets-nsg/images/delete.svg') }}" alt="delete" class="img-fluid" />
                                    </button>
                                 </div>
                              </td>
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