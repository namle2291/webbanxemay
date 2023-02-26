<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/home/css/login.css">
    <style>
        body {
            background: url('https://www.sailsrestaurants.com/_cms3/wwwroot/adminPublicFiles/design/cms3admin-background-01.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .box {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #EDEDED;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 20px #333;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="{{ route('admin.store_register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-item">
                <h4>Đăng ký Admin</h4>
                <input name="fullName" value="{{ old('fullName') }}" placeholder="Họ tên" type="text">
                @error('fullName')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="email" value="{{ old('email') }}" placeholder="Email" type="email">
                @error('email')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="phone" value="{{ old('phone') }}" placeholder="Số điện thoại" type="phone">
                @error('phone')
                    <span style="color: red; font-size: 13px;">{{ $message }}</span>
                @enderror
                <input name="address" value="{{ old('address') }}" placeholder="Địa chỉ" type="address">
                @error('address')
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
                <p>Đã có tài khoản, đăng nhập <a href="{{ route('admin.login') }}" class="text-decoration-none">tại
                        đây</a></p>
            </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
