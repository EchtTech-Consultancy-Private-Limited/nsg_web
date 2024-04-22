@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@push('post-scripts')
<script src="{{ asset('public/form-data/register-for-ncnc.js') }}"></script>
@endpush
@section('content')
<section class="common-form-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrap mb-4">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Request for Presentation</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black">
                    Request for Presentation
                </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <form id="registerforncnc_add_form" enctype="multipart/form-data">
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Basic Information
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Name <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Designation <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Name of the Firm</label>
                                                <input type="text" class="form-control" name="name_of_the_firm" placeholder="Enter Firm Name">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Registration No of the firm <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" name="registration_No_of_the_firm" placeholder="Enter Registration No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Address of Firm
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Foreign Address</label>
                                                <input type="text" class="form-control" name="foreign_address" placeholder="Enter Foreign Address">
                                            </div>
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Indian Address</label>
                                                <input type="text" class="form-control" name="indian_address" placeholder="Enter Indian Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            OEM Information
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Nomenclature of Wpn/Eqpt</label>
                                                <textarea class="form-control-textarea" name="nomenclature_of_wpneqpt" rows="5" placeholder="Enter Nomenclature of Wpn/Eqpt"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Brief Description of Wpn/Eqpt</label>
                                                <textarea class="form-control-textarea" name="brief_description_of_wpneqpt" rows="5" placeholder="Enter Description"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Details of OEM</label>
                                                <textarea class="form-control-textarea" name="details_of_eom" rows="5" placeholder="Enter Details of OEM"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Term of Service <span class="char-red">*</span></label>
                                                <div class="upload-wrap">
                                                    <div class="btn-wrap">
                                                        <img src="{{ asset('assets-nsg/images/upload.svg') }}" alt="upload" class="me-3 img-fluid /">
                                                        <div class="btn-red btn-upload">
                                                            <label for="file">Choose File</label>
                                                        </div>
                                                    </div>
                                                    <input type="file" hidden="" name="fileUpload" id="file" class="form-control">
                                                    <p class="upload-text">Maximum upload file size 25 MB, allowed files PDF,JPG,PNG *</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Details of reps of the firm attending presentation
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-2 mb-3">
                                                <label class="form-label">S.No <span class="char-red">*</span></label>
                                                <input class="form-control" name="s_no" placeholder="Enter S.No">
                                            </div>
                                            <div class="col-md-4 mb-3"> 
                                                <label class="form-label">Name <span class="char-red">*</span></label>
                                                <input class="form-control" name="name_dt" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Designation <span class="char-red">*</span></label>
                                                <input class="form-control" name="designation_dt" placeholder="Enter Designation">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Nationality <span class="char-red">*</span></label>
                                                <select class="form-select" name="nationality">
                                                    <option value="">Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Passport No. <span class="char-red">*</span></label>
                                                <input class="form-control" name="passport_no" placeholder="Enter S.No">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">ID No. <span class="char-red">*</span></label>
                                                <input class="form-control" name="id_no" placeholder="Enter ID No.">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Email Address <span class="char-red">*</span></label>
                                                <input class="form-control" name="email" placeholder="Enter Email Address">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Remarks <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" name="remark" rows="5" placeholder="Enter Remarks"></textarea>
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
                                                        <img src="{{ asset('assets-nsg/images/refresh.svg') }}" alt="refresh-icon" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3"> 
                                                <label class="form-label">Captcha is in the image <span class="char-red">*</span></label>
                                                <input class="form-control" name="captcha" placeholder="Enter Captcha is in the image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-wrap d-flex justify-content-center">
                                        <button type="submit" id="nsg_add_registerforncnc_submit" class="btn btn-red submit-registerforncnc-btn">Submit</button>
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