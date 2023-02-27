<x-admin title="Danh mục">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-6">
            <a href="{{ route('admin.product.add') }}" class="btn btn-success text-light btn-sm shadow">
                <i class="fas fa-plus"></i> Thêm mới
            </a>
        </div>
        <div class="col-lg-4">
            <form action="{{ route('admin.product.product_category') }}">
                <div class="d-flex">
                    <select class="form-select" name="categoryId">
                        <option value="" selected disabled>Lọc theo</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" {{ $key == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <button class="btn btn-sm btn-secondary w-25"><i class="fas fa-filter"></i> Lọc</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table shadow mt-2" id="vueDataProduct">
        <thead class="bg-info text-light">
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Thuộc tính</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>Hãng xe</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        <img src="/storage/images/{{ $item->image }}" width="80" class="shadow-sm rounded"
                            alt="" />
                        <span>{{ $item->name }}</span>
                    </td>
                    <td><a href="{{route('admin.attribute.add',$item->id)}}" class="btn btn-sm btn-outline-success">Thêm thuộc tính</a></td>
                    <td class="text-danger fw-bold">{{ number_format($item->price) }} VND</td>
                    <td>{{ $item->inStock ?? 0 }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->brand->name }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-sm btn-warning shadow">
                            Sửa
                        </a>
                        <a href="{{ route('admin.product.delete', $item->id) }}" class="btn btn-sm btn-danger shadow">
                            Xóa
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.product') }}" class="btn btn-secondary mt-3"><i class="fas fa-chevron-circle-left"></i>
        Trở lại</a>
</x-admin>
