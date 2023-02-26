<x-only-header title="Đăng nhập">
    <div class="row my-5">
        <div class="col-5 m-auto">
            <form action="{{route('home.login.store')}}" method="post">
                @csrf
                <div class="card p-4">
                    <h6>Đăng nhập</h6>
                    <x-input name="email" label="Email"/>
                    <x-input name="password" type="password" label="Mật khẩu"/>
                    <button class="btn btn-dark w-100">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</x-only-header>
