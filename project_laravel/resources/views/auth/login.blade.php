<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>
<body>
    <div class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center">
                            <h3 class="fw-light my-4 text-center">Đăng nhập</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('logining') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-1">Email</label>
                                    <input class="form-control" type="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1">Mật khẩu</label>
                                    <input class="form-control" id="password" type="password" name="password" required>
                                    <!-- <div class="d-flex align-items-center">
                                        <input class="form-control" id="password" type="password" name="password" required>
                                        <div class="show-password" data-password="false">
                                            <span id="btn-password" onclick="showPassword()" data-hidden="1">
                                                <i class="fas fa-eye" style="color: #cfcfcf;margin-left:-30px;"></i>
                                            </span>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" style="margin-top: 6px;">
                                        <label class="form-check-label">Lưu mật khẩu</label>
                                    </div>
                                    <div>
                                        <a href="#">Quên mật khẩu?</a>
                                    </div>
                                </div>                                
                                <div class="mt-3 text-center">
                                    <p></p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <a href="{{ route('auth.redirect', 'github') }}"><i class="fab fa-github"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                    <a href="{{ route('auth.redirect', 'gitlab') }}"><i class="fab fa-gitlab"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-linkedin"></i>
                                    </button>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="small">
                                <a href="{{ route('register') }}">Bạn chưa có tài khoản? Bấm vào đây để đăng ký!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- <script>
        function showPassword() {
            if($("#btn-password").data('hidden') == 1) {
                $("#password").attr('type', 'text');
                $("#btn-password").data('hidden', 0);
            } else {
                $("#password").attr('type', 'password');
                $("#btn-password").data('hidden', 1);
            }
        }
    </script> -->
</body>
</html>