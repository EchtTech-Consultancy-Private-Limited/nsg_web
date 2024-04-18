@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="contact-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-wrap mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                  </ol>
                </nav>
              </div>
              <h2 class="heading-black">
                Contact Us
              </h2>
            </div>
            <div class="col-md-12">
                <div class="common-card p-5 mt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets-nsg/images/user.svg') }}" alt="user" class="img-fluid" />
                                </div>
                                <p class="title">
                                    <strong>N.Hari, DIG(Comn&IT)</strong><br />
                                    Web Information Manager
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets-nsg/images/location.svg') }}" alt="location" class="img-fluid" />
                                </div>
                                <p class="title">
                                    HQ NSG, Mehramnagar, Palam,<br />
                                    New Delhi-110037
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info">
                                <div class="img-wrap">
                                    <img src="{{ asset('assets-nsg/images/call.svg') }}" alt="call" class="img-fluid" />
                                </div>
                                <p class="title">
                                    011-2089-2045
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="nsg_datatable" class="display common-table" style="width:100%">
                                <thead>
                                      <tr>
                                        <th scope="col" class="text-center">S.No</th>
                                        <th scope="col">Appointment</th>
                                        <th scope="col">Telephone No.</th>
                                        <th scope="col">Email Id</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-center">1</td>
                                        <td>DIG (Adm), Appellete Authority</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">2</td>
                                        <td>DIG (Comn & IT), Web Information Manager</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">3</td>
                                        <td>Group Commander (Adm), CPIO</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">4</td>
                                        <td>DIG (Adm), Appellete Authority</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">5</td>
                                        <td>DIG (Comn & IT), Web Information Manager</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
                                      <tr>
                                        <td class="text-center">6</td>
                                        <td>Group Commander (Adm), CPIO</td>
                                        <td>011-2567-1635</td>
                                        <td>digadm[at]nsg[dot]gov[dot]in</td>
                                      </tr>
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