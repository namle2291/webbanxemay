<x-only-header title="Giỏ hàng">
    <p class="fs-2 text-uppercase">Giỏ hàng của bạn</p>
    @if (!empty($cart->items))
        <table class="table table-borderless table-bordered table-hover">
            <thead class="text-light" style="background: #4797b1;">
                <tr class="text-center">
                    <th>#</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                ?>
                @foreach ($cart->items as $item)
                    <tr style="vertical-align: middle; text-align: center;">
                        <td>{{ $i++ }}</td>
                        <td><img src="/storage/images/{{ $item['image'] }}" width="100" alt=""></td>
                        <td>{{ $item['name'] }}</td>
                        <td style="width: 200px;">
                            <form action="{{ route('home.giohang.update') }}" method="POST" class="d-flex">
                                @csrf
                                <input type="hidden" value="{{ $item['id'] }}" name="id_product"
                                    class="form-control fs-4">
                                <input type="number" value="{{ $item['quantity'] }}" min="1" name="quantity"
                                    class="form-control fs-4">
                                <button class="btn btn-sm w-50 fs-6" style="background: #4797b1; color: white;">Cập
                                    nhật</button>
                            </form>
                        </td>
                        <td class="fw-bold">{{ number_format($item['price']) }}đ</td>
                        <td class="fw-bold">{{ number_format($item['price'] * $item['quantity']) }}đ</td>
                        <td>
                            <a class="btn btn-sm btn-danger w-50 fs-6"
                                href="{{ route('home.giohang.remove', $item['id']) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <td colspan="4"></td>
                    <td>Tổng tiền:</td>
                    <td class="fw-bold text-danger">{{ number_format($cart->total_price) }}đ</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="text-end">
            <a href="{{ route('home') }}" class="btn rounded-pill fs-4" style="background: #4797b1; color: white;"><i
                    class="fas fa-arrow-left"></i>
                Tiếp tục mua hàng</a>
            <a href="{{ route('home.thanhtoan') }}" class="btn rounded-pill fs-4"
                style="background: #4797b1; color: white;"><i class="fas fa-check"></i> Thanh toán</a>
        </div>
    @else
        <p class="text-center">Chưa có sản phẩm nào trong giỏ hàng!</p>
        <a href="{{ route('home') }}" class="btn rounded-pill fs-4" style="background: #4797b1; color: white;"><i
                class="fas fa-arrow-left"></i>
            Tiếp tục mua hàng</a>
    @endif
</x-only-header>
