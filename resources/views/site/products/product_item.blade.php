<div class="item_product_main">
    <form class="variants product-action " enctype="multipart/form-data">
        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
                href="{{ route('front.show-product-detail', $product->slug) }}"
                title="{{ $product->name }}">
                <img class="lazyload" width="234" height="234"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
                    data-src="{{ $product->image ? $product->image->path : '' }}"
                    alt="{{ $product->name }}">
            </a>
        </div>
        <div class="product-info">
            <h3 class="product-name"><a href="{{ route('front.show-product-detail', $product->slug) }}"
                    title="{{ $product->name }}">{{ $product->name }}</a></h3>
            <div class="intro-box">
                {!! $product->intro !!}
            </div>
        </div>
    </form>
</div>
