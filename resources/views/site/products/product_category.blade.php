@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $title }}
@endsection
@section('css')
<link href="/site/css/breadcrumb_style.scss.css?1733450871715" rel="stylesheet" type="text/css" media="all" />
<link href="/site/css/style_page.scss.css?1733450871715" rel="stylesheet" type="text/css" media="all" />
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
            <li><span>{{ $title }}</span></li>
        </ul>
    </div>
</section>
<section class="page-about">
    <section class="core_values">
        <div class="container">
            @if (isset($title_sub))
            <div class="block-title" style="margin-bottom: 0;">
                <h2>
                    {{ $title_sub }}
                </h2>
            </div>
            @endif
            <div class="products-view-grid row">
                @foreach ($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6" style="margin-bottom: 32px;">
                    @include('site.products.product_item', ['product' => $product])
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 pagination-product">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
</section>
@endsection

@push('script')
@endpush
