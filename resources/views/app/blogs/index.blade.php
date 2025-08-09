@php
$id = 'blogs';
$title = 'Blogs';
@endphp

@extends('components.layouts.base')
@section('content')

<div id="Top" class="w-dyn-list">
    <div role="list" class="w-dyn-items">
        <div role="listitem" class="hero-section-blog w-dyn-item">
            <div style="background-image:url(images/pexels-mikhail-nilov-8297031.jpg)"
                class="hero-image-scale"></div>
            <div class="overlay"></div>
            <div class="dark-on-scroll"></div>
            <div class="on-load-bg"></div>
            <div class="content-wrapper w-container">
                <div class="blog-hero-box">
                    <div><a href="/category/updates" class="cateogry-link white">Updates</a></div>
                    <div data-w-id="adcb5c8f-1390-e84e-bf86-9aba2f80907b" class="hidden"><a
                            href="/post/we-launch-corporatex-template-this-week" class="hero-link-title">We
                            Launch Corporatex Template this Week!</a></div>
                    <div class="max-600-pixels">
                        <p class="hero-subtitle center">You need a design that sets you apart from your
                            competitors don&#x27;t look average.</p>
                    </div>
                    <div class="hidden">
                        <div class="button-box"><a href="/post/we-launch-corporatex-template-this-week"
                                class="button white w-button">read post</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-bg">
    <div id="Intro" class="content-section top-margin">
        <div class="content-wrapper w-container">
            <div class="heading-box bottom-line">
                <h4 class="h4">Latest Updates</h4>
                <div class="divider-line"></div>
            </div>
            <div class="w-dyn-list">
                <div role="list" class="flex wrap w-dyn-items">
                    <div data-w-id="ca0dca68-3d73-d698-3909-0c995236a588"
                        style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        role="listitem" class="posts-grid w-dyn-item">
                        <div class="relative-auto"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a58a"
                                href="{{ route('blogs.show', ['blog' => 'build-a-top-business-plan-in-5-steps']) }}"
                                class="preview-link-block w-inline-block"><img src="images/post-bg.jpg"
                                    loading="lazy" width="560" alt="" />
                                <div style="background-image:url(&quot;images/rudy-dong-qrfpug2lgbq-unsplash.jpg&quot;)"
                                    class="hover-image"></div>
                                <div style="opacity:0;display:flex" class="hover-overlay">
                                    <div style="display:none;-webkit-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                        class="button white">Read more</div>
                                </div>
                            </a><a href="/category/strategy" class="category-link">Strategy</a></div>
                        <div class="preview-text-container">
                            <div class="preview-link-box"><a href="/post/how-to-find-great-consulting-experts"
                                    class="preview-link">How To Find Great Consulting Experts</a></div>
                            <div class="paragraph-box">
                                <p class="paragraph-medium">You need a design that sets you apart from your
                                    competitors don&#x27;t look average.</p>
                            </div>
                            <div class="text-link-box"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a597"
                                    href="/post/how-to-find-great-consulting-experts"
                                    class="text-link-block w-inline-block">
                                    <div class="right-margin">Learn more</div>
                                    <div class="circle-arrow"></div>
                                </a></div>
                        </div>
                    </div>
                    <div data-w-id="ca0dca68-3d73-d698-3909-0c995236a588"
                        style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        role="listitem" class="posts-grid w-dyn-item">
                        <div class="relative-auto"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a58a"
                                href="/post/build-a-top-business-plan-in-5-steps"
                                class="preview-link-block w-inline-block"><img src="images/post-bg.jpg"
                                    loading="lazy" width="560" alt="" />
                                <div style="background-image:url(&quot;images/pexels-vlada-karpovich-8367798.jpg&quot;)"
                                    class="hover-image"></div>
                                <div style="opacity:0;display:flex" class="hover-overlay">
                                    <div style="display:none;-webkit-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                        class="button white">Read more</div>
                                </div>
                            </a><a href="/category/updates" class="category-link">Updates</a></div>
                        <div class="preview-text-container">
                            <div class="preview-link-box"><a href="/post/build-a-top-business-plan-in-5-steps"
                                    class="preview-link">Build A Top Business Plan In 5 Steps</a></div>
                            <div class="paragraph-box">
                                <p class="paragraph-medium">You need a design that sets you apart from your
                                    competitors don&#x27;t look average.</p>
                            </div>
                            <div class="text-link-box"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a597"
                                    href="/post/build-a-top-business-plan-in-5-steps"
                                    class="text-link-block w-inline-block">
                                    <div class="right-margin">Learn more</div>
                                    <div class="circle-arrow"></div>
                                </a></div>
                        </div>
                    </div>
                    <div data-w-id="ca0dca68-3d73-d698-3909-0c995236a588"
                        style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        role="listitem" class="posts-grid w-dyn-item">
                        <div class="relative-auto"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a58a"
                                href="/post/7-problems-a-marketing-agency-can-solve"
                                class="preview-link-block w-inline-block"><img src="images/post-bg.jpg"
                                    loading="lazy" width="560" alt="" />
                                <div style="background-image:url(&quot;images/pexels-alena-darmel-7641900.jpg&quot;)"
                                    class="hover-image"></div>
                                <div style="opacity:0;display:flex" class="hover-overlay">
                                    <div style="display:none;-webkit-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                        class="button white">Read more</div>
                                </div>
                            </a><a href="/category/strategy" class="category-link">Strategy</a></div>
                        <div class="preview-text-container">
                            <div class="preview-link-box"><a
                                    href="/post/7-problems-a-marketing-agency-can-solve" class="preview-link">7
                                    Problems A Marketing Agency Can Solve</a></div>
                            <div class="paragraph-box">
                                <p class="paragraph-medium">You need a design that sets you apart from your
                                    competitors don&#x27;t look average.</p>
                            </div>
                            <div class="text-link-box"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a597"
                                    href="/post/7-problems-a-marketing-agency-can-solve"
                                    class="text-link-block w-inline-block">
                                    <div class="right-margin">Learn more</div>
                                    <div class="circle-arrow"></div>
                                </a></div>
                        </div>
                    </div>
                    <div data-w-id="ca0dca68-3d73-d698-3909-0c995236a588"
                        style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        role="listitem" class="posts-grid w-dyn-item">
                        <div class="relative-auto"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a58a"
                                href="/post/5-proven-tips-to-increase-your-net-income"
                                class="preview-link-block w-inline-block"><img src="images/post-bg.jpg"
                                    loading="lazy" width="560" alt="" />
                                <div style="background-image:url(&quot;images/pexels-alena-darmel-7641920.jpg&quot;)"
                                    class="hover-image"></div>
                                <div style="opacity:0;display:flex" class="hover-overlay">
                                    <div style="display:none;-webkit-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                        class="button white">Read more</div>
                                </div>
                            </a><a href="/category/updates" class="category-link">Updates</a></div>
                        <div class="preview-text-container">
                            <div class="preview-link-box"><a
                                    href="/post/5-proven-tips-to-increase-your-net-income"
                                    class="preview-link">5 Proven Tips To Increase Your Net Income</a></div>
                            <div class="paragraph-box">
                                <p class="paragraph-medium">You need a design that sets you apart from your
                                    competitors don&#x27;t look average.</p>
                            </div>
                            <div class="text-link-box"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a597"
                                    href="/post/5-proven-tips-to-increase-your-net-income"
                                    class="text-link-block w-inline-block">
                                    <div class="right-margin">Learn more</div>
                                    <div class="circle-arrow"></div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination"></div>
            </div>
        </div>
    </div>

</div>

@endsection