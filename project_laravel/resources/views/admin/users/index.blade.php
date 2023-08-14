@extends('layout.master')
@push('css')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<h1 class="h3 mb-2 text-gray-800">Người dùng</h1>
<div class="card card-header-actions">
    <div class="card-header">
        <form id="form-filter">
            <div class="row align-items-center" >
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <select class="form-control select-filter" id="role" name="role">
                            <option selected>Tất cả</option>
                            @foreach($roles as $role => $value)
                                <option value="{{ $value }}" @if((string)$value === $selectedRole) selected @endif>
                                    {{ $role }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-10"></div>            
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ảnh</th>                       
                        <th>Tên</th>                       
                        <th>Giới tính</th>                       
                        <th>Số điện thoại</th>                       
                        <th>Chức vụ</th>                       
                        <th>Xóa</th>                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $each)
                    <tr>
                        <td>{{ $each->id }}</td>
                        <td><img src="{{ $each->avatar }}" width="80" height="80"></td>
                        <td>{{ $each->name }}</td>
                        <!-- <td><a class="text-secondary" href="#">{{ $each->name }}</a></td> -->
                        <td>{{ $each->gender_name }}</td>
                        <td>{{ $each->phone }}</td>
                        <td>{{ $each->role_name }}</td>
                        <td>
                            <form action="{{ route("admin.$table.destroy", $each) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link" onclick="return confirm('Ảe u sủe ?')">
                                    <img src="{{ asset('images/delete.png') }}">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('js/datatables-demo.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".select-filter").change(function() {
            $("#form-filter").submit();
        });
    });
</script>
@endpush