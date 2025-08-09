@php
$id = 'tax-and-vat';
$title = 'Tax and VAT';
@endphp

@extends('components.layouts.base')
@section('content')

<div
    id="Top"
    style="background-image: url('/images/vat-in-uae.webp')"
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
                                <p>- VAT Registration & Filing</p>
                                <p>- Tax Compliance & Consultancy</p>
                                <p>- Refund Claims & Audit Support</p>
                                <p>- Corporate Tax Assistance</p>
                            </div>
                        </div>
                        <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
                    </div>

                    <div class="side-block">
                        <div class="side-title">Why VAT & Tax?</div>
                        <div class="contact-details-box">
                            <ul class="text-gray w-richtext" style="padding-left: 1em;">
                                <li>Ensure full legal compliance</li>
                                <li>Accurate and timely filings</li>
                                <li>Minimize risk of penalties</li>
                                <li>Audit-ready documentation</li>
                                <li>Optimize financial performance</li>
                                <li>Expert support for disputes or audits</li>
                            </ul>
                        </div>
                        <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
                    </div>
                </div>
            </div>
            <div class="utility-right">
                <div class="post-heading-box">
                    <div class="all-caps-title">service</div>
                    <h1 class="less-top-margin _10-pixels">VAT & Tax Services – Dubai</h1>
                    <p>Stay Compliant. Minimize Risk. Maximize Clarity. End-to-end support for UAE VAT & tax compliance.</p>
                    <div class="bottom-line-2"></div>
                    <div class="bottom-line-2"></div>
                </div>
                <div class="w-richtext">
                    <h3>Overview</h3>
                    <p>
                        In today’s regulated UAE business environment, VAT and tax compliance is critical. Our expert team at StarWay provides end-to-end VAT & tax services to ensure your business meets legal requirements, avoids penalties, and optimizes financial performance.
                    </p>
                    <h3>Our Key Services Include</h3>
                    <ul>
                        <li><strong>VAT Registration</strong>: Assessment and guidance through the Federal Tax Authority (FTA) registration process.</li>
                        <li><strong>Periodic VAT Return Filing</strong>: Timely and accurate return filing for ongoing compliance.</li>
                        <li><strong>VAT & Tax Consultancy</strong>: Interpretation of UAE tax laws and development of effective tax strategies.</li>
                        <li><strong>VAT Refund Claims</strong>: Assistance in claiming input VAT refunds, with full documentation support.</li>
                        <li><strong>Tax Compliance & Optimization</strong>: Corporate tax filing, residency certificates, and liability reduction.</li>
                        <li><strong>Audit & Dispute Support</strong>: Documentation and representation in case of audits or disputes.</li>
                    </ul>
                    <h3>Why VAT & Tax Services Matter</h3>
                    <ul>
                        <li>Full legal compliance</li>
                        <li>Accurate reporting and filings</li>
                        <li>Strong audit preparation</li>
                        <li>Time and cost efficiency</li>
                        <li>Confidence in every transaction</li>
                    </ul>
                    <h3>Essential Documents Required</h3>
                    <ul>
                        <li>Financial Statements – Income, expense, and balance details</li>
                        <li>Invoices & Receipts – For accurate VAT input/output calculations</li>
                        <li>Bank Statements – To reconcile transactions</li>
                        <li>Business Documents – Trade license, MoA, and registration certificates</li>
                        <li>Identification – Passport and Emirates ID copies for verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.includes.consultation-box')

@endsection