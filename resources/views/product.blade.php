<x-only-header title="Sản phẩm">
    <div class="row pt-3">
        <div class="col-lg-3">
            <x-list-category />
        </div>
        <div class="col-lg-9">
            <div class="row">
                @if ($product->count()>0)
                @foreach ($product as $item)
                <div class="col-lg-3 col-md-4 col-6 mb-2">
                    <div class="product card shadow-sm border-0">
                        <div style="height: 140px;" class="d-flex align-items-center">
                            <a href="">
                                <img src="{{asset('/storage/images/'.$item->image)}}"
                                style="object-fit: contain; width: 100%; height: 140px;" alt="">
                            </a>
                        </div>
                        <div class="card-body text-center mt-3">
                            <h6 class="card-title">{{$item->name}}</h6>
                            <span class="text-danger fw-bold">{{number_format($item->price)}} VND</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p class="text-center text-danger">Đang cập nhật...</p>
                @endif
            </div>
        </div>
    </div>
</x-only-header>