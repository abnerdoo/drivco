<div>
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li style="text-transform: capitalize;">single-brand-category</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content"><span class="sub-title">Suzuki Brand</span>
                                <h1>Top các thương hiệu xe</h1>
                                <div class="customar-review">
                                    <ul>
                                        <li><a href="#">
                                                <div class="review-top">
                                                    <div class="logo"><img
                                                            src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                            alt=""></div>
                                                    <div class="star"><img
                                                            src="{{ asset('images/trustpilot-star.svg') }}"
                                                            alt=""></div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="review-top">
                                                    <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                            alt=""></div>
                                                    <div class="star">
                                                        <ul>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-fill"></i></li>
                                                            <li><i class="bi bi-star-half"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Trust Rating <span>5.0</span></li>
                                                        <li><span>2348</span> Reviews</li>
                                                    </ul>
                                                </div>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img"><img src="{{ asset('images/inner-banner-img.png') }}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-search-area mb-100">
            <div class="container">
                <form>
                    <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 justify-content-center">
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Thương hiệu xe</label>
                                <select class="nice-select" wire:model.live="brand">
                                    <option value="0" selected>-- Chọn thương hiệu --</option>
                                    @foreach ($brands as $key => $item)
                                        <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                            {{ $item->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Thương hiệu xe</label>
                                <select class="nice-select" wire:model="model">
                                    <option value="0" selected>-- Chọn dòng xe --</option>
                                    @if (isset($modelCars) && sizeof($modelCars) > 0)
                                        @foreach ($modelCars as $key => $item)
                                            <option value="{{ $item->id }}" wire.key={{ $item->id }}>
                                                {{ $item->model_name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-20">
                            <div class="form-inner">
                                <label>Khoảng giá</label>
                                <select class="nice-select" wire:model.live="price">
                                    <option value="0" selected>-- Chọn Khoảng giá --</option>
                                    <option value="0-{{ $min_price }}">0 VNĐ -
                                        {{ number_format($min_price, 0, '', ',') }} VNĐ</option>
                                    <option value="{{ $min_price }} - {{ $max_price }}">
                                        {{ number_format($min_price, 0, '', ',') }} VNĐ -
                                        {{ number_format($max_price, 0, '', ',') }} VNĐ</option>
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col">
                            <div class="form-inner"><label>Select Budget*</label>
                                <div class="nice-select" tabindex="0"><span class="current">1 - 5 lakh</span>
                                    <ul class="list">
                                        <li class="option selected focus" data-value="0">1 - 5 lakh</li>
                                        <li class="option" data-value="1">5 - 10 lakh</li>
                                        <li class="option" data-value="2">10 - 15 lakh</li>
                                        <li class="option" data-value="3">15 - 20 lakh</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-6 mb-20 d-flex align-items-end">
                            <div class="form-inner"><button class="primary-btn3" type="submit"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 14 14">
                                        <path
                                            d="M10.2746 9.04904C11.1219 7.89293 11.5013 6.45956 11.3371 5.0357C11.1729 3.61183 10.4771 2.30246 9.38898 1.36957C8.30083 0.436668 6.90056 -0.050966 5.46831 0.00422091C4.03607 0.0594078 2.67747 0.653346 1.66433 1.66721C0.651194 2.68107 0.0582276 4.04009 0.00406556 5.47238C-0.0500965 6.90466 0.43854 8.30458 1.37222 9.39207C2.30589 10.4795 3.61575 11.1744 5.03974 11.3376C6.46372 11.5008 7.89682 11.1203 9.05232 10.2722H9.05145C9.07769 10.3072 9.10569 10.3405 9.13719 10.3729L12.5058 13.7415C12.6699 13.9057 12.8924 13.9979 13.1245 13.998C13.3566 13.9981 13.5793 13.906 13.7435 13.7419C13.9076 13.5779 13.9999 13.3553 14 13.1232C14.0001 12.8911 13.908 12.6685 13.7439 12.5043L10.3753 9.13566C10.344 9.104 10.3104 9.07562 10.2746 9.04904ZM10.5004 5.68567C10.5004 6.31763 10.3759 6.9434 10.1341 7.52726C9.89223 8.11112 9.53776 8.64162 9.0909 9.08849C8.64403 9.53535 8.11352 9.88983 7.52967 10.1317C6.94581 10.3735 6.32003 10.498 5.68807 10.498C5.05611 10.498 4.43034 10.3735 3.84648 10.1317C3.26262 9.88983 2.73211 9.53535 2.28525 9.08849C1.83838 8.64162 1.48391 8.11112 1.24207 7.52726C1.00023 6.9434 0.875753 6.31763 0.875753 5.68567C0.875753 4.40936 1.38276 3.18533 2.28525 2.28284C3.18773 1.38036 4.41177 0.873346 5.68807 0.873346C6.96438 0.873346 8.18841 1.38036 9.0909 2.28284C9.99338 3.18533 10.5004 4.40936 10.5004 5.68567Z">
                                        </path>
                                    </svg>Search</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="single-category-page mb-100">
        <div class="container">
            <div class="row g-4 mb-40">
                @foreach ($cars as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6" wire:key="{{ $item->id }}">
                        <div class="product-card">
                            <div class="product-img"><a href="#" class="fav"><svg width="14" height="13"
                                        viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                        </path>
                                    </svg></a>
                                <div class="swiper product-img-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img
                                                src="{{ asset('/storage/' . $item->verhicle_image_library[0]) }}"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5><a href="/car-deatils">{{ $item->title }}</a></h5>
                                <div class="price-location">
                                    <div class="price"><strong>{{ number_format($item->price, 0, '', ',') }}
                                            VNĐ</strong></div>
                                    <div class="location"><a href="#"><i class="bi bi-geo-alt"></i>
                                            {{ $item->city->name }} </a>
                                    </div>
                                </div>
                                <div class="content-btm"><a class="view-btn2" href="/car-deatils"><svg width="35"
                                            height="21" viewBox="0 0 35 21" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 20C5.47715 20 1 15.7467 1 10.5C1 5.25329 5.47715 1 11 1"
                                                stroke-linecap="round"></path>
                                            <path
                                                d="M14.2597 3C14.1569 3 14.0583 3.04166 13.9856 3.11582C13.9129 3.18997 13.8721 3.29055 13.8721 3.39542C13.8721 3.50029 13.9129 3.60086 13.9856 3.67502C14.0583 3.74917 14.1569 3.79083 14.2597 3.79083H15.8104C15.9132 3.79083 16.0118 3.74917 16.0845 3.67502C16.1572 3.60086 16.198 3.50029 16.198 3.39542C16.198 3.29055 16.1572 3.18997 16.0845 3.11582C16.0118 3.04166 15.9132 3 15.8104 3H14.2597ZM16.7795 3C16.6767 3 16.5781 3.04166 16.5054 3.11582C16.4327 3.18997 16.3919 3.29055 16.3919 3.39542C16.3919 3.50029 16.4327 3.60086 16.5054 3.67502C16.5781 3.74917 16.6767 3.79083 16.7795 3.79083H21.3346C21.4374 3.79083 21.536 3.74917 21.6087 3.67502C21.6814 3.60086 21.7222 3.50029 21.7222 3.39542C21.7222 3.29055 21.6814 3.18997 21.6087 3.11582C21.536 3.04166 21.4374 3 21.3346 3H16.7795Z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.2292 5.76953C15.1264 5.76953 15.0278 5.81119 14.9551 5.88535C14.8824 5.9595 14.8415 6.06008 14.8415 6.16495C14.8415 6.26982 14.8824 6.3704 14.9551 6.44455C15.0278 6.51871 15.1264 6.56037 15.2292 6.56037H24.1454C25.653 6.56037 26.5822 6.79999 27.3256 7.18493C27.9575 7.51194 28.4672 7.9467 29.1055 8.49119C29.2375 8.60368 29.3749 8.72073 29.5201 8.84271L29.6101 8.91824L29.726 8.93069C33.2653 9.31069 34.0622 10.5309 34.2246 11.1557V12.6893C34.2246 12.7942 34.1838 12.8948 34.1111 12.9689C34.0384 13.0431 33.9398 13.0847 33.8369 13.0847H32.8356C32.6511 11.9627 31.6943 11.1077 30.5418 11.1077C29.3893 11.1077 28.4325 11.9627 28.248 13.0847H21.2058C21.0212 11.9627 20.0645 11.1077 18.912 11.1077C17.7594 11.1077 16.8027 11.9627 16.6182 13.0847H14.7446C14.6418 13.0847 14.5432 13.1264 14.4705 13.2006C14.3978 13.2747 14.3569 13.3753 14.3569 13.4802C14.3569 13.585 14.3978 13.6856 14.4705 13.7598C14.5432 13.8339 14.6418 13.8756 14.7446 13.8756H16.6182C16.8027 14.9976 17.7594 15.8527 18.912 15.8527C20.0645 15.8527 21.0212 14.9976 21.2058 13.8756H28.248C28.4325 14.9976 29.3893 15.8527 30.5418 15.8527C31.6943 15.8527 32.6511 14.9976 32.8356 13.8756H33.8369C34.1454 13.8756 34.4412 13.7506 34.6593 13.5281C34.8774 13.3057 34.9999 13.0039 34.9999 12.6893V11.0626L34.99 11.0187C34.7431 9.92754 33.5791 8.57502 29.9239 8.15706C29.8217 8.07086 29.7215 7.98505 29.6227 7.90063C28.9828 7.35397 28.3942 6.851 27.6766 6.4795C26.7966 6.02418 25.7391 5.76953 24.1454 5.76953H15.2292ZM28.9912 13.4802C28.9912 13.0607 29.1545 12.6584 29.4453 12.3618C29.7361 12.0651 30.1306 11.8985 30.5418 11.8985C30.9531 11.8985 31.3475 12.0651 31.6383 12.3618C31.9291 12.6584 32.0925 13.0607 32.0925 13.4802C32.0925 13.8996 31.9291 14.302 31.6383 14.5986C31.3475 14.8952 30.9531 15.0618 30.5418 15.0618C30.1306 15.0618 29.7361 14.8952 29.4453 14.5986C29.1545 14.302 28.9912 13.8996 28.9912 13.4802ZM18.912 11.8985C18.5007 11.8985 18.1063 12.0651 17.8155 12.3618C17.5247 12.6584 17.3613 13.0607 17.3613 13.4802C17.3613 13.8996 17.5247 14.302 17.8155 14.5986C18.1063 14.8952 18.5007 15.0618 18.912 15.0618C19.3232 15.0618 19.7176 14.8952 20.0084 14.5986C20.2992 14.302 20.4626 13.8996 20.4626 13.4802C20.4626 13.0607 20.2992 12.6584 20.0084 12.3618C19.7176 12.0651 19.3232 11.8985 18.912 11.8985Z">
                                            </path>
                                            <path
                                                d="M11 8.14151C11 8.03664 11.0408 7.93606 11.1135 7.86191C11.1862 7.78775 11.2848 7.74609 11.3877 7.74609H15.7489C15.8517 7.74609 15.9503 7.78775 16.023 7.86191C16.0957 7.93606 16.1365 8.03664 16.1365 8.14151C16.1365 8.24638 16.0957 8.34696 16.023 8.42111C15.9503 8.49527 15.8517 8.53693 15.7489 8.53693H11.3877C11.2848 8.53693 11.1862 8.49527 11.1135 8.42111C11.0408 8.34696 11 8.24638 11 8.14151ZM26.6836 8.65278C26.7563 8.72694 26.7971 8.82749 26.7971 8.93234C26.7971 9.03719 26.7563 9.13775 26.6836 9.2119L26.6532 9.24294C26.2897 9.61367 25.7968 9.82197 25.2828 9.82203H19.1409C19.0381 9.82203 18.9395 9.78037 18.8668 9.70622C18.7941 9.63206 18.7532 9.53149 18.7532 9.42662C18.7532 9.32174 18.7941 9.22117 18.8668 9.14701C18.9395 9.07286 19.0381 9.0312 19.1409 9.0312H25.2826C25.4354 9.03122 25.5866 9.00055 25.7277 8.94095C25.8688 8.88134 25.997 8.79397 26.105 8.68382L26.1355 8.65278C26.2082 8.57866 26.3068 8.53701 26.4096 8.53701C26.5123 8.53701 26.6109 8.57866 26.6836 8.65278ZM19.5286 17.7304C19.5286 17.6255 19.5694 17.5249 19.6421 17.4508C19.7148 17.3766 19.8134 17.335 19.9162 17.335H21.5638C21.6666 17.335 21.7652 17.3766 21.8379 17.4508C21.9106 17.5249 21.9514 17.6255 21.9514 17.7304C21.9514 17.8352 21.9106 17.9358 21.8379 18.01C21.7652 18.0841 21.6666 18.1258 21.5638 18.1258H19.9162C19.8134 18.1258 19.7148 18.0841 19.6421 18.01C19.5694 17.9358 19.5286 17.8352 19.5286 17.7304ZM22.2422 17.7304C22.2422 17.6255 22.283 17.5249 22.3557 17.4508C22.4284 17.3766 22.527 17.335 22.6299 17.335H26.991C27.0939 17.335 27.1925 17.3766 27.2652 17.4508C27.3379 17.5249 27.3787 17.6255 27.3787 17.7304C27.3787 17.8352 27.3379 17.9358 27.2652 18.01C27.1925 18.0841 27.0939 18.1258 26.991 18.1258H22.6299C22.527 18.1258 22.4284 18.0841 22.3557 18.01C22.283 17.9358 22.2422 17.8352 22.2422 17.7304Z">
                                            </path>
                                        </svg>Xem chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-and-next-prev">
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                            </ul>
                        </div>
                        <div class="next-prev-btn">
                            <ul>
                                <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="7"
                                            height="14" viewBox="0 0 7 14">
                                            <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                        </svg> Prev</a></li>
                                <li><a href="#">Next<svg xmlns="http://www.w3.org/2000/svg" width="7"
                                            height="14" viewBox="0 0 7 14">
                                            <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toprated-used-cars mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h4>Top các xe hãng xe được đánh giá cao</h4>
                    </div>
                    <div class="brand-list">
                        <ul>
                            @foreach ($brands as $item)
                                <li><a href="">{{ $item->brand_name }} <span>(1,234)</span></a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customar-feedback-area mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title1"><span>Customer Feedback</span>
                        <h2>What Our Customers Are Saying</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-left">
                        <div class="trustpilot">
                            <h5>Excellent!</h5><img class="star" src="{{ asset('images/trustpilot-logo3.svg') }}"
                                alt=""><span>Based On <strong>2348</strong> Reviews</span><img class="logo"
                                src="{{ asset('images/trustpilot-logo3.svg') }}" alt="">
                        </div>
                        <div class="google"><img class="logo" src="{{ asset('images/google.svg') }}"
                                alt="">
                            <div class="star">
                                <ul>
                                    <li class="active"><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div><span>Based On <strong>1448</strong> Reviews</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-right">
                        <div
                            class="swiper swiper-initialized swiper-horizontal swiper-pointer-events customer-feedback-slider mb-40">
                            <div class="swiper-wrapper"
                                style="transition-duration: 1500ms; transform: translate3d(-2477.5px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                    data-swiper-slide-index="0" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="1" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="2" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="3"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                    data-swiper-slide-index="0" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="1" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="2" style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div><span>Great Services!</span>
                                            </div>
                                            <div class="logo"><img src="{{ asset('images/google.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency to the actively encourage customers to leave reviews to the
                                            help promote their products and services.”</p>
                                        <div class="author-name">
                                            <h6>Nowry Jahan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    style="width: 470.5px; margin-right: 25px;">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area"><img
                                                    src="{{ asset('images/trustpilot-star.svg') }}"
                                                    alt=""><span>Trusted Company</span></div>
                                            <div class="logo"><img src="{{ asset('images/trustpilot-logo3.svg') }}"
                                                    alt=""></div>
                                        </div>
                                        <p>Drivco-Agency customer feedback is an invaluable source of information that
                                            can help businesses improve their offerings and provide better experiences.
                                        </p>
                                        <div class="author-name">
                                            <h6>Jhon Abraham</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-12 divider">
                                <div
                                    class="slider-btn-group style-2 justify-content-md-between justify-content-center">
                                    <div class="slider-btn prev-4 d-md-flex d-none"><svg width="11"
                                            height="19" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg></div>
                                    <div class="view-btn-area">
                                        <p>Thousand of People Reviews to Us</p><a class="view-btn"
                                            href="/customer-review">View All Review</a>
                                    </div>
                                    <div class="slider-btn next-4 d-md-flex d-none"><svg width="11"
                                            height="19" viewBox="0 0 8 13" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trusted-partner-section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-title wow fadeInUp" data-wow-delay="200ms">
                        <h6>Our Trusted Partners</h6>
                        <div class="dash"></div>
                    </div>
                    <div class="partner-slider wow fadeInUp" data-wow-delay="300ms">
                        <div class="marquee_text2">
                            <img src="images/company-logo-01.png" alt="">
                            <img src="images/company-logo-02.png" alt="">
                            <img src="images/company-logo-03.png" alt="">
                            <img src="images/company-logo-04.png" alt="">
                            <img src="images/company-logo-05.png" alt="">
                            <img src="images/company-logo-06.png" alt="">
                            <img src="images/company-logo-01.png" alt="">
                            <img src="images/company-logo-02.png" alt="">
                            <img src="images/company-logo-03.png" alt="">
                            <img src="images/company-logo-04.png" alt="">
                            <img src="images/company-logo-05.png" alt="">
                            <img src="images/company-logo-06.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
