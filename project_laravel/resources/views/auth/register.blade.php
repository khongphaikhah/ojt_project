<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <!-- Basic register form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center">
                            <h3 class="fw-light my-4 text-center">Đăng ký</h3>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="card-body">
                            <form method="post" action="{{ route('registering') }}">
                                @csrf
                                @auth
                                <div class="mb-3 text-center">
                                    <img src="{{ auth()->user()->avatar }}" class="rounded-circle" width="64">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Họ và tên</label>
                                    <input class="form-control" type="name" disabled value="{{ auth()->user()->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Email</label>
                                    <input class="form-control " type="email" disabled
                                        value="{{ auth()->user()->email }}">
                                    <small class="form-text text-muted">
                                        Bạn cần sử dụng email này để đăng nhập và dùng trong trường hợp cần đặt lại mật
                                        khẩu.
                                    </small>
                                </div>
                                @endauth
                                @guest
                                <div class="mb-3">
                                    <label class="small mb-1">Họ và tên</label>
                                    <input class="form-control" type="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1">Email</label>
                                    <input class="form-control" type="email" name="email">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Bạn cần sử dụng email này để đăng nhập và dùng trong trường hợp cần đặt lại mật
                                        khẩu.
                                    </small>
                                </div>
                                @endguest
                                <div class="mb-3">
                                    <label class="small mb-1">Mật khẩu</label>
                                    <input class="form-control" type="password" name="password">
                                    <small class="form-text text-muted">
                                        Mật khẩu của bạn phải dài từ 8 đến 16 ký tự.
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" for="staff" value="1">
                                        <label class="form-check-label" for="staff">Nhân viên</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" for="customer"
                                            value="2">
                                        <label class="form-check-label" for="customer">Khách hàng</label>
                                    </div>
                                </div>
                                <!-- <div class="mb-3">
                                    <label class="small mb-1">Nhập lại mật khẩu</label>
                                    <input class="form-control" type="password" name="re-password">
                                </div> -->
                                <div class="mb-1">
                                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">
                                            Tôi đồng ý với các điều khoản dịch vụ và chính sách bảo mật.
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
</body>

</html>