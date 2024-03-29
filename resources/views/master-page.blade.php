@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<p>{{ $pageData->metaDatas->page_title_en }}</p>
<p>{!! $pageData->pageContents->page_content_en !!}</p>

@endsection