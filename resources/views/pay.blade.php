<x-only-header title="Thanh toán">
    <form action="{{ route('home.dathang') }}" method="POST">
        @csrf
        <div class="row shadow p-3" style="background: #F6FBF4;">
            <div class="col-lg-5 border-end">
                <h2 class="fw-bold text-uppercase">Thông tin nhận hàng</h2>
                <x-input class="fs-4 rounded-pill" value="{{ Auth::guard('customer')->user()->email }}" label="Email"
                    name="email" />
                <x-input class="fs-4 rounded-pill" value="{{ Auth::guard('customer')->user()->fullName }}"
                    label="Họ và tên" name="fullName" />
                <x-input class="fs-4 rounded-pill" value="{{ Auth::guard('customer')->user()->phone }}"
                    label="Số điện thoại" name="phone" />
                <x-input class="fs-4 rounded-pill" value="{{ Auth::guard('customer')->user()->address }}"
                    label="Địa chỉ" name="address" />
                <x-textarea class="fs-4" name="note" label="Ghi chú" />
                <x-input value="{{ Auth::guard('customer')->user()->id }}" type="hidden" name="id_customer" />
            </div>
            <div class="col-lg-7">
                <h2 class="fw-bold text-uppercase">Đơn hàng ({{ $cart->total_quantity }} sản phẩm)</h2>
                <div>
                    @foreach ($cart->items as $item)
                        <div class="row d-flex align-items-center m-0 p-0 border-bottom mb-2 py-2">
                            <div class="col-lg-4">
                                <img src="/storage/images/{{ $item['image'] }}" class="border" width="60"
                                    alt="">
                            </div>
                            <div class="col-lg-4">
                                <h4>{{ $item['name'] }}</h4>
                            </div>
                            <div class="col-lg-4 text-center">
                                <h4 class="fw-bold">{{ number_format($item['price']) }}đ X
                                    {{ $item['quantity'] }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-end">
                    <h3 class="text-danger fw-bold my-3">Tổng cộng: {{ number_format($cart->total_price) }}đ</h3>
                    <a href="{{ route('home.giohang') }}" class="btn rounded-pill fs-4"
                        style="background: #4797b1; color: white;"><i class="fas fa-arrow-left"></i>
                        Quay về trang giỏ hàng</a>
                    <button class="btn rounded-pill fs-4" style="background: #4797b1; color: white;"><i
                            class="fas fa-check"></i>
                        Đặt hàng</button>
                </div>
            </div>
        </div>
    </form>
</x-only-header>
