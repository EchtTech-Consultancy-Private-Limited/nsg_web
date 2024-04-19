<div class="row align-items-center">
    <div class="col-lg-4">
        <div class="header-top-left">
            <div class="content">
                <h3 class="title">
                    @if(Session::get('locale') == 'hi')
                      {{ 'भारत सरकार' }} @else {{ 'GOVERNMENT OF INDIA' }}
                    @endif
                </h3>

                <h3 class="title border-left-1 timer-date-c">
                <span class="li_eng responsive_go_eng">
                        <?php echo date('d F Y', strtotime(date('y-m-d'))); ?> 
                        <span id=timeid> </span>
                    </span>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-8 d-none d-xl-block">
        <div class="header-top-right">
            <div class="content">
                <ul>
                    <li><a href="{{ route('sitemap') }}" title="@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.Sitemap_hi') }} @else {{ config('staticTextLang.Sitemap_en') }}
                            @endif">@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.Sitemap_hi') }} @else {{ config('staticTextLang.Sitemap_en') }}
                            @endif</a></li>
                    <li><a href="{{ route('feedback') }}" title="@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.Feedback_hi') }} @else {{ config('staticTextLang.Feedback_en') }}
                            @endif">@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.Feedback_hi') }} @else {{ config('staticTextLang.Feedback_en') }}
                            @endif</a></li>
                    <li><a href="{{ route('screen-reader-access') }}" title="@if(Session::get('locale') == 'hi') {{ config('staticTextLang.sra_hi') }} @else
                            {{ config('staticTextLang.sra_en') }} @endif">@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.sra_hi') }} @else
                            {{ config('staticTextLang.sra_en') }} @endif</a></li>
                    <li><a href="#main_content" title="@if(Session::get('locale') == 'hi') {{ config('staticTextLang.stmc_hi') }} @else
                            {{ config('staticTextLang.stmc_en') }} @endif">@if(Session::get('locale') == 'hi')
                            {{ config('staticTextLang.stmc_hi') }} @else
                            {{ config('staticTextLang.stmc_en') }} @endif</a></li>
                    <li>
                        <div class="search-btn-d p-relative">
                            <button class="btn search-show-popup" title="Search">
                                <i class="fa fa-search"></i>
                            </button>

                            <div class="serch-box-show d-none">
                                <form name="searchForm" action="{{ url('search') }}" method="get">
                                    <input type="hidden" name="_token" value="">
                                    <div class="d-flex">
                                        <form action="#" method="get">
                                            <div class="d-flex">
                                                <input type="search" class="form-control" placeholder="Search here..."
                                                    value="{{ request('search_key') ?? '' }}" name="search_key"
                                                    id="search_key" onKeyUp="autoComplete()" autocomplete="off"
                                                    required>
                                                <button type="submit" class="btn-info submit-btn-apply">
                                                    <i class="fa fa-search"> </i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                    </li>
                    <li>
                        <div class="theme-wrap">
                            <div class="form-check form-switch">
                                <input class="form-check-input" id="themeToggleCheckbox" onclick="toggleTheme()"
                                    type="checkbox" role="switch" title="Dark / Light Mode">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex mx-2 mx-md-4">
                            <button class="text-increment-btn" id="decrementBtn" title="Decrese Font Size">A-</button>
                            <button class="text-increment-btn active" id="normalBtn" title="Normal Font Size">A</button>
                            <button class="text-increment-btn" id="incrementBtn" title="Increse Font Size">A+</button>
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
                    <!-- <li>
                        <div class="screen-reader">
                            <button class="btn btn-white btn-outline-black mx-2 ms-md-4">
                                <img src="{{ asset('assets-nsg/images/screen-reader.svg')}}" alt="screen-reader"
                                    class="img-fluid" />
                            </button>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>