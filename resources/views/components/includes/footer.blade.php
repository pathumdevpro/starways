@php
    $footerClass = Route::is('services.*') ? 'mt--40' : '';
@endphp
<div class="footer {{ $footerClass }}">
    <div class="footer-1440-pixels">
        <div>
            <div data-w-id="4dfc4cd8-8631-d45b-15ff-d9e617ce244c" class="footer-container">
                <div class="footer-column">
                    <a href="/" aria-current="page" class="footer-branding w-inline-block w--current">
                        <img src="{{ asset('images/starway-logo.svg') }}" width="200" alt="Company Logo" />
                    </a>
                </div>
                <div class="footer-expand middle">
                    <div class="menu">
                        <div class="footer-title">Our services</div>
                        <div>
                            <div class="footer-top-margin first">
                                <a href="{{ route('services.business-setup') }}" class="footer-menu-link w-inline-block">
                                    <div>Business Setup</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                            <div class="footer-top-margin">
                                <a href="{{ route('services.company-registration-mainland') }}" class="footer-menu-link w-inline-block">
                                    <div>Mainland Company Registration</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                            <div class="footer-top-margin">
                                <a href="{{ route('services.company-registration-freezone') }}" class="footer-menu-link w-inline-block">
                                    <div>Freezone Company Registration</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                            <div class="footer-top-margin">
                                <a href="{{ route('services.office-flexi-desk-arrangement') }}" class="footer-menu-link w-inline-block">
                                    <div>Flexi Desk Solutions</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                            <div class="footer-top-margin">
                                <a href="{{ route('services.corporate-pro-services') }}" class="footer-menu-link w-inline-block">
                                    <div>Corporate PRO Services</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                            <div class="footer-top-margin">
                                <a href="{{ route('services.uae-golden-visa') }}" class="footer-menu-link w-inline-block">
                                    <div>UAE Golden Visa</div>
                                    <div class="footer-underline"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="menu">
                        <div class="footer-title">Quick links</div>
                        <div class="footer-top-margin first">
                            <a href="{{ route('services.corporate-tax-registration') }}" class="footer-menu-link w-inline-block">
                                <div>Corporate Tax Registration</div>
                            </a>
                        </div>
                        <div class="footer-top-margin">
                            <a href="{{ route('services.tax-and-vat') }}" class="footer-menu-link w-inline-block">
                                <div>Tax & VAT Services</div>
                            </a>
                        </div>
                        <div class="footer-top-margin">
                            <a href="/property-consulting" class="footer-menu-link w-inline-block">
                                <div>Property Consulting</div>
                            </a>
                        </div>
                        <div class="footer-top-margin">
                            <a href="{{ route('services.the-will') }}" class="footer-menu-link w-inline-block">
                                <div>Estate Planning & Wills</div>
                            </a>
                        </div>
                        <div class="footer-top-margin">
                            <a href="{{ route('blogs.index') }}" class="footer-menu-link w-inline-block">
                                <div>Blog & News</div>
                            </a>
                        </div>
                        <div class="footer-top-margin">
                            <a href="{{ route('contact.index') }}" class="footer-menu-link w-inline-block">
                                <div>Contact Us</div>
                            </a>
                        </div>
                    </div>

                    <div class="menu _44-percent">
                        <div>
                            <div class="footer-title">Contact information</div>
                            <div class="footer-top-margin">
                                <div class="footer-text-medium">
                                    {{ env('APP_ADDRESS') }}
                                </div>
                                <div>
                                    <a href="https://maps.app.goo.gl/5skPJe9t3AkQioKi7" target="_blank" class="dark-link">View on Maps</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-top-margin _20-pixels">
                            <div class="footer-title">Get in touch</div>
                            <div class="footer-top-margin">
                                <a href="tel:{{ env('APP_PHONE_01') }}" class="dark-link">{{ env('APP_PHONE_01_DISPLAY') }}</a>
                                <br/>
                                <a href="tel:{{ env('APP_PHONE_02') }}" class="dark-link">{{ env('APP_PHONE_02_DISPLAY') }}</a>
                                <div>
                                    <a href="mailto:{{ env('APP_EMAIL_ADDRESS') }}" class="dark-link">{{ env('APP_EMAIL_ADDRESS') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsletter">
                    <div class="footer-title">Get a free consultation</div>
                    <div class="footer-top-margin">
                        <p>Schedule your free consultation today</p>
                    </div>
                    <div class="form-block w-form">
                        <form id="wf-form-Footer-Form" name="wf-form-Footer-Form" data-name="Footer Form"
                            method="get" class="form" data-wf-page-id="642b977704ea37fcf05dcce3"
                            data-wf-element-id="4dfc4cd8-8631-d45b-15ff-d9e617ce24c0">
                            <input class="text-field w-input" maxlength="256" name="email-2"
                                data-name="Email 2" placeholder="Your email address" type="email" id="field"
                                required="" /><input type="submit" data-wait="..."
                                class="submit-button w-button" value="" />
                        </form>
                        <div class="success-message w-form-done">
                            <img src="{{ asset('images/comment-20-1-.png') }}" loading="lazy" width="40" alt="Success icon"
                                class="center-icon" />
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message w-form-fail">
                            <div>
                                Oops! Something went wrong while submitting the form.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-line"></div>
            </div>
        </div>
        <div class="notice">
            <div class="notice-text">
                © 2025 PhyxleLoom. All rights reserved.
            </div>
        </div>
    </div>
</div>