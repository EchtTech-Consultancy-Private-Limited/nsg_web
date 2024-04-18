@extends('layout.master')
@section('title')
    {{ __('CPPRI') }}
@endsection
@section('content')
    <section class="wrapper banner-wrapper">
        <div id="flexSlider" class="flexslider"
            style="background-image: url('{{ asset('assets-cppri/images/agnipath-banner-1200-185.png') }}');">
            <div class="inner-banner-text">
                <div class="text-banner-content">
                    <h2>
                        @if (Session::get('Lang') == 'hi')
                            {{ __('messages.Search_Page') }}
                        @else
                            {{ __('messages.Search_Page') }}
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-wrapper inner-wrapper">
        <div class="breadcam-bg breadcam">
            <div class="container common-container four_content">
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            @if (Session::get('Lang') == 'hi')
                                होम पेज
                            @else
                                Home
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void();">
                            @if (Session::get('Lang') == 'hi')
                                {{ __('messages.Search_Page') }}
                            @else
                                {{ __('messages.Search_Page') }}
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="sidebar-main-nav ptb-30">
        <div class="container common-container">
            <form name="searchForm" action="{{ url('/search') }}" method="get" class="row info1 mb-20 p-0">
            <div class="search-box">
                  <input type="search" name="search_key" id="search_key"
                    value="{{ request('search_key') ?? '' }}" class="col-md-4" required placeholder="Search here...">
                    <button class="more gallery-more-btn" type="submit">Search</button>
                </div>
            </form>
            <div class="alt">
                <h2>
                @if (count($data) > 0)
                    Search Result :
                @else
                @endif     
               </h2>
            </div>
            <p class="mt-4 mb-3 text-primary">
            </p>
            <div class="col-md-12 p-0 mb-20">
                @if (count($data) > 0)
                    @php
                        $count = $data->firstItem() - 1;
                    @endphp
                    @foreach ($data as $item)
                        <div>
                            @if($item['link'] != '')
                                <h5><span class="serch-list">{{ $count += 1 }}. </span><a href="{{ $item['link'] ?? '' }}">{!! isset($item['title']) ? $item['title'] : '' !!}</a></h5>
                            @else
                            <p><span class="serch-list">{{ $count += 1 }}. </span>{!! isset($item['title']) ? $item['title'] : '' !!}</p>
                            @endif
                                <p>{!! implode(' ', array_slice(str_word_count(strip_tags($item['description']), 1), 0, 100)) ?? '' !!}</p>
                        </div>
                        <hr>
                    @endforeach
                @else
                    <h4 class="text-danger">No data found ....</h4>
                @endif
            </div>
            {{-- Add Pagination Links --}}
            <div class="search-page mt-4">
                <div class="mt-4">
                    {{-- {{ $data->links() }} --}}
                    {{ $data->withPath(url()->current())->appends(['search_key' => request('search_key')])->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
