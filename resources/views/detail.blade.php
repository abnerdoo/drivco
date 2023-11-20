<x-partials.layout-client>
    <x-detailpage.banner :$carDetail />


    <div class="car-details-area pt-100 mb-100">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-12 position-relative">
                    <div class="car-details-menu">
                        <nav id="navbar-example2" class="navbar">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-img">Hình ảnh xe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#car-info">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kye-features">Các tính năng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#overview">Tổng quan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#faqs">Câu hỏi thường gặp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#qus-ans">Hỏi và trả lời</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <x-detailpage.info-car :$carDetail />
                <div class="col-lg-4">
                    <div class="car-details-sidebar">
                        <div class="contact-info mb-50">
                            <div class="single-contact" id="phoneNumber"
                                data-phone="{{ $carDetail->user->phone_number }}">
                                <a><i class="bx bx-phone-call"></i>Xem số điện thoại</a>
                            </div>
                            <div class="single-contact" id="emailAdress" data-email="{{ $carDetail->user->email }}">
                                <a><i class="bx bx-at"></i>Email </a>
                            </div>
                        </div>
                        <div class="inquiry-form mb-40">
                            <div class="title">
                                <h4>Bạn quan tâm chiếc xe này </h4>
                                <p>Hãy liên hệ với người bán ngay nào.</p>
                            </div>
                            <form action="/chatify/{{ $carDetail->user_id }}">
                                <div class="form-inner">
                                    <button class="primary-btn3" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 14 14">
                                            <path
                                                d="M13.8697 0.129409C13.9314 0.191213 13.9736 0.269783 13.991 0.355362C14.0085 0.44094 14.0004 0.529754 13.9678 0.610771L8.78063 13.5781C8.73492 13.6923 8.65859 13.7917 8.56003 13.8653C8.46148 13.9389 8.34453 13.9839 8.22206 13.9954C8.09958 14.0068 7.97633 13.9842 7.86586 13.9301C7.75539 13.876 7.66199 13.7924 7.59594 13.6887L4.76304 9.23607L0.310438 6.40316C0.206426 6.33718 0.122663 6.24375 0.0683925 6.13318C0.0141218 6.02261 -0.00854707 5.89919 0.00288719 5.77655C0.0143215 5.65391 0.0594144 5.53681 0.13319 5.43817C0.206966 5.33954 0.306557 5.2632 0.420973 5.21759L13.3883 0.0322452C13.4694 -0.000369522 13.5582 -0.00846329 13.6437 0.00896931C13.7293 0.0264019 13.8079 0.0685926 13.8697 0.1303V0.129409ZM5.65267 8.97578L8.11385 12.8427L12.3329 2.29554L5.65267 8.97578ZM11.7027 1.66531L1.1555 5.88436L5.02333 8.34466L11.7027 1.66531Z">
                                            </path>
                                        </svg> Chat Với Người Bán
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-partials.layout-client>