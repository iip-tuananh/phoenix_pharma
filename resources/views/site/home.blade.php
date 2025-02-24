@extends('site.layouts.master')
@section('title')
{{$config->web_title}}
@endsection
@section('description')
{{$config->web_des}}
@endsection
@section('image')
{{url(''.$banners[0]->image->path)}}
@endsection
@section('css')
@endsection
@section('content')
<section class="section_slider">
    <div class="home-slider swiper-container gallery-top">
        <div class="swiper-wrapper">
            @foreach ($banners as $key => $banner)
            <div class="swiper-slide">
                <div class="slideshow-media">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="{{ $banner->image ? $banner->image->path : '' }}">
                        <source media="(min-width: 992px)"
                            srcset="{{ $banner->image ? $banner->image->path : '' }}">
                        <source media="(min-width: 500px)"
                            srcset="{{ $banner->image ? $banner->image->path : '' }}">
                        <source media="(max-width: 499px)"
                            srcset="{{ $banner->image ? $banner->image->path : '' }}">
                        <img width="1920" height="744"
                            src="{{ $banner->image ? $banner->image->path : '' }}"
                            alt="" class="img-fluid" loading="lazy"/>
                    </picture>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<script>
    var swiper = new Swiper('.home-slider', {
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.home-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.home-slider .swiper-button-next',
            prevEl: '.home-slider .swiper-button-prev',
        },
    });
</script>
<section class="section_product_tab">
    <div class="container">
        <div class="e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1" data-view="grid_4">
            <div class="content">
                <div class="block-title" style="margin-bottom: 0px;">
                    <h2>
                        <a href="{{ route('front.show-product-list') }}" title="Sản phẩm tiêu biểu">Sản phẩm tiêu biểu</a>
                        <span>Các sản phẩm tuyệt vời được thêm gần đây</span>
                    </h2>
                </div>
                <div class="tab-content">
                    <div class="contentfill" style="padding-top: 20px;">
                        <div class="products-view-grid row">
                            @foreach ($newProducts as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6" style="margin-bottom: 32px;">
                                @include('site.products.product_item', ['product' => $product])
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 text-center view-more-product">
                                <a href="{{ route('front.show-product-list') }}" class="btn btn-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_video">
    <div class="container">
        <div class="block-title">
            <h2>
                <a href="{{ route('front.index-blog') }}" title="Tin tức - Kiến thức">Tin tức - Kiến thức</a>
                <span>Tận tâm vì sức khỏe</span>
            </h2>
        </div>
        <div class="block-video relative">
            <div class="video-swiper swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($childCateBlogs as $childCateBlog)
                    <div class="swiper-slide">
                        <div class="item_blog_base block_video_play">
                            <a class="thumb video_play" href="{{ route('front.list-blog', $childCateBlog->slug) }}"
                                title="{{ $childCateBlog->name }}">
                                <div class="block-thumb">
                                    <div class="thumb"
                                        title="{{ $childCateBlog->name }}">
                                        <img style="height: 400px"
                                            src="{{ $childCateBlog->image ? $childCateBlog->image->path : '' }}"
                                            alt="{{ $childCateBlog->name }}"
                                            class="img-responsive" loading="lazy" />
                                    </div>
                                </div>
                                <div class="block-content">
                                    <h3 class="line-clamp">{{ $childCateBlog->name }}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<script>
    var swiperVideo = new Swiper('.video-swiper', {
        slidesPerView: 4,
        loop: false,
        grabCursor: true,
        spaceBetween: 30,
        roundLengths: true,
        slideToClickedSlide: false,
        autoplay: false,
        navigation: {
            nextEl: '.video-swiper .swiper-button-next',
            prevEl: '.video-swiper .swiper-button-prev',
        },
        pagination: {
            el: '.video-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });
</script>
<section class="section_blog">
    <div class="container">
        <div class="block-title">
            <h2>
                <a href="{{ route('front.index-blog') }}" title="Tin nổi bật">Tin nổi bật</a>
            </h2>
        </div>
        <div class="block-blog relative">
            <div class="blog-swiper swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($newBlogs as $blog)
                    <div class="swiper-slide">
                        <div class="item-blog">
                            <div class="block-thumb">
                                <a class="thumb"
                                    href="{{ route('front.detail-blog', $blog->slug) }}"
                                    title="{{ $blog->name }}">
                                    <img class="lazyload"
                                        src="//bizweb.dktcdn.net/100/493/552/themes/918106/assets/lazy.png?1733450871715"
                                        data-src="{{ $blog->image ? $blog->image->path : '' }}"
                                        alt="{{ $blog->name }}">
                                </a>
                                <div class="time-post badge">
                                    {{ $blog->created_at->format('d/m/Y') }}
                                </div>
                            </div>
                            <div class="block-content">
                                <h3><a href="{{ route('front.detail-blog', $blog->slug) }}"
                                        title="{{ $blog->name }}">{{ $blog->name }}</a></h3>
                                <div class="article-content">
                                    {{ $blog->intro }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
<script>
    var swiperBlog = new Swiper('.blog-swiper', {
        slidesPerView: 3,
        loop: false,
        grabCursor: true,
        spaceBetween: 30,
        roundLengths: true,
        slideToClickedSlide: false,
        autoplay: false,
        navigation: {
            nextEl: '.block-blog .swiper-button-next',
            prevEl: '.block-blog .swiper-button-prev',
        },
        pagination: {
            el: '.blog-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });

</script>
@endsection
@push('script')
@endpush
