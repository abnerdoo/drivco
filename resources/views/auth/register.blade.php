@section('page_title')
    Đăng ký làm thành viên của Drivco
@endsection
<x-partials.layout-client>
    <style>
        .form-box {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10.6px);
            -webkit-backdrop-filter: blur(10.6px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: fit-content;
            margin: auto;
            margin-top: auto;
            padding: 0 30px;
        }

        .input_login::placeholder {
            font-size: 14px !important;
        }

        .input_login {
            /* border: 1px solid #000; */
            border: none;
            background-color: #fbf7fb;
            padding: 10px 15px;
            border-radius: 7px;
            font-size: 14px;
        }

        .form__login {
            border-radius: 10px;
            box-shadow: #88bfa37a 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        }

        .modal-content {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1034%26quot%3b)' fill='none'%3e%3cpath d='M 0%2c15 C 14.4%2c43.8 43.2%2c155.8 72%2c159 C 100.8%2c162.2 115.2%2c34.6 144%2c31 C 172.8%2c27.4 187.2%2c143 216%2c141 C 244.8%2c139 259.2%2c16.6 288%2c21 C 316.8%2c25.4 331.2%2c149.2 360%2c163 C 388.8%2c176.8 403.2%2c90.2 432%2c90 C 460.8%2c89.8 475.2%2c172.2 504%2c162 C 532.8%2c151.8 547.2%2c43.2 576%2c39 C 604.8%2c34.8 619.2%2c131 648%2c141 C 676.8%2c151 691.2%2c91.4 720%2c89 C 748.8%2c86.6 763.2%2c136.4 792%2c129 C 820.8%2c121.6 835.2%2c50.2 864%2c52 C 892.8%2c53.8 907.2%2c142.4 936%2c138 C 964.8%2c133.6 979.2%2c25.8 1008%2c30 C 1036.8%2c34.2 1051.2%2c153 1080%2c159 C 1108.8%2c165 1123.2%2c72 1152%2c60 C 1180.8%2c48 1195.2%2c110 1224%2c99 C 1252.8%2c88 1267.2%2c2.2 1296%2c5 C 1324.8%2c7.8 1339.2%2c106.8 1368%2c113 C 1396.8%2c119.2 1425.6%2c51.4 1440%2c36L1440 560L0 560z' fill='rgba(76%2c 218%2c 150%2c 1)'%3e%3c/path%3e%3cpath d='M 0%2c195 C 28.8%2c218.2 86.4%2c307 144%2c311 C 201.6%2c315 230.4%2c212 288%2c215 C 345.6%2c218 374.4%2c320.4 432%2c326 C 489.6%2c331.6 518.4%2c236.4 576%2c243 C 633.6%2c249.6 662.4%2c364 720%2c359 C 777.6%2c354 806.4%2c224.8 864%2c218 C 921.6%2c211.2 950.4%2c326.4 1008%2c325 C 1065.6%2c323.6 1094.4%2c203.4 1152%2c211 C 1209.6%2c218.6 1238.4%2c352.2 1296%2c363 C 1353.6%2c373.8 1411.2%2c284.6 1440%2c265L1440 560L0 560z' fill='rgba(54%2c 63%2c 59%2c 1)'%3e%3c/path%3e%3cpath d='M 0%2c542 C 48%2c526.4 144%2c477 240%2c464 C 336%2c451 384%2c480 480%2c477 C 576%2c474 624%2c448.6 720%2c449 C 816%2c449.4 864%2c483 960%2c479 C 1056%2c475 1104%2c428.2 1200%2c429 C 1296%2c429.8 1392%2c472.2 1440%2c483L1440 560L0 560z' fill='rgba(76%2c 218%2c 150%2c 1)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1034'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: 100% 80px;
        }

        .img__login {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px
        }

        @media screen and (max-width: 1280) {

            /* STYLES HERE */
            .banner__login {
                display: none;
            }
        }
    </style>
    <div class="container my-5">
        <div class="login__wrap d-flex justify-content-center align-items-center">
            <div class="banner__login" style="width: 400px; height: 605px">
                <img class="img__login" style="width:100%; height:100%;" src="{{ asset('images/slide-banner.jpg') }}"
                    alt="">
            </div>
            <div class="modal-dialog m-0">
                <div class="modal-content form__login"
                    style="border-top-right-radius:12px;border-bottom-right-radius:12px;border-top-left-radius:0;border-bottom-left-radius:0">
                    <div class="modal-header">
                        <h4 class="modal-title">Đăng Ký</h4>
                        {{-- <p>Don’t have any account? <button type="button" data-bs-toggle="modal"
                                data-bs-target="#signUpModal01">Sign Up</button></p> --}}
                        <button class="rounded-2 px-2" type="button"
                            onclick="window.location.href='{{ url()->previous() }}'">
                            <i class="bi bi-house-door"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label for="">Họ và tên</label>
                                        <input type="text"
                                            class="input_login w-100 border @error('name') border-danger @enderror"
                                            style="height:60px" id="name" value="{{ old('name') }}"
                                            autocomplete="name" placeholder="Nhập tên..." name="name" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Email của bạn<span class="text-danger">*</span></label>
                                        <input
                                            class="input_login w-100 border @error('email') border border-danger @enderror"
                                            style="height: 60px" type="email" placeholder="Nhập email" id="email"
                                            type="email" value="{{ old('email') }}" autocomplete="email"
                                            name="email" autofocus>
                                    </div>
                                    @error('email')
                                        <p class="text-danger fw-bold" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Mật khẩu<span class="text-danger">*</span></label>
                                        <input
                                            class="input_login w-100 border @error('password') border border-danger @enderror"
                                            style="height: 60px" id="password3" type="password" placeholder="*** ***"
                                            name="password">
                                        <i class="bi bi-eye-slash d-none" id="togglePassword3"></i>
                                    </div>
                                    @error('password')
                                        <p class="text-danger fw-bold" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Xác nhận mật khẩu<span class="text-danger">*</span></label>
                                        <input
                                            class="input_login mb-3 w-100 border @error('password') border border-danger @enderror"
                                            style="height: 60px" id="password3" type="password" placeholder="*** ***"
                                            name="password_confirmation" autocomplete="new-password">
                                        <i class="bi bi-eye-slash d-none" id="togglePassword3"></i>
                                    </div>
                                    @error('password')
                                        <p class="text-danger fw-bold" style="display:block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button class="primary-btn6 w-100 text-center justify-content-center"
                                            type="submit"><i class="text-success bi bi-door-open"></i> Đăng ký</button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 form-box d-flex align-items-center flex-column justify-content-center text-center"
                                style="height:60px">
                                Nếu đã có tài khoản? <a style=" color: #46D993; font-weight: 600"
                                    href="{{ route('login') }}">Đăng nhập</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout-client>
