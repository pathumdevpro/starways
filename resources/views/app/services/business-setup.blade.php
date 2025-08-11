@php
$id = 'business-setup';
$title = 'Business Setup';
@endphp

@extends('components.layouts.base')
@section('content')

<div
  id="Top"
  style="background-image: url({{ Storage::exists('cms/' . $cms[16]->image) ? Storage::url('cms/' . $cms[16]->image) : asset($cms[16]->image) }})"
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
            <div class="side-title"><x-markdown>{{ $cms[0]->content }}</x-markdown></div>
            <div class="contact-details-box">
              <div class="text-gray w-richtext">
                <x-markdown>{{ $cms[1]->content }}</x-markdown>
              </div>
            </div>
            <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
          </div>

          <div class="side-block">
            <div class="side-title"><x-markdown>{{ $cms[2]->content }}</x-markdown></div>
            <div class="contact-details-box">
              <div class="text-gray w-richtext">
                <x-markdown>{{ $cms[3]->content }}</x-markdown>
              </div>
            </div>
            <div class="divider-line" style="transform: translate3d(-101%, 0, 0) scale3d(1, 1, 1);"></div>
          </div>
        </div>
      </div>
      <div class="utility-right">
        <div class="post-heading-box">
          <div class="all-caps-title"><x-markdown>{{ $cms[4]->content }}</x-markdown></div>
          <h1 class="less-top-margin _10-pixels"><x-markdown>{{ $cms[5]->content }}</x-markdown></h1>
          <p><x-markdown>{{ $cms[6]->content }}</x-markdown></p>
          <div class="bottom-line-2"></div>
          <div class="bottom-line-2"></div>
        </div>
        <div class="w-richtext">
          <h3><x-markdown>{{ $cms[7]->content }}</x-markdown></h3>
          <p><x-markdown>{{ $cms[8]->content }}</x-markdown></p>
          <h3><x-markdown>{{ $cms[9]->content }}</x-markdown></h3>
          <p><x-markdown>{{ $cms[10]->content }}</x-markdown></p>
          <h4><x-markdown>{{ $cms[11]->content }}</x-markdown></h4>
          <p><x-markdown>{{ $cms[12]->content }}</x-markdown></p>
          <h3><x-markdown>{{ $cms[13]->content }}</x-markdown></h3>
          <p><x-markdown>{{ $cms[14]->content }}</x-markdown></p>
          <x-markdown>{{ $cms[15]->content }}</x-markdown>
        </div>
      </div>
    </div>
  </div>
</div>

@include('components.includes.consultation-box')

<!-- <div class="content-section padding services-pg-section">
  <div class="content-wrapper w-container">
    <div class="heading-box bottom-line">
      <div class="all-caps-title">More</div>
      <h4 class="h4">Latest Services</h4>
      <div class="divider-line"></div>
    </div>
    <div class="w-dyn-list">
      <div role="list" class="flex-services w-dyn-items">
        <div role="listitem" class="services-grid no-margin w-dyn-item">
          <a
            data-w-id="5d2b56eb-5417-1d85-af79-a320eb982304"
            style="
                      -webkit-transform: translate3d(0, 40px, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      opacity: 0;
                    "
            href="/services/wealth-management"
            class="link-block w-inline-block"><img
              src="../images/services-bg.jpg"
              loading="lazy"
              width="526.5"
              sizes="(max-width: 479px) 86vw, (max-width: 1279px) 43vw, 526.5px"
              alt=""
              srcset="
                        ../images/services-bg-p-500.jpg  500w,
                        ../images/services-bg-p-800.jpg  800w,
                        ../images/services-bg.jpg       1053w
                      " />
            <div
              style="
                        background-image: url('../images/pexels-august-de-richelieu-4428046.jpg');
                      "
              class="hover-image"></div>
            <div
              style="opacity: 0; display: flex"
              class="hover-overlay">
              <div
                style="
                          display: none;
                          -webkit-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -moz-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -ms-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          transform: translate3d(0, 13px, 0) scale3d(1, 1, 1)
                            rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                          opacity: 0;
                        "
                class="button white">
                view service
              </div>
            </div>
          </a>
          <div
            data-w-id="5d2b56eb-5417-1d85-af79-a320eb98230a"
            style="
                      -webkit-transform: translate3d(0, 40px, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      opacity: 0;
                    "
            class="services-text-box">
            <a href="/services/wealth-management" class="preview-link">Wealth Management</a>
            <div class="paragraph-box">
              <p class="paragraph-medium">
                Build a unique Website with Corporatex Webflow Template
              </p>
            </div>
            <div class="text-link-box">
              <a
                data-w-id="5d2b56eb-5417-1d85-af79-a320eb98230f"
                href="/services/wealth-management"
                class="text-link-block w-inline-block">
                <div class="right-margin">Learn more</div>
                <div class="circle-arrow"></div>
              </a>
            </div>
          </div>
        </div>
        <div role="listitem" class="services-grid no-margin w-dyn-item">
          <a
            data-w-id="5d2b56eb-5417-1d85-af79-a320eb982304"
            style="
                      -webkit-transform: translate3d(0, 40px, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      opacity: 0;
                    "
            href="/services/taxes-and-accounting"
            class="link-block w-inline-block"><img
              src="../images/services-bg.jpg"
              loading="lazy"
              width="526.5"
              sizes="(max-width: 479px) 86vw, (max-width: 1279px) 43vw, 526.5px"
              alt=""
              srcset="
                        ../images/services-bg-p-500.jpg  500w,
                        ../images/services-bg-p-800.jpg  800w,
                        ../images/services-bg.jpg       1053w
                      " />
            <div
              style="
                        background-image: url('../images/pexels-mikhail-nilov-8296970.jpg');
                      "
              class="hover-image"></div>
            <div
              style="opacity: 0; display: flex"
              class="hover-overlay">
              <div
                style="
                          display: none;
                          -webkit-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -moz-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -ms-transform: translate3d(0, 13px, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          transform: translate3d(0, 13px, 0) scale3d(1, 1, 1)
                            rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                          opacity: 0;
                        "
                class="button white">
                view service
              </div>
            </div>
          </a>
          <div
            data-w-id="5d2b56eb-5417-1d85-af79-a320eb98230a"
            style="
                      -webkit-transform: translate3d(0, 40px, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(0, 40px, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      opacity: 0;
                    "
            class="services-text-box">
            <a
              href="/services/taxes-and-accounting"
              class="preview-link">Taxes and Accounting</a>
            <div class="paragraph-box">
              <p class="paragraph-medium">
                Build a unique Website with Corporatex Webflow Template
              </p>
            </div>
            <div class="text-link-box">
              <a
                data-w-id="5d2b56eb-5417-1d85-af79-a320eb98230f"
                href="/services/taxes-and-accounting"
                class="text-link-block w-inline-block">
                <div class="right-margin">Learn more</div>
                <div class="circle-arrow"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="button-box left-padding">
      <a href="/services" class="button-filled w-button">back to Services</a>
    </div>
  </div>
</div> -->

@endsection