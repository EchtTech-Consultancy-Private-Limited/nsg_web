<footer class="site-footer">
    <div class="site-footer-top">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10">
            <div class="footer-links">
              <ul>
              @php if(Session::get('locale') == 'hi'){  $alrt ="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"; } else { $alrt ="return confirm('This link will take you to an external web site.')"; } @endphp
                @if(isset($footerMenu) && count($footerMenu)>0)
                  @foreach($footerMenu as $footerMenus)
                  <li>
                    <a href="{{ url($footerMenus->url) }}" 
                    target="@php if(isset($footerMenus->tab_type) && $footerMenus->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp"
                    onclick="@php if($footerMenus->tab_type ==1){ echo $alrt; }else{ echo ''; } @endphp"
                    >@if(Session::get('locale') == 'hi')  {{ $footerMenus->name_hi }} @else {{ $footerMenus->name_en }} @endif</a>
                  </li>
                  @endforeach
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-footer-middle">
      <div class="container">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-5">
              <div class="copyright-content">
                <p>
                @if(Session::get('locale') == 'hi') {!! config('staticTextLang.Website_Content_Managed_by_National_Security_Guard_hi') !!} @else {!! config('staticTextLang.Website_Content_Managed_by_National_Security_Guard_en') !!} @endif
                  <br />
                  <span>
                  <a href="http://www.nic.in/" 
                    onclick="return confirm('{{ $alertMessage }}')"
                    title="NIC, External Link that opens in a new window" target="_blank">
                      @if(Session::get('locale') == 'hi') {!! config('staticTextLang.Designed_Developed_hi') !!} @else {!! config('staticTextLang.Designed_Developed_en') !!} @endif
                    
                    </a> 
                  </span> 
                  <br />
                  <span class="lastupdated">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.LastUpdated_hi') }} @else {{ config('staticTextLang.LastUpdated_en') }} @endif: <strong>{{ date('d-M-Y') }}</strong></span>
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="img-wrap text-end">
                <img src="{{ asset('assets-nsg/images/cqw-logo.png') }}" alt="cqw-logo" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-footer-bottom">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 col-5">
            <div class="visitor-counter">
                <h2 class="visitor-heading">
                  @if(Session::get('locale') == 'hi') {{ config('staticTextLang.VisitorCounte_hi') }} @else {{ config('staticTextLang.VisitorCounte_en') }} @endif : <span>{{ $visitCounters ??'' }}</span>
                </h2>
            </div>
          </div>
          <div class="col-md-5 col-5">
            <div class="social-links">
              <ul>
                @if(isset($social_links->facebook) && $social_links->facebook !=null)
                <li>
                  <a href="{{$social_links->facebook}}" target="_blank">
                    <img src="{{ asset('assets-nsg/images/facebook.svg') }}" alt="facebook" class="img-fluid" />
                  </a>
                </li>
                @endif
                @if(isset($social_links->twitter) && $social_links->twitter !=null)
                <li>
                  <a href="{{$social_links->twitter}}" target="_blank">
                    <img src="{{ asset('assets-nsg/images/twitter.svg') }}" alt="twitter" class="img-fluid" />
                  </a>
                </li>
                @endif
                @if(isset($social_links->instagram) && $social_links->instagram !=null)
                <li>
                  <a href="{{$social_links->instagram}}" target="_blank">
                    <img src="{{ asset('assets-nsg/images/insta.svg') }}" alt="insta" class="img-fluid" />
                  </a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>
