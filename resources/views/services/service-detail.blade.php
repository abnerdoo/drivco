@push('styles')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endpush

<x-partials.layout-client>
    <div class="my-5">
        <!-- content -->
        <div class="payment container d-flex justify-content-center">
            <div class="box-1 bg-light user">
                <div class="box-inner-1 pb-3 mb-3 ">
                    <div class="d-flex justify-content-between my-3 userdetails">
                        <span class="fw-bold">Mua gói: {{ $serv->service_name }}</span>
                        <span class="fw-lighter fs-4">{{ number_format($serv->price) }} đ</span>
                    </div>
                    <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/motor_intro_2.png') }}" class="d-block w-100 rounded">
                            </div>
                        </div>
                    </div>
                    <p class="dis info my-3">{{ $serv->title }}</p>
                    <div class="radiobtn">
                        <input type="radio" name="box" id="one">
                        <input type="radio" name="box" id="two">
                        <label for="one" class="box py-2 first">
                            <div class="d-flex align-items-start">
                                <span class="circle"></span>
                                <div class="course">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="fw-bold">
                                            Thanh toán qua VNPay
                                        </span>
                                    </div>
                                    <span>
                                        <img width="50" height="50" src="{{ asset('images/vnpay.jpg') }}"
                                            alt="">
                                    </span>
                                    <span>hướng dẫn tải về và thanh toán</span>
                                </div>
                            </div>
                        </label>
                        <label for="two" class="box py-2 second">
                            <div class="d-flex">
                                <span class="circle"></span>
                                <div class="course">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="fw-bold">
                                            Thanh toán trực tiếp
                                        </span>
                                    </div>
                                    <span>Thanh toán bằng số dư có trong tài khoản</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="box-2">
                <div class="box-inner-2">
                    <div>
                        <div>
                            <p class="fw-bold">{{ $serv->service_name }}</p>
                            @php
                                $descArr = preg_split("/\r\n|\n|\r/", $serv->description);
                            @endphp
                            <p class="dis mb-3">
                                @foreach ($descArr as $desc)
                                    <i class="bi bi-patch-check"></i> {{ $desc }} <br>
                                @endforeach
                            </p>
                        </div>

                        <div>
                            <p class="dis">
                                <span class="fw-bold">Thành tiền:</span>
                                <span class="fw-bolder fs-4">{{ number_format($serv->price) }} đ</span>
                            </p>
                        </div>
                    </div>

                    <div>
                        <form action="{{ route('payment-vnpay', $serv->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary mt-2">Thanh toán ngay
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content end -->
    </div>
</x-partials.layout-client>
