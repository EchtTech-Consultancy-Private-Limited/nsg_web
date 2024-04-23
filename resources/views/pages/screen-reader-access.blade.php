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
                            <li class="breadcrumb-item active" aria-current="page">Screen Reader Access</li>
                        </ol>
                    </nav>
                </div>
                <h2 class="heading-black mb-3">
                    Screen Reader Access
                </h2>
            

            </div>
            <div class="col-md-12 mt-3">
                <div class="common-card p-4">
                <p class="mb-2">
                    The website of National Security Guard complies with Guidelines for Indian Government
                    Websites and World Wide Web Consortium (W3C) Web Content Accessibility Guidelines (WCAG) 2.0 level
                    A. This will enable people with visual impairments access the website using technologies, such as
                    screen readers. The information of the website is accessible with different screen readers, such as
                    JAWS, NVDA, SAFA, Supernova and Window-Eyes.
                </p>

                <p>
                    Following table lists the information about different screen readers: <b>Information related to the
                    various screen readers</b>
                </p>
                <table class="table common-table mb-0 mt-3">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Screen Reader</th>
                            <th>Website</th>
                            <th>Free / Commercial
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="sorting_1">Non Visual Desktop Access (NVDA)</td>
                            <td><a class="ext" href="http://www.nvda-project.org/" target="_BLANK"
                                    onclick="return confirm('This link will take you to an external web site.')"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.nvda-project.org/ (link is external)</a><br>(External
                                website
                                that opens in a new window)</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>System Access To Go</td>
                            <td>
                                <a class="ext" href="http://www.satogo.com/" target="_BLANK"
                                    onclick="return confirm('This link will take you to an external web site.')"
                                    title="External site that opens in a new window" tabindex="0">http://www.satogo.com/
                                    (link is external)</a><br>(External website that opens in a new window)
                            </td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Web Anywhere</td>
                            <td>
                                <a class="ext" href="http://webanywhere.cs.washington.edu/wa.php" target="_BLANK"
                                    onclick="return confirm('This link will take you to an external web site.')"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://webanywhere.cs.washington.edu/wa.php (link is
                                    external)</a><br>(External website that opens in a new window)
                            </td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Hal</td>
                            <td>
                                <a class="ext" href="http://www.yourdolphin.co.uk/productdetail.asp?id=5"
                                    target="_BLANK" onclick="return confirm('This link will take you to an external web site.')"
                                    title="External site that opens in a new window"
                                    tabindex="0">http://www.yourdolphin.co.uk/productdetail.asp?id=5 (link is
                                    external)</a><br>(External website that opens in a new window)
                            </td>
                            <td>Commercial</td>
                        </tr>
                    </tbody>
                </table>
                </div>
              
            </div>
        </div>
    </div>
</section>
@endsection