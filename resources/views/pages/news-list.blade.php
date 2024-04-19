@extends('layout.master')
@section('title')
{{ __('News') }}
@endsection
@section('content')
<section class="contact-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-wrap mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                  </ol>
                </nav>
              </div>
              <h2 class="heading-black">
                News List
              </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common-table table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                      <tr>
                                        <th scope="col" class="text-center">S.No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Publish Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($news_managements) && count($news_managements)>0)
                                        @foreach($news_managements as $key=>$news_management)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td>{{$news_management->title_name_en }}</td>
                                            <td class="views-field views-field-field-amount-rs- download" data-label="
                                            Request Doc">
                                            <a href="{{ asset('resources/uploads/PageContentPdf/'.$news_management->public_url) }}" download="" tabindex="0" target="_blank">
                                                Download
                                            </a> <i class="fa fa-file-pdf-o text-danger ms-2"></i>  <span class="size">({{$news_management->pdfimage_size}})</span>
                                            </td>
                                            <td class="text-center">{{\Carbon\Carbon::parse($news_management->start_date)->format('d-m-Y')}}</td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection