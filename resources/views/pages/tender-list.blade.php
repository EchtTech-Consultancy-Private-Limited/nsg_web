@extends('layout.master')
@section('title')
{{ __('Tender') }}
@endsection
@section('content')
<section class="contact-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-wrap mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tenders</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                  </ol>
                </nav>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                    <h2 class="heading-black">
                    Tenders List
                    </h2>
                  <div class="btn-wrap">
                      <a href="{{ url('archive-tender/'.$slug) }}" class="btn btn-red px-3 py-2">Archive Tenders</a>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="nsg_datatable" class="table table-striped table-bordered mb-0">
                                    <thead>
                                      <tr>
                                        <th scope="col" class="text-center">S.No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Tender No.</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Date of Release</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Est.Cost(Rs.)</th>
                                        <th scope="col">Timings</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Amendments</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($tender_managements) && count($tender_managements)>0)
                                        @foreach($tender_managements as $key=>$tender_management)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td>
                                            @if(Session::get('locale') == 'hi') {{ $tender_management->title_name_hi??'N/A' }} @else {{ $tender_management->title_name_en??'N/A' }} @endif
                                            </td>
                                            <td>
                                            @if(Session::get('locale') == 'hi') {!! $tender_management->description_hi??'N/A' !!} @else {!! $tender_management->description_en??'N/A' !!} @endif
                                            </td>
                                            <td class="views-field views-field-field-amount-rs- download" data-label="
                                            Request Doc">
                                            <a href="{{ asset('resources/uploads/TenderManagement/'.$tender_management->public_url) }}" download="" tabindex="0" target="_blank">
                                                Download
                                            </a> <i class="fa fa-file-pdf-o text-danger ms-2"></i>  <span class="size">({{$tender_management->pdfimage_size}})</span>
                                            </td>
                                            <td class="text-center">{{\Carbon\Carbon::parse($tender_management->startDate)->format('d-m-Y')}}</td>
                                            <td class="text-center">{{\Carbon\Carbon::parse($tender_management->endDate)->format('d-m-Y')}}</td>
                                            <td class="text-center">{{ $tender_management->tender_cost??'N/A' }}</td>
                                            @php
                                            $start_datetime = new DateTime($tender_management->startDate);
                                            $end_datetime = new DateTime($tender_management->endDate);
                                            $time_diff = $start_datetime->diff($end_datetime);
                                            $time = $time_diff->format('%a');
                                            @endphp
                                            <td class="text-center">{{ $time*24??'00' }}hours</td>
                                            <td class="text-center">{{ $tender_management->remark??'N/A' }}</td>
                                            <td class="text-center">{{ $tender_management->amendments??'N/A' }}</td>
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