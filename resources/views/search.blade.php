<x-only-header title="Tìm kiếm">
    <div class="row pt-3">
        <div class="col-lg-3">
            <x-list-category />
        </div>
        <div class="col-lg-9">
            <div class="row">
                @if ($product->count() == null)
                <p class="text-danger text-center">Không tìm thấy sản phẩm!</p>
                @else
                @foreach ($product as $item)
                <div class="col-lg-3 col-md-4 col-6 mb-2">
                    <div class="product card">
                        <img src="{{asset('/storage/images/'.$item->image)}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body text-center">
                            <h6 class="card-title">{{$item->name}}</h6>
                            <span class="text-danger fw-bold">{{number_format($item->price)}} VND</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</x-only-header>