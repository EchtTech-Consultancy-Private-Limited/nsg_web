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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Lt Col Niranjan E.K
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#commonAccordion">
                        <div class="accordion-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="veer-img">
                                <img src="{{ asset('assets-nsg/images/veer1.png') }}" alt="Lt Col Niranjan E.K" class="img-fluid" />
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
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Rank and Unit
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col, BD Unit
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of Birth
                                    </h3>
                                    <p class="desc col-md-6">
                                      02 May 1981
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of sacrificing the life
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Place of Martyrdom
                                    </h3>
                                    <p class="desc col-md-6">
                                      Pathankot Punjab
                                    </p>
                                  </li>
                                </ul>
                                <div class="btn-wrap d-flex flex-wrap mt-5">
                                  <a class="btn btn-red px-3 py-2 me-3 shradhanjali">Offer e-Shradhanjali</a>
                                  <a href="https://bharatkeveer.gov.in/" target="_blank"
                                    class="btn btn-red px-3 py-2 me-3">Bharat ke Veer</a>
                                  <a class="btn btn-red px-3 py-2 brief-btn">Brief</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="brief-wrap">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h3 class="title">
                                    Brief <span>about</span> Lt Col Niranjan E.K
                                  </h3>
                                  <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                </div>
                                <p class="desc">
                                  Born on 2nd May 1981, IC-66162L Lt Col Niranjan E. K. joined BD Unit of NSG on 24 May
                                  2014. On the fateful day of 03rd Jan 2016 during operation “Dhangu Suraksha” at Air
                                  Base Pathankot (Punjab), about 0730 hours, the Bomb Disposal team of the Counter
                                  Terrorist Task Force, NSG was tasked to remove and recover live grenades, shells and
                                  dead bodies of terrorists as part of sanitization operation. The operational area was
                                  thickly vegetated and undulating with lot of unexploded grenades and explosive
                                  devices. Lieutenant Colonel Niranjan E K volunteered to lead his team for this high
                                  risk task of recovering the IEDs and dead bodies of the terrorists. He effectively
                                  removed two dead bodies of the terrorists and successfully neutralized the booby
                                  trapped IEDs attached to the bodies. Keeping in mind the safety of his team he did not
                                  care about his own, and led the recovery of the third body of the terrorist. While
                                  doing so, a concealed booby trap grenade blasted and he sustained severe multiple
                                  splinter injuries and later martyred. His gallant action ensured a safe passage for
                                  the intervening troops to conduct the successful operation and neutralization of two
                                  more terrorists. For this act of gallantry he was awarded SHAURYA CHAKRA (Posthumous).
                                  He is survived by mother Smt Radha Shivarajan, Wife Dr Radhika K. G. and daughter
                                  Vismaya.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Gajender Singh
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#commonAccordion">
                        <div class="accordion-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="veer-img">
                                <img src="{{ asset('assets-nsg/images/veer1.png') }}" alt="Lt Col Niranjan E.K" class="img-fluid" />
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
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Rank and Unit
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col, BD Unit
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of Birth
                                    </h3>
                                    <p class="desc col-md-6">
                                      02 May 1981
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of sacrificing the life
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Place of Martyrdom
                                    </h3>
                                    <p class="desc col-md-6">
                                      Pathankot Punjab
                                    </p>
                                  </li>
                                </ul>
                                <div class="btn-wrap d-flex flex-wrap mt-5">
                                  <a class="btn btn-red px-3 py-2 me-3 shradhanjali">Offer e-Shradhanjali</a>

                                  <a href="https://bharatkeveer.gov.in/" target="_blank"
                                    class="btn btn-red px-3 py-2 me-3">Bharat ke Veer</a>
                                  <a class="btn btn-red px-3 py-2 brief-btn">Brief</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="brief-wrap">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h3 class="title">
                                    Brief <span>about</span> Lt Col Niranjan E.K
                                  </h3>
                                  <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                </div>
                                <p class="desc">
                                  Born on 2nd May 1981, IC-66162L Lt Col Niranjan E. K. joined BD Unit of NSG on 24 May
                                  2014. On the fateful day of 03rd Jan 2016 during operation “Dhangu Suraksha” at Air
                                  Base Pathankot (Punjab), about 0730 hours, the Bomb Disposal team of the Counter
                                  Terrorist Task Force, NSG was tasked to remove and recover live grenades, shells and
                                  dead bodies of terrorists as part of sanitization operation. The operational area was
                                  thickly vegetated and undulating with lot of unexploded grenades and explosive
                                  devices. Lieutenant Colonel Niranjan E K volunteered to lead his team for this high
                                  risk task of recovering the IEDs and dead bodies of the terrorists. He effectively
                                  removed two dead bodies of the terrorists and successfully neutralized the booby
                                  trapped IEDs attached to the bodies. Keeping in mind the safety of his team he did not
                                  care about his own, and led the recovery of the third body of the terrorist. While
                                  doing so, a concealed booby trap grenade blasted and he sustained severe multiple
                                  splinter injuries and later martyred. His gallant action ensured a safe passage for
                                  the intervening troops to conduct the successful operation and neutralization of two
                                  more terrorists. For this act of gallantry he was awarded SHAURYA CHAKRA (Posthumous).
                                  He is survived by mother Smt Radha Shivarajan, Wife Dr Radhika K. G. and daughter
                                  Vismaya.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Maj Sandeep Unnikrishnan
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#commonAccordion">
                        <div class="accordion-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="veer-img">
                                <img src="{{ asset('assets-nsg/images/veer1.png') }}" alt="Lt Col Niranjan E.K" class="img-fluid" />
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
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Rank and Unit
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col, BD Unit
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of Birth
                                    </h3>
                                    <p class="desc col-md-6">
                                      02 May 1981
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Date of sacrificing the life
                                    </h3>
                                    <p class="desc col-md-6">
                                      Lt Col Niranjan E.K
                                    </p>
                                  </li>
                                  <li>
                                    <h3 class="title col-md-6">
                                      Place of Martyrdom
                                    </h3>
                                    <p class="desc col-md-6">
                                      Pathankot Punjab
                                    </p>
                                  </li>
                                </ul>
                                <div class="btn-wrap d-flex flex-wrap mt-5">
                                  <a class="btn btn-red px-3 py-2 me-3 shradhanjali">Offer e-Shradhanjali</a>

                                  <a href="https://bharatkeveer.gov.in/" target="_blank"
                                    class="btn btn-red px-3 py-2 me-3">Bharat ke Veer</a>
                                  <a class="btn btn-red px-3 py-2 brief-btn">Brief</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="brief-wrap">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h3 class="title">
                                    Brief <span>about</span> Lt Col Niranjan E.K
                                  </h3>
                                  <img src="{{ asset('assets-nsg/images/dotted-vector-red.png') }}" alt="vector" class="img-fluid" />
                                </div>
                                <p class="desc">
                                  Born on 2nd May 1981, IC-66162L Lt Col Niranjan E. K. joined BD Unit of NSG on 24 May
                                  2014. On the fateful day of 03rd Jan 2016 during operation “Dhangu Suraksha” at Air
                                  Base Pathankot (Punjab), about 0730 hours, the Bomb Disposal team of the Counter
                                  Terrorist Task Force, NSG was tasked to remove and recover live grenades, shells and
                                  dead bodies of terrorists as part of sanitization operation. The operational area was
                                  thickly vegetated and undulating with lot of unexploded grenades and explosive
                                  devices. Lieutenant Colonel Niranjan E K volunteered to lead his team for this high
                                  risk task of recovering the IEDs and dead bodies of the terrorists. He effectively
                                  removed two dead bodies of the terrorists and successfully neutralized the booby
                                  trapped IEDs attached to the bodies. Keeping in mind the safety of his team he did not
                                  care about his own, and led the recovery of the third body of the terrorist. While
                                  doing so, a concealed booby trap grenade blasted and he sustained severe multiple
                                  splinter injuries and later martyred. His gallant action ensured a safe passage for
                                  the intervening troops to conduct the successful operation and neutralization of two
                                  more terrorists. For this act of gallantry he was awarded SHAURYA CHAKRA (Posthumous).
                                  He is survived by mother Smt Radha Shivarajan, Wife Dr Radhika K. G. and daughter
                                  Vismaya.
                                </p>
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
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection