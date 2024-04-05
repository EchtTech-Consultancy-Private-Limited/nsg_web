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
                                                <label class="form-label">Designation <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Designation">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Name of the Firm <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Firm Name">
                                            </div>
                                            <div class="col-md-3 mb-lg-0 mb-3">
                                                <label class="form-label">Registration No of the firm <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Registration No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            Address of Firm
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Foreign Address <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Foreign Address">
                                            </div>
                                            <div class="col-md-6 mb-lg-0 mb-3">
                                                <label class="form-label">Indian Address <span class="char-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Indian Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-card-bdr">
                                        <h2 class="title-black">
                                            EOM Information
                                        </h2>
                                        <div class="row g-3 py-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Nomenclature of Wpn/Eqpt <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" rows="5" placeholder="Enter Nomenclature of Wpn/Eqpt"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Brief Description of Wpn/Eqpt <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" rows="5" placeholder="Enter Description"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Details of EOM <span class="char-red">*</span></label>
                                                <textarea class="form-control-textarea" rows="5" placeholder="Enter Details of EOM"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Term of Service <span class="char-red">*</span></label>
                                                <div class="upload-wrap">
                                                    <div class="btn-wrap">
                                                        <img src="assets/images/upload.svg" alt="upload" class="me-3 img-fluid /">
                                                        <div class="btn-red btn-upload">
                                                            <label for="file">Choose File</label>
                                                        </div>
                                                    </div>
                                                    <input type="file" hidden="" id="file" class="form-control">
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
                                                <input class="form-control" placeholder="Enter S.No">
                                            </div>
                                            <div class="col-md-4 mb-3"> 
                                                <label class="form-label">Name <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Designation <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter Designation">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Nationality <span class="char-red">*</span></label>
                                                <select class="form-select">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Passport No. <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter S.No">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">ID No. <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter ID No.">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Email Address <span class="char-red">*</span></label>
                                                <input class="form-control" placeholder="Enter Email Address">
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