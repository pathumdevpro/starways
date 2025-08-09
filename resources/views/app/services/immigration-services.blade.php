@php
$id = 'immigration-services';
$title = 'Immigration Services';
@endphp

@extends('components.layouts.base')
@section('content')

<div
    id="Top"
    style="background-image: url('/images/hero-bg.jpg')"
    class="utility-hero">
    <div style="display: block" class="on-load-bg"></div>
    <a href="#Intro" class="hero-link-block w-inline-block"></a>
</div>
<div id="Intro" class="content-section page-offset-visible services-pg">
    <div class="content-wrapper w-container">
        <div class="flex-work-page">
            <div class="utility-left-column">
                <div class="work-overview">
                    <div
                        data-w-id="cab4b1c8-8f9d-4686-fe5f-6e8b04c16528"
                        class="side-block">
                        <div
                            style="
                        -webkit-transform: translate3d(-101%, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -moz-transform: translate3d(-101%, 0, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -ms-transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      "
                            class="divider-line"></div>
                    </div>
                    <div class="side-block">
                        <div class="side-title">Overview</div>
                        <div class="contact-details-box">
                            <div class="text-gray w-richtext">
                                <p>- Visa Applications & Renewals</p>
                                <p>- Labour Contract Processing</p>
                                <p>- Government Approvals</p>
                                <p>- Immigration Compliance</p>
                            </div>
                        </div>
                        <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
                    </div>

                    <div class="side-block">
                        <div class="side-title">Why Outsource?</div>
                        <div class="contact-details-box">
                            <ul class="text-gray w-richtext" style="padding-left: 1em;">
                                <li>Save time on paperwork and approvals</li>
                                <li>Reduce errors and compliance risks</li>
                                <li>Focus on growing your business</li>
                                <li>Expert handling of all government processes</li>
                                <li>End-to-end support from application to activation</li>
                            </ul>
                        </div>
                        <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
                    </div>
                </div>
            </div>
            <div class="utility-right">
                <div class="post-heading-box">
                    <div class="all-caps-title">service</div>
                    <h1 class="less-top-margin _10-pixels">Government & Immigration Paperwork Assistance</h1>
                    <p>Visa applications, license renewals, labour contracts, government approvals—we manage it all. Let us take care of the red tape so you can focus on growing your business.</p>
                    <div class="bottom-line-2"></div>
                    <div class="bottom-line-2"></div>
                </div>
                <div class="w-richtext">
                    <h3>Overview</h3>
                    <p>
                        Our experienced team handles the complete government and immigration paperwork process for your business. From visa applications and renewals to labour contracts and official approvals, we ensure every step is managed accurately and efficiently.
                    </p>
                    <h3>Why Trust Us With Your Paperwork?</h3>
                    <ul>
                        <li>Save valuable time and avoid delays</li>
                        <li>Reduce compliance risks and errors</li>
                        <li>Benefit from expert knowledge of UAE regulations</li>
                        <li>Full support—application, processing, and activation</li>
                        <li>Focus on your business growth while we handle the details</li>
                    </ul>
                    <p>
                        Let us manage the paperwork so you can concentrate on building your business.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.includes.consultation-box')

@endsection