<x-only-header title="Đăng kí tài khoản">
    <div class="box">
        <form action="{{ route('home.register.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-item">
                <h4>Đăng ký</h4>
                <input name="fullName" value="{{ old('fullName') }}" placeholder="Họ tên" type="text">
                @error('fullName')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="email" value="{{ old('email') }}" placeholder="Email" type="email">
                @error('email')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="phone" value="{{ old('phone') }}" placeholder="Số điện thoại" type="text">
                @error('phone')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="password" value="{{ old('password') }}" placeholder="Mật khẩu" type="password">
                @error('password')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="confirm_password" value="{{ old('confirm_password') }}" placeholder="Nhập lại mật khẩu"
                    type="password">
                @error('confirm_password')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <button>ĐĂNG KÝ</button>
                <p>Đã có tài khoản, đăng nhập <a href="{{ route('home.login') }}" class="text-decoration-none">tại đây</a></p>
            </div>
        </form>
    </div>
</x-only-header>
