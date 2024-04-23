@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@push('post-scripts')
<script src="{{ asset('public/form-data/feedback.js') }}"></script>
@endpush
@section('content')
<section class="common-form-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrap mb-4">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black">
                    Feedback
                </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <form id="feedback_add_form" enctype="multipart/form-data">
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Basic Information
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Name <span class="char-red">*</span></label>
                                                <input type="text" name="fullname" value="{{ old('fullname') }}" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Feedback Related To <span class="char-red">*</span></label>
                                                <select class="form-select" name="feedbackRelatedTo">
                                                    <option value="">Select</option>
                                                    <option value="Suggestion">Suggestion</option>
                                                    <option value="Complain">Complain</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Email Address <span class="char-red">*</span></label>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email Address">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Remarks <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" name="remark" rows="5" placeholder="Enter Remarks">{{ old('remark') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            CAPTCHA
                                        </h2>
                                        <p class="form-desc">This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</p>
                                        <div class="row g-3 py-3 align-items-end">
                                            <div class="col-md-3 mb-3">
                                                <div class="input-group captcha-input-wrap">
                                                     <input class="form-control" value="{{ $CustomCaptch }}" disabled>
                                                    <a class="input-group-text" onclick="chnageCaptcha(this.value)">
                                                        <img src="{{ asset('assets-nsg/images/refresh.svg') }}" alt="refresh-icon" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3"> 
                                                <label class="form-label">Captcha is in the image <span class="char-red">*</span></label>
                                                <input class="form-control" name="captchacode" placeholder="Enter Captcha is in the image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-center">
                                        <button type="submit" id="nsg_add_feedback_submit" class="btn btn-red submit-feedback-btn">Submit
                                        <!-- <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span> -->
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection