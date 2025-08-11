@php
$id = 'index';
$title = 'Home';
@endphp

@extends('components.layouts.base')
@section('content')

<div id="Top" class="hero-top-bg">
    <div class="hero-image-scale services"></div>
    <div class="dark-on-scroll"></div>
    <div style="display: block" class="on-load-bg"></div>
    <div class="content-wrapper w-container">
        <div class="hero-inner-box">
            <div class="hero-inner-padding">
                <div class="max-540-pixels">
                    <div class="center-content">
                        <div style="display: flex" class="hidden">
                            <h1
                                style="
                        -webkit-transform: translate3d(0, 100%, 0)
                          scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                          skew(0, 0);
                        -moz-transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        -ms-transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                          rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                        opacity: 0;
                      "
                                class="hero-inner-text white">
                                Contact Us<span
                                    style="
                          -webkit-transform: translate3d(0, 100%, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -moz-transform: translate3d(0, 100%, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          -ms-transform: translate3d(0, 100%, 0)
                            scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                            skew(0, 0);
                          transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                            rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                          opacity: 0;
                        "
                                    class="hero-dot">.</span>
                            </h1>
                        </div>
                    </div>
                    <div style="display: flex" class="hidden">
                        <p
                            style="
                      -webkit-transform: translate3d(0, 100%, 0)
                        scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0)
                        skew(0, 0);
                      -moz-transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      -ms-transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      transform: translate3d(0, 100%, 0) scale3d(1, 1, 1)
                        rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                      opacity: 0;
                    "
                            class="hero-subtitle center">
                            Drop us your message
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#Intro" class="hero-link-block w-inline-block"></a>
</div>

<div class="content-bg">
    <div id="Intro" class="content-section offset-margin-visible">
        <div class="content-wrapper w-container">
            <div id="Reach-us" class="flex-contact-us">
                <div class="contact-right-side">
                    <div class="sticky">
                        <div>
                            <div
                                data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa941"
                                style="opacity: 0"
                                class="side-contact">
                                <div class="_5-pixels-margin">
                                    <h5 class="h5">Address</h5>
                                    <div class="answer">
                                        {{ env('APP_ADDRESS') }}
                                    </div>
                                </div>
                                <div class="_5-pixels-margin">
                                    <a
                                        href="https://maps.app.goo.gl/5skPJe9t3AkQioKi7"
                                        target="_blank"
                                        class="dark-link">View on Maps</a>
                                </div>
                                <div class="divider-line"></div>
                            </div>
                            <div class="side-contact">
                                <div
                                    data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa94e"
                                    style="opacity: 0"
                                    class="_5-pixels-margin _20-pixels">
                                    <h5 class="h5">Call Us</h5>
                                    <div class="_5-pixels-margin">
                                        <a href="#" class="dark-link">{{ env('APP_PHONE_01_DISPLAY') }}</a>
                                    </div>
                                    <div><a href="#" class="dark-link">{{ env('APP_PHONE_02_DISPLAY') }}</a></div>
                                </div>
                                <div class="divider-line"></div>
                            </div>
                            <div class="side-contact">
                                <div
                                    data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa959"
                                    style="opacity: 0"
                                    class="_5-pixels-margin _20-pixels">
                                    <h5 class="h5">Got a Question?</h5>
                                    <div class="_5-pixels-margin">
                                        <div class="answer">
                                            Drop us an email and we’ll be in touch asap.
                                        </div>
                                    </div>
                                    <div class="_5-pixels-margin _5-pixels">
                                        <a href="#" class="dark-link">{{ env('APP_EMAIL_ADDRESS') }}</a>
                                    </div>
                                </div>
                                <div class="divider-line"></div>
                            </div>
                            <div class="side-contact">
                                <div
                                    data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa964"
                                    style="opacity: 0"
                                    class="_5-pixels-margin _20-pixels">
                                    <h5 class="h5">Follow Us</h5>
                                    <div class="_5-pixels-margin">
                                        <a
                                            data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa968"
                                            href="#"
                                            target="_blank"
                                            class="social-icon-colored facebook w-inline-block">
                                            <div class="social-icons-container">
                                                <div class="social-icon-up facebook"></div>
                                                <div
                                                    class="social-icon-down facebook"></div>
                                            </div>
                                        </a><a
                                            data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa96c"
                                            href="#"
                                            target="_blank"
                                            class="social-icon-colored twittter w-inline-block">
                                            <div class="social-icons-container">
                                                <div class="social-icon-up twitter"></div>
                                                <div
                                                    class="social-icon-down twitter"></div>
                                            </div>
                                        </a><a
                                            data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa970"
                                            href="#"
                                            target="_blank"
                                            class="social-icon-colored instagram w-inline-block">
                                            <div class="social-icons-container">
                                                <div class="social-icon-up instagram"></div>
                                                <div
                                                    class="social-icon-down instagram"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-right">
                    <div
                        data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa975"
                        style="opacity: 0"
                        class="left-heading-box">
                        <div>
                            <h2 class="h2 no-top-margin">Prefer to write to us?</h2>
                            <div>
                                <p class="subtitle">
                                    Fill out the form below and our team will get back to you as soon as possible.
                                </p>
                            </div>
                        </div>
                        <div class="divider-line"></div>
                    </div>
                    <div class="contact-form w-form">

                        @if(session('success'))
                        <div style="padding:15px; background:#d4edda; color:#155724; border-radius:5px; margin-bottom:15px;">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div style="padding:15px; background:#f8d7da; color:#721c24; border-radius:5px; margin-bottom:15px;">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div style="padding:15px; background:#fff3cd; color:#856404; border-radius:5px; margin-bottom:15px;">
                            <strong>Please fix the following:</strong>
                            <ul style="margin:5px 0 0 20px;">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form
                            action="{{ route('contact.mail') }}"
                            method="post"
                            name="wf-form-Contact-Form"
                            data-name="Contact Form"
                            style="opacity: 0"
                            data-w-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa97e"
                            id="email-form"
                            class="contact-form-flex"
                            data-wf-page-id="642b977704ea370b045dcd31"
                            data-wf-element-id="6b239ec0-ec7b-ce86-b0ee-26fa7abfa97e">
                            @method('post')
                            @csrf
                            <div class="flex-space-full no-top-margin">
                                <input
                                    class="field w-input"
                                    maxlength="256"
                                    name="name"
                                    data-name="Name"
                                    placeholder="Your name"
                                    type="text"
                                    id="field"
                                    required="" />
                                <input
                                    class="field w-input"
                                    maxlength="256"
                                    name="service"
                                    data-name="The service/s you are looking for"
                                    placeholder="The service/s you are looking for"
                                    type="text"
                                    id="field"
                                    required="" />
                            </div>
                            <div class="flex-space-full">
                                <input
                                    class="field w-input"
                                    maxlength="256"
                                    name="email"
                                    data-name="Email"
                                    placeholder="Email"
                                    type="email"
                                    id="field"
                                    required="" />
                                <input
                                    class="field w-input"
                                    maxlength="256"
                                    name="phone"
                                    data-name="Mobile"
                                    placeholder="Mobile"
                                    type="tel"
                                    id="field"
                                    required="" />
                            </div>
                            <textarea
                                name="message"
                                maxlength="5000"
                                data-name="Message"
                                placeholder="Your message..."
                                id="field"
                                class="textarea w-input"></textarea>
                            <input
                                type="submit"
                                data-wait="Please wait..."
                                class="submit w-button"
                                value="Submit" />
                        </form>
                        <div class="success-message w-form-done">
                            <img
                                src="images/comment-20-1-.png"
                                loading="lazy"
                                width="35"
                                alt="" />
                            <div class="_5-pixels-margin">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                        </div>
                        <div class="error-message-contact w-form-fail">
                            <div>
                                Oops! Something went wrong while submitting the form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@if(session('success') || session('error'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const introSection = document.getElementById("Intro");
        if (introSection) {
            introSection.scrollIntoView({
                behavior: "smooth"
            });
        }
    });
</script>
@endif

@endsection