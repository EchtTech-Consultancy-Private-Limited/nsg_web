@extends('layout.master')
@section('title')
{{ __('National Security Guard | '.$title) }}
@endsection
@section('content')
<section class="organization-wrap pt-3 pb-5 bg-grey common-bg-right" id="main_content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb-wrap mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                <li class="breadcrumb-item active" aria-current="page"> Organization Chart</li>
              </ol>
            </nav>
          </div>
          <h2 class="heading-black">
            Organization Chart (NSG)
          </h2>
        </div>
        <div class="col-md-12">
          <div class="common-card py-5 px-4 mt-4">
            <div class="row">
              <div class="col-md-12">
                <div class="organization-chart">
                  <div class="tree">
                    <ul>
                      <li>
                        <div class="d-flex align-items-center justify-content-center ms-5 ps-4">
                          <div class="tree-node-wrap">
                            <span class="tree-node-bg bg-red"></span>
                            <div class="tree-node tree-node-red">
                              <p class="tree-node-text">
                                DG NSG
                              </p>
                            </div>
                          </div>
                        </div>
                        <ul>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  IG (OPS)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  IG (HQ)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-green"></span>
                              <div class="tree-node tree-node-green">
                                <p class="tree-node-text">
                                  FA
                                </p>
                                <hr />
                                <p class="tree-node-text">
                                  IF BRANCH
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  IG TRG CENTRE
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  IG (PROV)
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <div class="subchild">
                      <div class="subchild-one">
                        <ul>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-green"></span>
                              <div class="tree-node tree-node-green">
                                <p class="tree-node-text">
                                  DIRECTOR
                                </p>
                                <hr />
                                <p class="tree-node-text">
                                  ENGR
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <ul class="d-flex">
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  DIG (ADM)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  HQ CPF
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="subchild-two">
                        <ul class="d-flex">
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  DIG (MED)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-yellow"></span>
                              <div class="tree-node tree-node-yellow">
                                <p class="tree-node-text">
                                  DIG (PROV)
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="subchild-three">
                        <ul class="d-flex">
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  DIG
                                </p>
                                <hr />
                                <p class="tree-node-text">
                                  (OPS & TRG)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  NBDC
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="subchild-four">
                        <ul class="d-flex">
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  DIG
                                </p>
                                <hr />
                                <p class="tree-node-text">
                                  (OPS & TRG)
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  NBDC
                                </p>
                                <hr />
                                <p class="tree-node-text">
                                  (COMN & IT)
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <ul>
                          <li>
                            <div class="tree-node-wrap">
                              <span class="tree-node-bg bg-blue"></span>
                              <div class="tree-node tree-node-blue">
                                <p class="tree-node-text">
                                  HQ CTF
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
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