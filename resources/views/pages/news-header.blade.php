<div class="row align-items-center">
    <div class="col-md-2 p-0">
        <h3 class="news-title">
        @if(Session::get('locale') == 'hi') {{ config('staticTextLang.nau_hi') }} @else {{ config('staticTextLang.nau_en') }} @endif
        </h3>
    </div>
    <div class="col-md-10 pe-0">
        <div class="news-list-wrap pe-lg-5">
        <div class="news-list">
            <marquee class="marquee" direction="left" loop="" onMouseOver="this.stop()" onMouseOut="this.start()">
            <ul>
            @if(isset($news_managements) && count($news_managements)>0 )
                    @foreach($news_managements as $news_managements)
                    <li>
                        <a href="{{ route('news-list') }}" target="@php if($news_managements->tab_type ==1){ echo'_blank'; }else{ echo ''; } @endphp">
                            @if(Session::get('locale') == 'hi')  {{ $news_managements->title_name_hi }} @else {{ $news_managements->title_name_en }} @endif
                        </a>
                    </li>
                    @endforeach
                @else
                    <li><a>@if(Session::get('locale') == 'hi') {{ config('staticTextLang.No_Data_Available_hi') }} @else {{ config('staticTextLang.No_Data_Available_en') }} @endif!</a></li>
                @endif
            </ul>
            </marquee>
        </div>
        <div class="btn-wrap">
            <a href="{{ route('news-list') }}" class="btn btn-yellow-outline">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.View_All_hi') }} @else {{ config('staticTextLang.View_All_en') }} @endif</a>
        </div>
        </div>
    </div>
</div>
    