<header id="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 d-xl-block d-none top-bar-left">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <span>{{$config->short_name_company}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5 top-bar-right top-bar-left">
                    <ul>
                        <li>
                            <a href="tel:{{str_replace(' ', '', $config->hotline)}}" title="tel:{{$config->hotline}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                    </path>
                                </svg>
                                <span>{{$config->hotline}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{$config->email}}" title="mailto:{{$config->email}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                    </path>
                                </svg>
                                <span>{{$config->email}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row-header" id="menu-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-6">
                    <a href="{{route('front.home-page')}}" class="logo" title="Logo">
                        <img width="100" height="55"
                            src="{{ $config->image->path ?? '' }}"
                            alt="{{$config->web_title}}" class="img-fluid" loading="lazy">
                    </a>
                </div>
                <div class="col-xl-8 col-12 header-menu">
                    <div class="header-menu-des">
                        <nav class="header-nav">
                            <div class="user-menu d-xl-none">
                            </div>
                            <ul class="item_big">
                                <li class="nav-item {{ Route::currentRouteName() == 'front.home-page' ? 'active' : ''}}">
                                    <a class="a-img" href="{{route('front.home-page')}}" title="Trang chủ">
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == 'front.about-us' ? 'active' : ''}}">
                                    <a class="a-img" href="{{route('front.about-us')}}" title="Giới thiệu">
                                        Giới thiệu
                                    </a>
                                </li>
                                <li class="nav-item {{ Route::currentRouteName() == 'front.show-product-list' ? 'active' : ''}}">
                                    <a class="a-img" href="{{route('front.show-product-list')}}" title="Sản phẩm">
                                        Sản phẩm
                                    </a>
                                </li>
                                @foreach ($postCategories as $postCategory)
                                    <li class="nav-item has-mega {{ Route::currentRouteName() == 'front.list-blog' && Route::current()->parameter('slug') == $postCategory->slug ? 'active' : '' }}">
                                        <a class="a-img {{ $postCategory->getChilds()->count() > 0 ? 'caret-down' : '' }}" href="{{route('front.list-blog', $postCategory->slug)}}" title="{{ $postCategory->name }}">
                                            {{ $postCategory->name }}
                                        </a>
                                        @if ($postCategory->getChilds()->count() > 0)
                                        <i class="fa fa-caret-down"></i>
                                        <div class="mega-content d-xl-block d-none">
                                            <div class="container">
                                                <ul class="level0">
                                                    @foreach ($postCategory->getChilds() as $child)
                                                    <li class="level1 parent item fix-navs "
                                                        data-title="{{ $child->name }}"
                                                        data-link="{{route('front.list-blog', $child->slug)}}">
                                                        <a class="hmega" href="{{route('front.list-blog', $child->slug)}}"
                                                            title="{{ $child->name }}">{{ $child->name }}</a>
                                                        {{-- <ul class="level1">
                                                            <li class="level2 ">
                                                                <a href="/vitamin-khoang-chat"
                                                                    title="Vitamin & Khoáng chất">Vitamin & Khoáng
                                                                    chất</a>
                                                            </li>
                                                        </ul> --}}
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="item_small d-lg-none d-block">
                                            @foreach ($postCategory->getChilds() as $child)
                                            <li>
                                                <a class="caret-down" href="{{route('front.list-blog', $child->slug)}}"
                                                    title="{{ $child->name }}">{{ $child->name }}</a>
                                                {{-- <i class="fa fa-caret-down"></i>
                                                <ul>
                                                    <li>
                                                        <a href="/vitamin-khoang-chat" title="Vitamin & Khoáng chất"
                                                            class="a3">Vitamin & Khoáng chất</a>
                                                    </li>
                                                </ul> --}}
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                @endforeach
                                <li class="nav-item {{ Route::currentRouteName() == 'front.contact-us' ? 'active' : ''}}">
                                    <a class="a-img" href="{{route('front.contact-us')}}" title="Liên hệ">
                                        Liên hệ
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="control-menu">
                            <a href="#" id="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#000"
                                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                </svg>
                            </a>
                            <a href="#" id="next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#000"
                                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-12 col-12 search-header">
                    <div class="search-smart">
                        <form action="{{ route('front.search') }}" method="get" class="search-form header-search-form" role="search">
                            <input type="text" name="keyword" required
                                class="input-group-field auto-search search-auto form-control"
                                placeholder="Nhập tên sản phẩm..." autocomplete="off">
                            <button class="btn btn-default" type="submit" aria-label="Tìm kiếm">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                    class="icon-search" aria-hidden="true" focusable="false" role="presentation"
                                    width="22.468" height="22.4">
                                    <defs>
                                        <symbol id="icon-search" viewBox="0 0 22.468 22.4">
                                            <path id="search"
                                                d="M21.7,20.405l-5.464-5.464a9.169,9.169,0,1,0-1.294,1.294L20.405,21.7A.915.915,0,1,0,21.7,20.405ZM9.152,16.475a7.324,7.324,0,1,1,7.324-7.324A7.324,7.324,0,0,1,9.152,16.475Z"
                                                transform="translate(0.232 0.232)" stroke-width="0.4px"></path>
                                        </symbol>
                                    </defs>
                                    <use href="#icon-search"></use>
                                </svg>
                            </button>
                            {{-- <div class="search-suggest">
                                <div class="list-search list-search-style">
                                </div>
                                <div class="list-search2 list-search-style">
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
                <div class="col-xl-0 col-lg-3 col-6 header-control">
                    <ul class="ul-control">
                        <li class="menu-bar d-none">
                            <svg height="24px" version="1.1" viewBox="0 0 24 24" width="24px"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title />
                                <desc />
                                <defs />
                                <g fill="none" fill-rule="evenodd" id="TabBar-Icons" stroke="none" stroke-width="1">
                                    <g fill="#fff" id="Hamburger-Round">
                                        <path
                                            d="M0,4 C0,2.8954305 0.889763236,2 2.00359486,2 L22.9964051,2 C24.10296,2 25,2.88772964 25,4 C25,5.1045695 24.1102368,6 22.9964051,6 L2.00359486,6 C0.897039974,6 0,5.11227036 0,4 L0,4 Z M0,12 C0,10.8954305 0.889763236,10 2.00359486,10 L22.9964051,10 C24.10296,10 25,10.8877296 25,12 C25,13.1045695 24.1102368,14 22.9964051,14 L2.00359486,14 C0.897039974,14 0,13.1122704 0,12 L0,12 Z M0,20 C0,18.8954305 0.889763236,18 2.00359486,18 L22.9964051,18 C24.10296,18 25,18.8877296 25,20 C25,21.1045695 24.1102368,22 22.9964051,22 L2.00359486,22 C0.897039974,22 0,21.1122704 0,20 L0,20 Z"
                                            id="Hamburger" />
                                    </g>
                                </g>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
