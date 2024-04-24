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
                    <li class="breadcrumb-item"><a href="{{ route('/') }}">@if(Session::get('locale') == 'hi') {{ config('staticTextLang.home_hi') }} @else {{ config('staticTextLang.home_en') }} @endif</a></li>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.999" height="16.806" viewBox="0 0 13.999 16.806">
                                  <path id="Union_1" data-name="Union 1" d="M-5370-12.193h-5.389c-1.425,0-2.071-2.073-1.247-3.537a6.939,6.939,0,0,1,3.3-3.068,5.808,5.808,0,0,0,3.34,1.053,5.81,5.81,0,0,0,3.34-1.053,6.939,6.939,0,0,1,3.3,3.068c.824,1.464.178,3.537-1.247,3.537Zm-4.408-11.344v-1.055A4.407,4.407,0,0,1-5370-29a4.407,4.407,0,0,1,4.406,4.406v1.055A4.407,4.407,0,0,1-5370-19.131,4.407,4.407,0,0,1-5374.408-23.538Z" transform="translate(5377 28.999)" fill="#cc2832"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.107" height="17.477" viewBox="0 0 13.107 17.477">
                                  <path id="location-pin-svgrepo-com" d="M14.554,0A6.554,6.554,0,0,0,8,6.554a6.451,6.451,0,0,0,1.244,3.8c.014.026.016.054.032.079l4.369,6.554a1.092,1.092,0,0,0,1.818,0l4.369-6.554c.016-.025.018-.053.032-.079a6.451,6.451,0,0,0,1.244-3.8A6.554,6.554,0,0,0,14.554,0Zm0,8.738a2.185,2.185,0,1,1,2.185-2.185A2.185,2.185,0,0,1,14.554,8.738Z" transform="translate(-8)" fill="#cc2832"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.593" height="15.585" viewBox="0 0 15.593 15.585">
                                  <g id="Call" transform="translate(-847.613 -434.249)">
                                    <path id="Path_114183" data-name="Path 114183" d="M859.375,454.3a3.558,3.558,0,0,1-1.941-.6,33.149,33.149,0,0,1-9.227-9.233,3.454,3.454,0,0,1,.386-4.349c.216-.226.435-.45.664-.663a1.386,1.386,0,0,1,1.923-.04c.554.509,1.089,1.043,1.6,1.6a1.426,1.426,0,0,1-.093,1.982,1.329,1.329,0,0,0-.192,1.949,15.329,15.329,0,0,0,4.518,4.509,1.32,1.32,0,0,0,1.9-.2,1.448,1.448,0,0,1,2.064-.06c.525.49,1.03,1,1.522,1.526a1.283,1.283,0,0,1,.215,1.574A3.992,3.992,0,0,1,859.375,454.3Z" transform="translate(0 -4.467)" fill="#cc2832"/>
                                    <path id="Path_114184" data-name="Path 114184" d="M962.844,441.787c-.032.235.106.587-.287.6s-.29-.344-.3-.578a7.365,7.365,0,0,0-6.272-6.908c-.286-.041-.578-.041-.867-.054-.209-.01-.42-.03-.414-.3s.21-.3.424-.289a7.7,7.7,0,0,1,5.068,1.983A7.79,7.79,0,0,1,962.844,441.787Z" transform="translate(-99.638)" fill="#cc2832"/>
                                    <path id="Path_114185" data-name="Path 114185" d="M955.484,468.943a5.475,5.475,0,0,1,5.109,5.231c0,.058.023.133-.005.171a4.109,4.109,0,0,1-.288.317c-.1-.108-.249-.2-.276-.326-.085-.394-.084-.809-.186-1.2a4.881,4.881,0,0,0-4.5-3.622c-.081,0-.187.022-.237-.019a.539.539,0,0,1-.219-.3c-.006-.079.127-.209.225-.247A1.094,1.094,0,0,1,955.484,468.943Z" transform="translate(-99.804 -32.269)" fill="#cc2832"/>
                                    <path id="Path_114186" data-name="Path 114186" d="M954.973,503.416a3.106,3.106,0,0,1,3.04,2.885c.011.207,0,.419-.266.444s-.314-.172-.334-.385a2.424,2.424,0,0,0-2.347-2.339c-.219-.02-.428-.084-.366-.338C954.731,503.552,954.924,503.461,954.973,503.416Z" transform="translate(-99.625 -64.354)" fill="#cc2832"/>
                                  </g>
                                </svg>
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