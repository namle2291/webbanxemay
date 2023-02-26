<x-only-header title="Tin tức">
    <div class="row">
        <div class="col-lg-9">
            <div class="row mt-5">
                @if ($post->count() > 0)
                    @foreach ($post as $item)
                        <div class="col-lg-6 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{ route('home.new_detail', $item->id) }}">
                                        <img src="/storage/post/{{ $item->image }}"
                                            class="card-img-top shadow-sm border border-2" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="{{ route('home.new_detail', $item->id) }}" class="text-dark">
                                        <h2>{{ $item->title }}</h2>
                                    </a>
                                    <p class="h4">{{ $item->description }}</p>
                                    <p class="h5 text-secondary" style="font-size: 13px;">
                                        {{ $item->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-danger text-center">Chưa có bài viết</p>
                @endif
            </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block ps-5">
            <div class="row">
                <h2>BÀI VIẾT MỚI NHẤT</h2>
                @foreach ($post_new as $item)
                    <div class="col-12 mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="{{ route('home.new_detail', $item->id) }}">
                                    <img src="/storage/post/{{ $item->image }}"
                                        class="card-img-top shadow-sm border border-2" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <a href="{{ route('home.new_detail', $item->id) }}" class="text-dark">
                                    <h4 class="fw-bold">{{ $item->title }}</h4>
                                </a>
                                <p class="h5">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-only-header>
