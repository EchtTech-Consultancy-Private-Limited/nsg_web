@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="veer-gatha-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb-wrap mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Veer Gatha</li>
              </ol>
            </nav>
          </div>
          <h2 class="heading-black">
            Veer Gatha
          </h2>
        </div>
        <div class="col-md-12">
          <div class="common-card p-5 mt-4">
            <div class="row">
              <div class="col-md-12">
                <div class="veer-accordion common-accordion">
                  <div class="accordion" id="commonAccordion">
                    @if(isset($veerlist) && count($veerlist)>0)
                      @foreach($veerlist as $key=>$veerLists)
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne_{{$key}}">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne_{{$key}}" aria-expanded="false" aria-controls="collapseOne_{{$key}}">
                            @if(Session::get('locale') == 'hi') {{ $veerLists->name_hi??'' }} @else {{ $veerLists->name_en??'' }} @endif
                          </button>
                        </h2>
                        <div id="collapseOne_{{$key}}" class="accordion-collapse collapse" aria-labelledby="headingOne_{{$key}}"
                          data-bs-parent="#commonAccordion">
                          <div class="accordion-body">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="veer-img">
                                  <img src="{{ asset('resources/uploads/empDirectory/'.$veerLists->public_url) }}" alt="@if(Session::get('locale') == 'hi') {{ $veerLists->name_hi??'' }} @else {{ $veerLists->name_en??'' }} @endif" class="img-fluid BB" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="veer-info">
                                  <ul>
                                    <li>
                                      <h3 class="title col-md-6">
                                        Name
                                      </h3>
                                      <p class="desc col-md-6">
                                        @if(Session::get('locale') == 'hi') {{ $veerLists->name_hi??'' }} @else {{ $veerLists->name_en??'' }} @endif
                                      </p>
                                    </li>
                                    <li>
                                      <h3 class="title col-md-6">
                                        Rank and Unit
                                      </h3>
                                      <p class="desc col-md-6">
                                       @if(Session::get('locale') == 'hi') {{ $veerLists->desi_name_hi??'' }} @else {{ $veerLists->desi_name_en??'' }} @endif
                                      </p>
                                    </li>
                                    <li>
                                      <h3 class="title col-md-6">
                                        Date of Birth
                                      </h3>
                                      <p class="desc col-md-6">
                                        {{  $veerLists->date_of_birth }}
                                      </p>
                                    </li>
                                    <li>
                                      <h3 class="title col-md-6">
                                        Date of sacrificing the life
                                      </h3>
                                      <p class="desc col-md-6">
                                        {{  $veerLists->date_of_death }}
                                      </p>
                                    </li>
                                    <li>
                                      <h3 class="title col-md-6">
                                        Place of Martyrdom
                                      </h3>
                                      <p class="desc col-md-6">
                                          @if(Session::get('locale') == 'hi') {{ $veerLists->address??'' }} @else {{ $veerLists->address??'' }} @endif
                                      </p>
                                    </li>
                                  </ul>
                                  <div class="btn-wrap d-flex flex-wrap mt-5">
                                    <a class="btn btn-red px-3 py-2 me-3 shradhanjali">Offer e-Shradhanjali</a>
                                    <a href="https://bharatkeveer.gov.in/" target="_blank" class="btn btn-red px-3 py-2 me-3">Bharat ke Veer</a>
                                    <a class="btn btn-red px-3 py-2 brief-btn">Brief</a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="brief-wrap">
                                  <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="title">
                                      Brief <span>about</span> @if(Session::get('locale') == 'hi') {{ $veerLists->name_hi??'' }} @else {{ $veerLists->name_en??'' }} @endif
                                    </h3>
                                    <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                  </div>
                                  <p class="desc">
                                    @if(Session::get('locale') == 'hi') {{ $veerLists->description_hi??'' }} @else {{ $veerLists->description_en??'' }} @endif
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection