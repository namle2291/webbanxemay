<x-only-header title="{{ $product->name }}">
    <div class="row">
        <div class="col-lg-5 text-center border" style="padding: 40px 0;">
            <img src="/storage/images/{{ $product->image }}" width="80%" alt="">
        </div>
        <div class="col-lg-7">
            <h1 class="fw-bold mb-3">{{ $product->name }}</h1>
            {{-- <i>{{ $product->description ?? 'Mô tả đang cập nhật' }}</i> --}}
            <h2 class="mt-3">Giá: <span class="fw-bold h2" style="color: #4797B1;">{{ number_format($product->price) }}
                    <sup>đ</sup></span></h2>
            <div>
                <span>Số lượng: {{ $product->inStock }}</span>
            </div>
            {{-- Button Thêm vào giỏ hàng --}}
            <div class="border-bottom py-4">
                <form action="{{ route('home.giohang.add', $product->id) }}">
                    <input type="number" class="form-control fs-4 w-25" min="1" value="1" name="quantity">
                    <button class="btn btn-success mt-3 fs-4"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                </form>
            </div>
            <div class="mt-3">
                <p>Giao hàng miễn phí: Áp dụng đơn hàng > 200.000đ</p>
                <p>Thanh toán tại nhà: Nhanh chóng và an toàn</p>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <h1 class="text-uppercase">Mô tả sản phẩm</h1>
        <div>
            {!! $product->description !!}
        </div>
    </div>
</x-only-header>
