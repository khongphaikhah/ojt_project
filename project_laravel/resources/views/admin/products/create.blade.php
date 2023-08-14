@extends('layout.master')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endpush
@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt-5">
        <!-- @if($errors->any())
            <div class="card-header">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif -->
        <form action=" {{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="category_id" id="floatingInput">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                <label for="floatingInput">Danh mục</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name">
                <label for="floatingInput">Tên</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="price">
                <label for="floatingInput">Giá</label>
            </div>
            <div class="form-floating mb-3">
                <textarea type="text" class="form-control" id="floatingInput" name="description"></textarea>
                <label for="floatingInput">Mô tả</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" name="date">
                <label for="floatingInput">Ngày</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="floatingInput" name="image">
                <label for="floatingInput">Ảnh</label>
            </div>
            <button class="btn btn-primary btn-user btn-block">Thêm</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
@endsection
@push('js')

@endpush