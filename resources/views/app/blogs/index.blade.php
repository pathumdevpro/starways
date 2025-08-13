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
                    <div><a href="#" class="cateogry-link white">Updates</a></div>
                    <div data-w-id="adcb5c8f-1390-e84e-bf86-9aba2f80907b" class="hidden"><a
                            href="/post/we-launch-corporatex-template-this-week" class="hero-link-title">
                                Latest news and updates
                        </a></div>
                    <div class="max-600-pixels">
                        <p class="hero-subtitle center">
                            Read latest news and updates from our Star Way LLC team and our clients around the world.
                        </p>
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
                    @forelse ($blogs as $blog)
                    <div data-w-id="ca0dca68-3d73-d698-3909-0c995236a588"
                        style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                        role="listitem" class="posts-grid w-dyn-item">
                        <div class="relative-auto"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a58a"
                                href="{{ route('blogs.show', $blog) }}"
                                class="preview-link-block w-inline-block"><img src="images/post-bg.jpg"
                                    loading="lazy" width="560" alt="" />
                                <div style="background-image:url({{ Storage::url('articles/' . $blog->image) }})"
                                    class="hover-image"></div>
                                <div style="opacity:0;display:flex" class="hover-overlay">
                                    <div style="display:none;-webkit-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 13px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                                        class="button white">Read more</div>
                                </div>
                            </a>
                            <!-- <a href="/category/strategy" class="category-link">Strategy</a> -->
                        </div>
                        <div class="preview-text-container">
                            <div class="preview-link-box"><a href="{{ route('blogs.show', $blog) }}"
                                    class="preview-link">{{ Str::limit($blog->title, 45) }}</a></div>
                            <div class="paragraph-box">
                                <p class="paragraph-medium">{{ Str::limit($blog->content, 110) }}</p>
                            </div>
                            <div class="text-link-box"><a data-w-id="ca0dca68-3d73-d698-3909-0c995236a597"
                                    href="{{ route('blogs.show', $blog) }}"
                                    class="text-link-block w-inline-block">
                                    <div class="right-margin">Learn more</div>
                                    <div class="circle-arrow"></div>
                                </a></div>
                        </div>
                    </div>
                    @empty
                    <div class="w-dyn-empty">
                        <div>There are no posts to show.</div>
                    </div>
                    @endforelse
                </div>
                <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination"></div>
            </div>
        </div>
    </div>

</div>

@endsection