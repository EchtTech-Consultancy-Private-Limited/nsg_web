@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="common-form-wrap pt-3 pb-5 bg-grey common-bg-right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrap mb-4">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                <form>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Basic Information
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Name <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Feedback Related To <span class="char-red">*</span></label>
                                                <select class="form-select">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Email Address <span class="char-red">*</span></label>
                                                <input type="email" class="form-control" placeholder="Enter Email Address">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Remarks <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" rows="5" placeholder="Enter Remarks"></textarea>
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
                                                    <input class="form-control" value="634620" disabled>
                                                    <a class="input-group-text">
                                                        <img src="assets/images/refresh.svg" alt="refresh-icon" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3"> 
                                                <label class="form-label">Captcha is in the image <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter Captcha is in the image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-center">
                                        <button type="submit" class="btn btn-red">Submit</button>
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