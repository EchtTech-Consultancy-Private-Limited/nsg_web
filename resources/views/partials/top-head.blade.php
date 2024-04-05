<div class="row align-items-center">
    <div class="col-lg-4">
        <div class="header-top-left">
            <div class="content">
                <h3 class="title">
                    @if(Session::get('locale') == 'hi') {{ config('staticTextLang.wtowonsg_hi') }} @else {{ config('staticTextLang.wtowonsg_en') }} @endif
                </h3>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-8 d-none d-xl-block">
        <div class="header-top-right">
            <div class="content">
                <ul>
                    <li><a href="{{ route('sitemap') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.Sitemap_hi') }} @else {{ config('staticTextLang.Sitemap_en') }} @endif</a></li>
                    <li><a href="{{ route('feedback') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.Feedback_hi') }} @else {{ config('staticTextLang.Feedback_en') }} @endif</a></li>
                    <li><a href="#">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.sra_hi') }} @else {{ config('staticTextLang.sra_en') }} @endif</a></li>
                    <li><a href="#">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.stmc_hi') }} @else {{ config('staticTextLang.stmc_en') }} @endif</a></li>
                    <li>
                    <div class="theme-wrap">
                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch">
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="d-flex mx-2 mx-md-4">
                        <button class="text-increment-btn" id="decrementBtn">A-</button>
                        <button class="text-increment-btn active" id="normalBtn">A</button>
                        <button class="text-increment-btn" id="incrementBtn">A+</button>
                    </div>
                    </li>
                    <li>
                    <div class="select-wrap">
                        <img src="{{ asset('assets-nsg/images/globe.svg')}}" alt="globe" class="img-fluid">
                        <select class="form-select" onchange="setlang(value);">
                            <option value="en" @if (Session::get('locale')=='en' ) selected @endif>English</option>
                            <option value="hi" @if (Session::get('locale')=='hi' ) selected @endif>हिन्दी</option>
                        </select>
                    </div>
                    </li>
                    <li>
                    <div class="screen-reader">
                        <button class="btn btn-white btn-outline-black mx-2 ms-md-4">
                            <img src="{{ asset('assets-nsg/images/screen-reader.svg')}}" alt="screen-reader" class="img-fluid" />
                        </button>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>