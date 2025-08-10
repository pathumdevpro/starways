@php
$id = 'blog-details';
$title = 'Blog Details';
@endphp

@extends('components.layouts.base')
@section('content')

<div id="Top" style="background-image:url({{ Storage::url('articles/' . $blog->image) }})"
    class="utility-hero">
    <div style="display:block" class="on-load-bg"></div>
</div>
<div class="content-bg">
    <div id="Intro" class="content-section page-offset">
        <div class="content-wrapper w-container">
            <div class="narrow-wrapper">
                <div data-w-id="b4538ced-b465-9248-a217-accd137f339f" class="heading-box bottom-line"><a
                        href="#" class="cateogry-link">Updates</a>
                </div>
                <div class="rich-text-blog w-richtext">
                    <x-markdown>{{ $blog->content }}</x-markdown>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section padding">
        <div class="content-wrapper w-container">
            <div class="heading-box bottom-line">
                <div class="all-caps-title">updates</div>
                <h4 class="h4">Our Latest News</h4>
                <div class="divider-line"></div>
            </div>
            <div class="w-dyn-list">
                <div role="list" class="flex w-dyn-items">
                    @forelse ($blogs as $blog)
                    <div role="listitem" class="posts-preview w-dyn-item">
                        <div>
                            <div class="relative-auto">
                                <a data-w-id="506eced1-f582-4c4d-74fb-802b235bee14"
                                    href="{{ route('blogs.show', $blog) }}"
                                    class="preview-link-block w-inline-block"><img src="{{ asset('images/post-bg.jpg') }}"
                                        loading="lazy" width="560" alt="" />
                                    <div style="
                                background-image: url({{ Storage::url('articles/' . $blog->image) }});
                              " class="hover-image"></div>
                                    <div style="opacity: 0; display: flex" class="hover-overlay">
                                        <div style="
                                  display: none;
                                  -webkit-transform: translate3d(0, 13px, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -moz-transform: translate3d(0, 13px, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  -ms-transform: translate3d(0, 13px, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  transform: translate3d(0, 13px, 0)
                                    scale3d(1, 1, 1) rotateX(0) rotateY(0)
                                    rotateZ(0) skew(0, 0);
                                  opacity: 0;
                                " class="button white">
                                            Read more
                                        </div>
                                    </div>
                                </a>
                                <!-- <a data-w-id="0311d12f-5a81-22f4-14c0-a84b45e20eec" style="opacity: 0"
                                          href="#" class="category-link">Updates</a> -->
                            </div>
                            <div class="preview-text-container">
                                <div class="preview-link-box">
                                    <a href="{{ route('blogs.show', $blog) }}"
                                        class="preview-link">{{ Str::limit($blog->title, 45) }}</a>
                                </div>
                                <div class="paragraph-box">
                                    <p class="paragraph-medium">
                                        {{ Str::limit($blog->content, 110) }}
                                    </p>
                                </div>
                                <div class="text-link-box">
                                    <a data-w-id="ae086839-6e9b-f652-d0ec-6165306f222b"
                                        href="{{ route('blogs.show', $blog) }}"
                                        class="text-link-block w-inline-block">
                                        <div class="right-margin">Learn more</div>
                                        <div class="circle-arrow"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="w-dyn-empty">
                        <div>There are no posts to show.</div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="button-box"><a href="#" class="button w-button">back to blog</a></div>
        </div>
    </div>

</div>

@endsection