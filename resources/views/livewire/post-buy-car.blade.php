<div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-st-card1 two mb-30">
                    @if ($ads->count() == 0)
                        <a href="https://www.khuyenmaicastrol.com/"
                            target="_blank" style="width:100%">
                            <img loading="lazy"
                                src="https://secure-ds.serving-sys.com/resources/PROD/asset/1073745238/IMAGE/20230113/Carmudi%20Banner%20[300x600]_76522578997430414.jpg"
                                alt="" style="width:100%"></a>
                    @else
                        @foreach ($ads as $value)
                            <a href="{{ $value->target_url }}" target="_blank" rel="noopener noreferrer"
                                style="width:100%">
                                <img src="{{ asset('storage/' . $value->image_url) }}" alt=""
                                    style="width:100%">
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                @if (auth()->check())
                    <div class="alert alert-primary">
                        Chú ý: Chỉ đăng tin mua xe ở đây. Không đăng tin bán xe hay tin rao vặt khác...nếu vi phạm tài
                        khoản
                        sẽ
                        bị
                        khóa !
                        <br>
                        Nội dung phải nhập bằng Tiếng Việt có dấu
                    </div>

                    <div class="messageSender__top">
                        @if (strpos(auth()->user()->avatar, 'http') === 0)
                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                src="{{ auth()->user()->avatar }}" alt="">
                        @elseif (Storage::url(auth()->user()->avatar))
                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                src="{{ 'storage/' . auth()->user()->avatar }}" alt="">
                        @else
                            <img style="width: 50px;height:50px;object-fit:cover" class="rounded-circle"
                                src="{{ 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}" alt="">
                        @endif
                        <form wire:submit.prevent="save">
                            <input class="messageSender__input" wire:model="content" placeholder="Bạn cần mua xe gì?"
                                type="text">
                        </form>
                    </div>
                @else
                    <div class="alert alert-warning">
                        Bạn cần <strong><a href="{{ route('login') }}">đăng nhập</a> để thực hiện đăng tin mua
                            xe.</strong>
                    </div>
                @endif
                <div class="text-danger">
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>


                <div class="mt-5 mb-5">
                    @if (auth()->check())
                        @if ($pending->count() > 0)
                            <div class="container bg-warning rounded-3 shadow px-2 py-3">
                                @foreach ($pending as $demand)
                                    <div class="card-post">
                                        <div class="card-body">
                                            <span class="badge bg-warning text-dark pb-2">tin chờ duyệt</span>
                                            <p>
                                                {{ $demand->content }}
                                            </p>
                                            <div class="user w-100">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        @if (strpos(auth()->user()->avatar, 'http') === 0)
                                                            <img style="width: 50px;height:50px;object-fit:cover"
                                                                class="rounded-circle"
                                                                src="{{ auth()->user()->avatar }}" alt="">
                                                        @elseif (Storage::url(auth()->user()->avatar))
                                                            <img style="width: 50px;height:50px;object-fit:cover"
                                                                class="rounded-circle"
                                                                src="{{ 'storage/' . auth()->user()->avatar }}"
                                                                alt="">
                                                        @else
                                                            <img style="width: 50px;height:50px;object-fit:cover"
                                                                class="rounded-circle"
                                                                src="{{ 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}"
                                                                alt="">
                                                        @endif
                                                        <div class="user-info">
                                                            <h5>{{ $demand->user->name }}</h5>
                                                            <small>{{ $demand->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex gap-2 align-items-center">
                                                        <i class="bi bi-lock-fill"></i>

                                                        <button wire:click="remove({{ $demand->id }})"
                                                            class="btn btn-danger rounded-circle"
                                                            wire:confirm="Bạn có chắc muốn xoá không?">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif
                    @if ($demands->count() > 0)
                        @foreach ($demands as $demand)
                            <div class="card-post">
                                <div class="card-body">
                                    <span class="badge bg-warning text-dark pb-2">tin chờ duyệt</span>

                                    <div class="user w-100 my-2">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="border border-dark border-1"
                                                    src="{{ asset('storage/' . $demand->user->avatar) }}"
                                                    alt="user" />
                                                <div class="user-info">
                                                    <h5>{{ $demand->user->name }}</h5>
                                                    <small>{{ $demand->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex gx-3 align-items-center">
                                                <button class="btn"
                                                    onclick="window.location.href='/chatify/{{ $demand->user_id }}'"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Chat với người bán ngay">
                                                    <i class="bi bi-chat-dots"></i>
                                                </button>
                                                <a @if (!empty($demand->user->phone_number)) href="tel:{{ $demand->user->phone_number }}" @endif
                                                    @if (!empty($demand->user->email)) href="mailto:{{ $demand->user->email }}" @endif>
                                                    <button class="btn" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="Liên hệ: {{ $demand->user->phone_number ? $demand->user->phone_number : $demand->user->email }}">
                                                        <i class="bi bi-telephone"></i>
                                                    </button>
                                                </a>

                                                @if ($demand->user_id == auth()->id())
                                                    <button wire:click="remove({{ $demand->id }})"
                                                        class="btn btn-danger rounded-circle"
                                                        wire:confirm="Bạn có chắc muốn xoá không?">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>


                                    </div>
                                    <p class="mb-0">
                                        {{ $demand->content }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @if ($demands->count() > 0)
                    @foreach ($demands as $demand)
                        <div class="card-post">
                            <div class="card-body">

                                <div class="user w-100 my-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            @if (strpos($demand->user->avatar, 'http') === 0)
                                                <img style="width: 50px;height:50px;object-fit:cover"
                                                    class="rounded-circle" src="{{ $demand->user->avatar }}"
                                                    alt="">
                                            @elseif (Storage::url($demand->user->avatar))
                                                <img style="width: 50px;height:50px;object-fit:cover"
                                                    class="rounded-circle"
                                                    src="{{ 'storage/' . $demand->user->avatar }}" alt="">
                                            @else
                                                <img style="width: 50px;height:50px;object-fit:cover"
                                                    class="rounded-circle"
                                                    src="{{ 'https://ui-avatars.com/api/?name=' . $demand->user->name }}"
                                                    alt="">
                                            @endif
                                            <div class="user-info">
                                                <h5>{{ $demand->user->name }}</h5>
                                                <small>{{ $demand->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>
                                        <div class="d-flex gx-3 align-items-center">
                                            <button class="btn"
                                                onclick="window.location.href='/chatify/{{ $demand->user_id }}'"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Chat với người bán ngay">
                                                <i class="bi bi-chat-dots"></i>
                                            </button>
                                            <a @if (!empty($demand->user->phone_number)) href="tel:{{ $demand->user->phone_number }}" @endif
                                                @if (!empty($demand->user->email)) href="mailto:{{ $demand->user->email }}" @endif>
                                                <button class="btn" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    title="Liên hệ: {{ $demand->user->phone_number ? $demand->user->phone_number : $demand->user->email }}">
                                                    <i class="bi bi-telephone"></i>
                                                </button>
                                            </a>

                                            @if ($demand->user_id == auth()->id())
                                                <button wire:click="remove({{ $demand->id }})"
                                                    class="btn btn-danger rounded-circle"
                                                    wire:confirm="Bạn có chắc muốn xoá không?">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>


                                </div>
                                <p class="mb-0">
                                    {{ $demand->content }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h6 class="text-center mt-3">Không có tin đăng nào 😢</h6>
                @endif
            </div>

            <div class="col-lg-3">
                <div class="product-st-card1 two mb-30">
                    @if ($ads->count() == 0)
                        <a href="https://ads.carmudi.vn/www/delivery/ck.php?oaparams=2__bannerid=448__zoneid=184__cb=cbdb7195d4__oadest=https%3A%2F%2Fkayauto.vn%2F%3Futm_source%3Dcarmudi%26utm_medium%3Dbanner%26utm_campaign%3Dcarmudixkayauto&_gl=1*7p47k0*_ga*NDAwNTM3MDMxLjE2OTMxMDAwNjE.*_ga_Q0R7GR1LM2*MTcwMjk3NjMwNS40My4xLjE3MDI5Nzc5MDAuMC4wLjA.*_ga_G4J0VG25ZV*MTcwMjk3NjMwNS4zMC4xLjE3MDI5Nzc5MDAuNjAuMC4w"
                            target="_blank" style="width:100%">
                            <img loading="lazy"
                                src="https://ads.carmudi.vn/www/images/c52243fe418f714eda2c6adf693facd2.png"
                                alt="" style="width:100%"></a>
                    @else
                        @foreach ($ads as $value)
                            <a href="{{ $value->target_url }}" target="_blank" rel="noopener noreferrer"
                                style="width:100%">
                                <img src="{{ asset('storage/' . $value->image_url) }}" alt=""
                                    style="width:100%">
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
