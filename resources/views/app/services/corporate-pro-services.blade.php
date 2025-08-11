@php
$id = 'corporate-pro-services';
$title = 'Corporate Pro Services';
@endphp

@extends('components.layouts.base')
@section('content')

<div
    id="Top"
    style="background-image: url({{ $cms[14]->content && Storage::exists('cms/' . $cms[14]->content) 
    ? Storage::url('cms/' . $cms[14]->content) 
    : asset($cms[14]->image) }})"
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
                    <x-markdown>{{ $cms[6]->content }}</x-markdown>
                    <div class="bottom-line-2"></div>
                    <div class="bottom-line-2"></div>
                </div>
                <div class="w-richtext">
                    <h3><x-markdown>{{ $cms[7]->content }}</x-markdown></h3>
                    <x-markdown>{{ $cms[8]->content }}</x-markdown>
                    <h3><x-markdown>{{ $cms[9]->content }}</x-markdown></h3>
                    <x-markdown>{{ $cms[10]->content }}</x-markdown>
                    <h3><x-markdown>{{ $cms[11]->content }}</x-markdown></h3>
                    <x-markdown>{{ $cms[12]->content }}</x-markdown>
                    <x-markdown>{{ $cms[13]->content }}</x-markdown>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.includes.consultation-box')

@endsection