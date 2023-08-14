<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lynx</title>
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  @stack('css')
</head>
<body id="page-top">
  <div id="wrapper">
    @include('layout.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layout.header')
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      @include('layout.footer')
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Đăng xuất?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Chọn đồng ý nếu bạn muốn đăng xuất!!!.</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="{{ route('logout') }}">Đồng ý</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>
  @stack('js')
</body>
</html>