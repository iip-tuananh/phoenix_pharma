@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ $product->short_des }}
@endsection

@section('css')
<link href="/site/css/breadcrumb_style.scss.css?1733450871715" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/product_style.scss.css?1733450871715" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 30 30"><path d="M22.496 11.355L11.77.184a.602.602 0 0 0-.868 0L.184 11.355a.648.648 0 0 0-.176.625c.054.23.226.407.441.465a.604.604 0 0 0 .606-.183l1.828-1.907V22.2c0 .356.277.64.617.64h5.172c.34 0 .617-.284.617-.64v-7.398h4.106v7.398c0 .356.277.64.617.64h5.172c.34 0 .617-.284.617-.64V10.355l1.828 1.907a.6.6 0 0 0 .871 0 .664.664 0 0 0 0-.907zM8.051 14.16v7.399H4.105V9.07l7.23-7.527 7.227 7.527v12.485h-3.945V14.16a.626.626 0 0 0-.613-.64H8.668a.626.626 0 0 0-.613.64zm0 0"></path></svg>
                        <strong><span>Trang chủ</span></strong>
                    </a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><span>{{ $product->name }}</span></li>
            </ul>
        </div>
    </section>
    <section class="product layout-product" ng-controller="ProductController">
        <div class="container">
            <div class="details-product">
                <div class="product-info">
                    <div class="row">
                        <div class="product-detail-left product-images col-12 col-md-12 col-lg-6 col-xl-6 col-left">
                            <div class="product-image-block relative">
                                <div class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->galleries as $key => $item)
                                        <a class="swiper-slide"
                                            href="{{ $item->image->path }}"
                                            title="Click để xem">
                                            <img height="540" width="540"
                                                src="{{ $item->image->path }}"
                                                alt="{{$product->name}}"
                                                class="img-responsive mx-auto d-block lazy"/>
                                        </a>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next">
                                    </div>
                                    <div class="swiper-button-prev">
                                    </div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->galleries as $key => $item)
                                        <div class="swiper-slide">
                                            <div class="p-100">
                                                <img src="{{ $item->image->path }}"
                                                    alt="{{$product->name}}"
                                                    class="lazy"/>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-next">
                                    </div>
                                    <div class="swiper-button-prev">
                                    </div>
                                </div>
                                <script>
                                    var galleryThumbs = new Swiper('.gallery-thumbs', {
                                        spaceBetween: 4,
                                        slidesPerView: 10,
                                        freeMode: true,
                                        lazy: true,
                                        watchSlidesVisibility: true,
                                        watchSlidesProgress: true,
                                        hashNavigation: true,
                                        slideToClickedSlide: true,
                                        breakpoints: {
                                            300: {
                                                slidesPerView: 3,
                                                spaceBetween: 10,
                                            },
                                            500: {
                                                slidesPerView: 3,
                                                spaceBetween: 10,
                                            },
                                            640: {
                                                slidesPerView: 3,
                                                spaceBetween: 10,
                                            },
                                            768: {
                                                slidesPerView: 4,
                                                spaceBetween: 10,
                                            },
                                            1024: {
                                                slidesPerView: 4,
                                                spaceBetween: 10,
                                            },
                                            1199: {
                                                slidesPerView: 4,
                                                spaceBetween: 10,
                                            },
                                        },
                                        navigation: {
                                            nextEl: '.gallery-thumbs .swiper-button-next',
                                            prevEl: '.gallery-thumbs .swiper-button-prev',
                                        },
                                    });
                                    var galleryTop = new Swiper('.gallery-top', {
                                        spaceBetween: 0,
                                        lazy: true,
                                        hashNavigation: true,
                                        thumbs: {
                                            swiper: galleryThumbs
                                        },
                                        navigation: {
                                            nextEl: '.gallery-top .swiper-button-next',
                                            prevEl: '.gallery-top .swiper-button-prev',
                                        },
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-right">
                            <div class="details-pro">
                                <h1 class="title-product">{{$product->name}}</h1>
                                <form id="add-to-cart-form" class="form-inline">
                                    <div class="form-product">
                                        <div class="clearfix form-group ">
                                            <div class="product-intro">
                                                {!! $product->intro !!}
                                            </div>
                                            <div class="flex-quantity" style="margin-top: 20px;">
                                                <div class="btn-mua button_actions clearfix">
                                                    <div class="group-button">
                                                        <a href="tel:{{ str_replace(' ', '', $config->hotline) }}"
                                                            class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">

                                                            <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                                                </path>
                                                            </svg>
                                                            Hotline/Zalo: {{ $config->hotline }}</span>
                                                        </a>
                                                        <style>
                                                            .btn-mua svg path {
                                                                fill: #fff;
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab e-tabs not-dqtab">
                    <ul class="tabs tabs-title clearfix">
                        <li class="tab-link current" data-tab="tab-1">
                            <span>Chi tiết sản phẩm</span>
                        </li>
                    </ul>
                    <div class="tab-1 tab-content content_extab current">
                        <div class="rte product_getcontent">
                            <div class="ba-text-fpt">
                                {!! $product->body !!}
                            </div>
                            <div class="show-more d-none">
                                <div class="btn btn-default btn--view-more">
                                    <span class="more-text">Xem thêm <i class="fa fa-chevron-down"></i></span>
                                    <span class="less-text">Thu gọn <i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="productRelate">
                <div class="block-title">
                    <h2>
                        <a href="{{ route('front.show-product-list') }}" title="Sản phẩm cùng loại">Sản phẩm cùng loại</a>
                    </h2>
                </div>
                <div class="margin-am">
                    <div class="product-relate-swiper swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($productsRelated as $item)
                            <div class="swiper-slide">
                                @include('site.products.product_item', ['product' => $item])
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.tabs-title li').on('click', function(e) {
                $('.tabs-title li, .tab-content').removeClass('current');
                $(this).addClass('current');
                $('.'+$(this).data('tab')+'').addClass('current');

                var active = $(this);
                var left = active.position().left;
                var currScroll = $(this).parent('.tabs-title').scrollLeft();
                var contWidth = $(this).parent('.tabs-title').width() / 2;
                var activeOuterWidth = active.outerWidth() / 2;
                left = left + currScroll - contWidth + activeOuterWidth;

                $(this).parent('.tabs-title').animate({
                    scrollLeft: left
                }, 'slow');
            });

            var swiper = new Swiper('.product-relate-swiper', {
                slidesPerView: 4,
                loop: false,
                grabCursor: true,
                spaceBetween: 30,
                roundLengths: true,
                slideToClickedSlide: false,
                navigation: {
                    nextEl: '.product-relate-swiper .swiper-button-next',
                    prevEl: '.product-relate-swiper .swiper-button-prev',
                },
                autoplay: false,
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    991: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    }
                }
            });

            setTimeout(function(){
                var ch = $('.product_getcontent').height(),
                    smore = $('.show-more');
                if(ch > 500) {
                    $('.ba-text-fpt').addClass('has-height');
                    smore.removeClass('d-none');
                }
            },200);
            $('.btn--view-more').on('click', function(e){
                e.preventDefault();
                var $this = $(this);
                $this.parents('.tab-content').find('.product_getcontent').toggleClass('expanded');
                $('html, body').animate({ scrollTop: $('.product_getcontent').offset().top - 110 }, 'slow');
                $(this).toggleClass('active');
                return false;
            });
        </script>
    </section>
@endsection
@push('script')
@endpush
