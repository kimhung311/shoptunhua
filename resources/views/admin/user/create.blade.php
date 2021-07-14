@extends('admin.layouts.master')

{{-- set page title --}}
@section('title', 'Create User')

{{-- set breadcrumbName --}}
@section('breadcrumbName', 'create user')

{{-- import file css (private) --}}
@push('css')
    <link rel="stylesheet" href="/admin/css/product/product-create.css">
@endpush
 
@section('content')
    <h4> Tạo Tài Khoản</h4>
    
    @include('errors.error')
    
    <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-5">
            <label for="">Tên người dùng</label>
            <input type="text" name="name" placeholder=" Enter Product name" value="{{ old('name') }}" class="form-control">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for="">Email</label>
            <input type="text" name="email" placeholder=" Enter Product email" value="{{ old('email') }}" class="form-control">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <label for="">Password</label>
            <input type="password" name="password" placeholder=" Enter Product password" class="form-control">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

           <div class="div">
            <input type="radio" id="vehicle1" name="role_id" value="0">
            <h3><label for="vehicle1">Admins</label></h3>
            <input type="radio" id="vehicle2" name="role_id" value="1">
            <h3><label for="vehicle2"> Editer</label></h3>
            <input type="radio" id="vehicle3" name="role_id" value="2">
            <h3><label for="vehicle3">Shipper</label></h3>
            </div> 
        <button type="submit" class="btn btn-primary">Tạo</button>
    </form>
@endsection