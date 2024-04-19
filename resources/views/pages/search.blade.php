@extends('layout.master')
@section('title')
{{ __('CPPRI') }}
@endsection
@section('content')
<section class="wrapper banner-wrapper d-none">
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
<div class="bg-wrapper inner-wrapper mt-3">
    <div class="breadcam-bg breadcam">
        <div class="container common-container four_content">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrap mb-4">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">
                                        @if (Session::get('Lang') == 'hi')
                                        होम पेज
                                        @else
                                        Home
                                        @endif
                                    </a>
                                </li>                              
                                <li class="breadcrumb-item active" aria-current="page">
                                   {{ Request::get('search_key') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <ul>
                <li>

                </li>
                <li>
                   
                </li>
            </ul>
        </div>
    </div>
</div>
<section class="sidebar-main-nav ptb-30">
    <div class="container common-container">
        <div class="">
            <form name="searchForm" action="{{ url('/search') }}" method="get" class="row info1 mb-20 p-0">
                <div class="search-box row mt-3 mb-3">
                    <div class="col-md-4">
                        <input type="search" name="search_key" id="search_key" value="{{ request('search_key') ?? '' }}"
                            class="form-control" required placeholder="Search here...">
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="more gallery-more-btn submit-btn-apply m-0 rounded" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
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
                <h5><span class="serch-list">{{ $count += 1 }}. </span><a href="{{ $item['link'] ?? '' }}">{!!
                        isset($item['title']) ? $item['title'] : '' !!}</a></h5>
                @else
                <p><span class="serch-list">{{ $count += 1 }}. </span>{!! isset($item['title']) ? $item['title'] : ''
                    !!}</p>
                @endif
                <p>{!! implode(' ', array_slice(str_word_count(strip_tags($item['description']), 1), 0, 100)) ?? '' !!}
                </p>
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