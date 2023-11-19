@props(['carDetail'])

<div class="col-lg-8">
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
        <div class="single-item mb-50" id="car-img">
            <div class="car-img-area">
                <div class="tab-content mb-30" id="myTab5Content">
                    <div class="tab-pane fade show active" id="exterior" role="tabpanel"
                        aria-labelledby="exterior-tab">
                        <div class="product-img">
                            <div class="number-of-img">
                                <img src="{{ asset('images/gallery-icon-1.svg') }}" alt="">
                                {{ count($carDetail->verhicle_image_library) }}
                            </div>
                            <a href="#" class="fav">
                                <svg width="14" height="13" viewBox="0 0 14 14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                    </path>
                                </svg>
                            </a>
                            <div class="slider-btn-group">
                                <div class="product-stand-next swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($carDetail->verhicle_image_library as $item)
                                        <div class="swiper-slide">
                                            <img src="{{ asset('/storage/' . $item) }}" alt="image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="interior" role="tabpanel" aria-labelledby="interior-tab">
                        <div class="product-img">
                            <div class="number-of-img">
                                <img src="{{ asset('images/gallery-icon-1.svg') }}" alt="">
                                10
                            </div>
                            <a href="#" class="fav">
                                <svg width="14" height="13" viewBox="0 0 14 14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.00012 2.40453L6.37273 1.75966C4.90006 0.245917 2.19972 0.76829 1.22495 2.67141C0.767306 3.56653 0.664053 4.8589 1.4997 6.50827C2.30473 8.09639 3.97953 9.99864 7.00012 12.0706C10.0207 9.99864 11.6946 8.09639 12.5005 6.50827C13.3362 4.85803 13.2338 3.56653 12.7753 2.67141C11.8005 0.76829 9.10019 0.245042 7.62752 1.75879L7.00012 2.40453ZM7.00012 13.125C-6.41666 4.25953 2.86912 -2.65995 6.84612 1.00016C6.89862 1.04829 6.95024 1.09816 7.00012 1.14979C7.04949 1.09821 7.10087 1.04859 7.15413 1.00104C11.1302 -2.6617 20.4169 4.25865 7.00012 13.125Z">
                                    </path>
                                </svg>
                            </a>
                            <div class="slider-btn-group">
                                <div class="product-stand-next swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/interior-01.png') }}" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/interior-02.png') }}" alt="image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('images/interior-03.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="video-clip" role="tabpanel" aria-labelledby="video-clip-tab">
                        <div class="video-area">
                            <video autoplay="" loop="loop" muted="" preload="auto" controls="">
                                <source src="{{ $carDetail->verhicle_videos ? asset('/storage/' . $carDetail->verhicle_videos[0]) : '' }}"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="color-clip" role="tabpanel" aria-labelledby="color-clip-tab">
                        <div class="product-img2">
                            <div class="slider-btn-group">
                                <div class="product-stand-next swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                    </svg>
                                </div>
                                <div class="product-stand-prev swiper-arrow">
                                    <svg width="8" height="13" viewBox="0 0 8 13"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper product-img-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="car-color-wrap">
                                            <div class="car-img">
                                                <img src="{{ asset('images/color-car-05.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h5>Lamborghini Murciélago (Black)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="car-color-wrap">
                                            <div class="car-img">
                                                <img src="{{ asset('images/color-car-06.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h5>Lamborghini Murciélago (Blue)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="car-color-wrap">
                                            <div class="car-img">
                                                <img src="{{ asset('images/color-car-07.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h5>Lamborghini Murciélago (Pink)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="car-color-wrap">
                                            <div class="car-img">
                                                <img src="{{ asset('images/color-car-08.png') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h5>Lamborghini Murciélago (Orange)</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs" id="myTab5" role="tablist"
                    style="border-bottom: none;justify-content: space-around;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="exterior-tab" data-bs-toggle="tab"
                            data-bs-target="#exterior" type="button" role="tab" aria-controls="exterior"
                            aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="30"
                                viewBox="0 0 19 30">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19 0H18V14H0V15H18V30H19V0Z"></path>
                            </svg>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20">
                                    <mask id="mask0_1673_2706" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="20" height="20">
                                        <rect width="20" height="20" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_1673_2706)">
                                        <path
                                            d="M2.62728 10.356H17.3726C17.461 10.356 17.5458 10.3205 17.6083 10.2573C17.6708 10.194 17.7059 10.1083 17.7059 10.0189V6.34867C17.7065 6.25941 17.6719 6.17359 17.6099 6.11003L15.2766 3.75061C15.2141 3.6874 15.1293 3.65187 15.0409 3.65186H2.62728C2.53887 3.65186 2.45409 3.68737 2.39158 3.75058C2.32906 3.81379 2.29395 3.89952 2.29395 3.98892V10.0189C2.29395 10.1083 2.32906 10.194 2.39158 10.2573C2.45409 10.3205 2.53887 10.356 2.62728 10.356ZM17.0393 6.48821V9.68185H10.6336V4.32631H14.9003L17.0393 6.48821ZM2.96061 4.32631H9.96695V9.68185H2.96061V4.32631Z">
                                        </path>
                                        <path
                                            d="M16.2257 1.43225C16.1632 1.36904 16.0784 1.33352 15.99 1.3335H0.333333C0.244928 1.3335 0.160143 1.36901 0.0976311 1.43222C0.0351189 1.49543 0 1.58116 0 1.67056V15.493C0 15.5824 0.0351189 15.6682 0.0976311 15.7314C0.160143 15.7946 0.244928 15.8301 0.333333 15.8301C1.16365 15.8306 1.95981 16.1644 2.54694 16.7581C3.13406 17.3518 3.46414 18.1568 3.46467 18.9964C3.46467 19.0858 3.49979 19.1716 3.5623 19.2348C3.62481 19.298 3.70959 19.3335 3.798 19.3335H19.6667C19.7551 19.3335 19.8399 19.298 19.9024 19.2348C19.9649 19.1716 20 19.0858 20 18.9964V5.38799C20 5.2986 19.9649 5.21288 19.9023 5.14969L16.2257 1.43225ZM0.666667 15.1708V2.00762H15.852L19.3333 5.52753V16.5854H13.2377C13.1493 16.5855 13.0645 16.621 13.002 16.6842L11.0483 18.6594H4.117C4.03735 17.7612 3.64825 16.9199 3.01762 16.2823C2.38699 15.6446 1.55491 15.2513 0.666667 15.1708ZM11.9913 18.6594L13.3767 17.2596H19.3333V18.6594H11.9913Z">
                                        </path>
                                        <path
                                            d="M4.81734 6.25912L5.28867 5.78252L7.53867 8.05734L7.067 8.53394L4.81734 6.25912ZM6.03967 5.81791L6.511 5.34131L7.975 6.82167L7.50367 7.29828L6.03967 5.81791ZM11.7773 6.26013L12.2487 5.78353L14.4987 8.05835L14.027 8.53495L11.7773 6.26013ZM13 5.81892L13.4713 5.34198L14.9353 6.82235L14.464 7.29895L13 5.81892ZM12.9197 13.5042C13.0081 13.5042 13.0929 13.4687 13.1554 13.4055C13.2179 13.3423 13.253 13.2566 13.253 13.1672V11.9875C13.253 11.8981 13.2179 11.8123 13.1554 11.7491C13.0929 11.6859 13.0081 11.6504 12.9197 11.6504H10.8837C10.6406 11.6504 10.4074 11.748 10.2355 11.9219C10.0636 12.0957 9.967 12.3315 9.967 12.5773C9.967 12.8231 10.0636 13.0589 10.2355 13.2327C10.4074 13.4066 10.6406 13.5042 10.8837 13.5042H12.9197ZM10.6337 12.5773C10.6338 12.5103 10.6602 12.4461 10.7071 12.3987C10.7539 12.3514 10.8174 12.3247 10.8837 12.3245H12.5863V12.8301H10.8837C10.8174 12.8299 10.7539 12.8032 10.7071 12.7559C10.6602 12.7085 10.6338 12.6443 10.6337 12.5773ZM5.24634 11.6504H3.21C2.96689 11.6504 2.73373 11.748 2.56182 11.9219C2.38991 12.0957 2.29333 12.3315 2.29333 12.5773C2.29333 12.8231 2.38991 13.0589 2.56182 13.2327C2.73373 13.4066 2.96689 13.5042 3.21 13.5042H5.24567C5.33407 13.5042 5.41886 13.4687 5.48137 13.4055C5.54388 13.3423 5.579 13.2566 5.579 13.1672V11.9875C5.579 11.8982 5.54397 11.8125 5.48161 11.7494C5.41924 11.6862 5.33463 11.6506 5.24634 11.6504ZM4.913 12.8301H3.21C3.1437 12.8301 3.08011 12.8035 3.03322 12.7561C2.98634 12.7087 2.96 12.6444 2.96 12.5773C2.96 12.5103 2.98634 12.446 3.03322 12.3986C3.08011 12.3511 3.1437 12.3245 3.21 12.3245H4.91234L4.913 12.8301Z">
                                        </path>
                                    </g>
                                </svg>
                                Hình ảnh xe({{ count($carDetail->verhicle_image_library) }})
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="30"
                                viewBox="0 0 19 30">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H1V14H19V15H1V30H0V0Z"></path>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video-clip-tab" data-bs-toggle="tab"
                            data-bs-target="#video-clip" type="button" role="tab" aria-controls="video-clip"
                            aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="30"
                                viewBox="0 0 19 30">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19 0H18V14H0V15H18V30H19V0Z"></path>
                            </svg>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20">
                                    <mask id="mask0_1673_2677" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="20" height="20">
                                        <rect width="20" height="20" fill="#D9D9D9"></rect>
                                    </mask>
                                    <g mask="url(#mask0_1673_2677)">
                                        <path
                                            d="M10 0C4.48566 0 0 4.48609 0 10C0 15.5139 4.48566 20 10 20C15.5143 20 20 15.5139 20 10C20 4.48609 15.5143 0 10 0ZM10 19.1667C4.94547 19.1667 0.83332 15.0545 0.83332 10C0.83332 4.94547 4.94547 0.83332 10 0.83332C15.0545 0.83332 19.1667 4.94547 19.1667 10C19.1667 15.0545 15.0545 19.1667 10 19.1667Z">
                                        </path>
                                        <path
                                            d="M13.9754 9.6499L8.14211 5.8999C8.01434 5.8165 7.84914 5.81201 7.7173 5.88443C7.65152 5.92022 7.59661 5.97309 7.55836 6.03747C7.52012 6.10186 7.49995 6.17537 7.5 6.25025V13.7503C7.5 13.9028 7.58301 14.0428 7.7173 14.1161C7.77847 14.1494 7.84702 14.1669 7.91668 14.1669C7.99481 14.1669 8.07375 14.1449 8.14211 14.1006L13.9754 10.3506C14.0943 10.2741 14.1667 10.1419 14.1667 10.0003C14.1667 9.85865 14.0943 9.72643 13.9754 9.6499ZM8.33332 12.9869V7.01361L12.9793 10.0003L8.33332 12.9869Z">
                                        </path>
                                    </g>
                                </svg>
                                Video xe
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="30"
                                viewBox="0 0 19 30">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H1V14H19V15H1V30H0V0Z"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="single-item mb-50" id="car-info">
            <div class="car-info">
                <div class="title mb-20">
                    <h5>Thông tin xe</h5>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <img src="{{ asset('images/mileage.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h6>{{ $carDetail->car_info['mileage'] }} KM</h6>
                            <span>Số KM đã đi</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="{{ asset('images/engine.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h6>{{ $carDetail->car_info['engine'] }} </h6>
                            <span>Động cơ</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="{{ asset('images/fuel.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h6>{{ $carDetail->car_info['fuelType'] }} </h6>
                            <span>Loại nhiên liệu</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="{{ asset('images/condition.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h6>Xe cũ </h6>
                            <span>Tình trạng</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="single-item mb-50" id="kye-features">
            <div class="kye-features">
                <div class="title mb-20">
                    <h5>Tính năng xe</h5>
                </div>
                <ul>
                    @foreach ($carDetail->car_info['features'] as $item)
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                viewBox="0 0 12 12">
                                <path
                                    d="M6 11.25C4.60761 11.25 3.27226 10.6969 2.28769 9.71231C1.30312 8.72774 0.75 7.39239 0.75 6C0.75 4.60761 1.30312 3.27226 2.28769 2.28769C3.27226 1.30312 4.60761 0.75 6 0.75C7.39239 0.75 8.72774 1.30312 9.71231 2.28769C10.6969 3.27226 11.25 4.60761 11.25 6C11.25 7.39239 10.6969 8.72774 9.71231 9.71231C8.72774 10.6969 7.39239 11.25 6 11.25ZM6 12C7.5913 12 9.11742 11.3679 10.2426 10.2426C11.3679 9.11742 12 7.5913 12 6C12 4.4087 11.3679 2.88258 10.2426 1.75736C9.11742 0.632141 7.5913 0 6 0C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6C0 7.5913 0.632141 9.11742 1.75736 10.2426C2.88258 11.3679 4.4087 12 6 12Z">
                                </path>
                                <path
                                    d="M8.22751 3.72747C8.22217 3.73264 8.21716 3.73816 8.21251 3.74397L5.60776 7.06272L4.03801 5.49222C3.93138 5.39286 3.79034 5.33876 3.64462 5.34134C3.49889 5.34391 3.35985 5.40294 3.25679 5.506C3.15373 5.60906 3.0947 5.7481 3.09213 5.89382C3.08956 6.03955 3.14365 6.18059 3.24301 6.28722L5.22751 8.27247C5.28097 8.32583 5.34463 8.36788 5.4147 8.39611C5.48476 8.42433 5.5598 8.43816 5.63532 8.43676C5.71084 8.43536 5.78531 8.41876 5.85428 8.38796C5.92325 8.35716 5.98531 8.31278 6.03676 8.25747L9.03076 4.51497C9.13271 4.40796 9.18845 4.26514 9.18593 4.11737C9.18341 3.9696 9.12284 3.82875 9.0173 3.72529C8.91177 3.62182 8.76975 3.56405 8.62196 3.56446C8.47417 3.56486 8.33247 3.62342 8.22751 3.72747Z">
                                </path>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="single-item mb-50" id="overview">
            <div class="overview">
                <div class="title mb-25">
                    <h5>Tổng quan</h5>
                </div>
                <div class="overview-content">
                    <ul>
                        <li><span>Hãng xe</span> {{ $carDetail->brand->brand_name }}</li>
                        <li><span>Dòng xe</span> {{ $carDetail->model->model_name }}</li>
                        <li><span>Năm sản xuất</span> {{ $carDetail->car_info['year_of_manufacture'] }}</li>
                        <li><span>Màu sắc</span> {{ $carDetail->car_info['color'] }}</li>
                    </ul>
                    <ul>
                        <li><span>Động cơ</span> {{ $carDetail->car_info['engine'] }}</li>
                        <li><span>Số KM đã đi</span> {{ $carDetail->car_info['mileage'] }}</li>
                        <li><span>Nhiên liệu</span> {{ $carDetail->car_info['fuelType'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="single-item mb-50" id="faqs">
            <div class="faq-area">
                <div class="title mb-25">
                    <h5>FAQ’s &amp; Latest Answer</h5>
                </div>
                <div class="faq-wrap">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    How often should I get my car serviced?
                                </button>
                            </h5>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It's always a good idea to research and
                                    read
                                    reviews specific to the dealership you're interested in, as
                                    experiences can vary even within the same dealership chain.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    How often should I change my car's oil?
                                </button>
                            </h5>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It's always a good idea to research and
                                    read
                                    reviews specific to the dealership you're interested in, as
                                    experiences can vary even within the same dealership chain.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What type of fuel should I use for my car?
                                </button>
                            </h5>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It's always a good idea to research and
                                    read
                                    reviews specific to the dealership you're interested in, as
                                    experiences can vary even within the same dealership chain.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    What is the recommended tire pressure for my car?
                                </button>
                            </h5>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">It's always a good idea to research and
                                    read
                                    reviews specific to the dealership you're interested in, as
                                    experiences can vary even within the same dealership chain.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-item mb-50" id="qus-ans">
            <div class="user-qustion-area">
                <div class="section-title-and-filter mb-30">
                    <div class="title">
                        <h5>Latest User Question</h5>
                    </div>
                    <div class="filter-atra">
                        <h6>Filter By:</h6>
                        <form>
                            <div class="form-inner">
                                <select>
                                    <option value="1">Newest</option>
                                    <option value="2">Older</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-input-area mb-40">
                    <form>
                        <div class="form-inner">
                            <textarea placeholder="Ask your question..."></textarea>
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 14 14">
                                    <path
                                        d="M13.8697 0.129409C13.9314 0.191213 13.9736 0.269783 13.991 0.355362C14.0085 0.44094 14.0004 0.529754 13.9678 0.610771L8.78063 13.5781C8.73492 13.6923 8.65859 13.7917 8.56003 13.8653C8.46148 13.9389 8.34453 13.9839 8.22206 13.9954C8.09958 14.0068 7.97633 13.9842 7.86586 13.9301C7.75539 13.876 7.66199 13.7924 7.59594 13.6887L4.76304 9.23607L0.310438 6.40316C0.206426 6.33718 0.122663 6.24375 0.0683925 6.13318C0.0141218 6.02261 -0.00854707 5.89919 0.00288719 5.77655C0.0143215 5.65391 0.0594144 5.53681 0.13319 5.43817C0.206966 5.33954 0.306557 5.2632 0.420973 5.21759L13.3883 0.0322452C13.4694 -0.000369522 13.5582 -0.00846329 13.6437 0.00896931C13.7293 0.0264019 13.8079 0.0685926 13.8697 0.1303V0.129409ZM5.65267 8.97578L8.11385 12.8427L12.3329 2.29554L5.65267 8.97578ZM11.7027 1.66531L1.1555 5.88436L5.02333 8.34466L11.7027 1.66531Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <ul class="comment">
                    <li>
                        <div class="single-comment-area">
                            <div class="author-img">
                                <img src="{{ asset('images/comment-author-01.png') }}" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="author-name-deg">
                                    <h6>Mr. Bowmik Haldar,</h6>
                                    <span>05 June, 2023</span>
                                </div>
                                <p>However, here are some well-regarded car dealerships known for their
                                    customer service, inventory, and overall reputation. It's always a
                                    good idea to research and read reviews specific...</p>
                                <div class="replay-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                        viewBox="0 0 14 11">
                                        <path
                                            d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                        </path>
                                    </svg>
                                    Reply (02)
                                </div>
                            </div>
                        </div>
                        <ul class="comment-replay">
                            <li>
                                <div class="single-comment-area">
                                    <div class="author-img">
                                        <img src="{{ asset('images/comment-author-02.png') }}" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-deg">
                                            <h6>Jacoline Juie,</h6>
                                            <span>05 June, 2023</span>
                                        </div>
                                        <p>However, here are some well-regarded car dealerships known
                                            for their customer service, inventory, and overall
                                            reputation. It's always a good idea to research and read
                                            reviews specific...</p>
                                        <div class="replay-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                                viewBox="0 0 14 11">
                                                <path
                                                    d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                                </path>
                                            </svg>
                                            Reply
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-comment-area">
                                    <div class="author-img">
                                        <img src="{{ asset('images/comment-author-03.png') }}" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-deg">
                                            <h6>Robert Smith,</h6>
                                            <span>05 June, 2023</span>
                                        </div>
                                        <p>However, here are some well-regarded car dealerships known
                                            for their customer service, inventory, and overall
                                            reputation. It's always a good idea to research and read
                                            reviews specific...</p>
                                        <div class="replay-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                                viewBox="0 0 14 11">
                                                <path
                                                    d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                                </path>
                                            </svg>
                                            Reply
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="single-comment-area">
                            <div class="author-img">
                                <img src="{{ asset('images/comment-author-04.png') }}" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="author-name-deg">
                                    <h6>Srileka Panday,</h6>
                                    <span>05 June, 2023</span>
                                </div>
                                <p>However, here are some well-regarded car dealerships known for their
                                    customer service, inventory, and overall reputation. It's always a
                                    good idea to research and read reviews specific...</p>
                                <div class="replay-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                        viewBox="0 0 14 11">
                                        <path
                                            d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                        </path>
                                    </svg>
                                    Reply (02)
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-comment-area">
                            <div class="author-img">
                                <img src="{{ asset('images/comment-author-05.png') }}" alt="">
                            </div>
                            <div class="comment-content">
                                <div class="author-name-deg">
                                    <h6>Mr. Bowmik Haldar,</h6>
                                    <span>05 June, 2023</span>
                                </div>
                                <p>However, here are some well-regarded car dealerships known for their
                                    customer service, inventory, and overall reputation. It's always a
                                    good idea to research and read reviews specific...</p>
                                <div class="replay-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                        viewBox="0 0 14 11">
                                        <path
                                            d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                        </path>
                                    </svg>
                                    Reply (02)
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="load-moer-btn">
                    <a class="primary-btn3" href="#">Load More Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
