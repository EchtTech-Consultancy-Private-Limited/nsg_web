<div class="container-fluid px-lg-5">
   <a class="navbar-brand" href="{{ route('/') }}">
   <img src="{{ asset('assets-nsg/images/nsg-logo.png')}}" alt="National Security Guard" class="img-fluid">
   </a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-lg-0">
         @if(isset($headerMenu) && count($headerMenu)>0)
            @foreach($headerMenu as $firstmenu)
               <li class="nav-item @php if(isset($firstmenu->children) && count($firstmenu->children)>0){ echo 'dropdown'; }else{ echo ''; } @endphp">
                  <a class="nav-link 
                  @php if(isset($firstmenu->children) && count($firstmenu->children)>0){ echo 'dropdown-toggle'; }else{ echo ''; } @endphp" 
                  role="button" data-bs-toggle="@php if(isset($firstmenu->children) && count($firstmenu->children)>0){ echo 'dropdown'; }else{ echo ''; } @endphp"
                  aria-expanded="@php if(isset($firstmenu->children) && count($firstmenu->children)>0){ echo 'false'; }else{ echo ''; } @endphp"
                  href="@php if(isset($firstmenu->children) && count($firstmenu->children)>0){ echo 'javascript:void(0)'; }else{ echo $firstmenu->url; } @endphp" 
                  target="@php if($firstmenu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                  id="navbarDropdown">
                  @if(Session::get('locale') == 'hi')  {{ $firstmenu->name_hi }} @else {{ $firstmenu->name_en }} @endif</a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(isset($firstmenu->children) && count($firstmenu->children)>0)
                           @foreach($firstmenu->children as $secondmenu)
                              <li class="@php if(isset($secondmenu->children) && count($secondmenu->children)>0){ echo 'dropdown-submenu'; }else{ echo ''; } @endphp">
                                 <a class="dropdown-item"
                                 href="
                                 @php if(isset($secondmenu->children) && count($secondmenu->children)>0){ echo 'javascript:void(0)'; }else{ echo $secondmenu->url; } @endphp"
                                 target="@php if($firstmenu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                                 
                                 >
                                    @if(Session::get('locale') == 'hi')  {{ $secondmenu->name_hi }} @else {{ $secondmenu->name_en }} @endif
                                 </a>
                                    <ul class="dropdown-menu">
                                       @if(isset($secondmenu->children) && count($secondmenu->children)>0)
                                          @foreach($secondmenu->children as $thirdmenu)
                                             <li><a class="dropdown-item 
                                             href="
                                             @php if(isset($thirdmenu->children) && count($thirdmenu->children)>0){ echo 'javascript:void(0)'; }else{ echo $thirdmenu->url; } @endphp"
                                             target="@php if($firstmenu->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                                             >
                                                @if(Session::get('locale') == 'hi')  {{ $thirdmenu->name_hi }} @else {{ $thirdmenu->name_en }} @endif
                                             </a></li>
                                          @endforeach
                                       @endif
                                    </ul>
                              </li>
                           @endforeach
                        @endif
                     </ul>
               </li>
            @endforeach
         @endif
      </ul>
      <div class="btn-wrap ms-4">
         <a href="#" class="btn btn-red">
            @if(Session::get('locale') == 'hi') {{ config('staticTextLang.rfncnc_hi') }} @else {{ config('staticTextLang.rfncnc_en') }} @endif
         </a>
      </div>
   </div>
</div>