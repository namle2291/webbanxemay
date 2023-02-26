<x-admin title="Đơn hàng">
    <table class="table shadow mt-2">
        <thead class="bg-info text-light">
            <tr>
                <th>#</th>
                <th>Khách hàng</th>
                <th>Ghi chú</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt hàng</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $item)
                <tr>
                    <td style="vertical-align: middle;">{{ $item->id }}</td>
                    <td style="vertical-align: middle;" class="d-flex align-items-center">
                        <img src="/storage/avatar/{{ $item->customer->avatar }}" class="rounded-circle shadow-sm"
                            width="60" height="60" alt="">
                        <div>
                            <span class="ms-2">{{ $item->fullName }}</span> <br>
                            <span class="ms-2">{{ $item->email }}</span>
                        </div>
                    </td>
                    <td style="vertical-align: middle;">{{ $item->note }}</td>
                    <td style="vertical-align: middle;" class="fw-bold">{{ number_format($item->total) }}đ</td>
                    <td style="vertical-align: middle;">{{ $item->created_at->format('d/m/Y') }}</td>
                    <td style="vertical-align: middle;">
                        <span class="badge" style="background: {{ $item->order_status->color }};">{{ $item->order_status->name }}</span>
                    </td>
                    <td style="vertical-align: middle;">
                        <a href="{{ route('admin.order.detail', $item->id) }}" class="btn btn-sm btn-info shadow">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.order.edit', $item->id) }}" class="btn btn-sm btn-warning shadow">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('admin.order.delete', $item->id) }}" class="btn btn-sm btn-danger shadow">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin>
