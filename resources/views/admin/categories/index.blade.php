@extends('admin.layouts.master')
{{-- @extends('admin.layouts.css') --}}


{{-- set page title --}}
@section('title', 'List Category')

{{-- set breadcrumbName --}}
@section('breadcrumbName', 'Category Management')

{{-- set breadcrumbMenu --}}
@section('breadcrumbMenu', 'List Category')

{{-- import file css (private) --}}
@push('css')
    <link rel="stylesheet" href="/css/categories/category-list.css">
@endpush

@section('content')
<br>
<br>
<br>
<br>
    <nav aria-label="breadcrumb"style=" text-align:center">
        <ol class="breadcrumb" >
            <li class="breadcrumb-item active" aria-current="page"><h1 >List Category</h1></li>
        </ol>
   </nav>
    {{-- form search --}}

    {{-- create category link --}}
    {{-- case 1 --}}
    <p><a class="btn btn-outline-info" href="{{ route('admin.category.create') }}">Tạo Mới</a></p>
    <br>
    {{-- case 2 --}}
    {{-- <p><a href="/category/create">Create</a></p> --}}

    {{-- show message --}}
    {{-- @if(Session::has('success'))
        <p class="text-success">{{ Session::get('success') }}</p>
    @endif --}}

    {{-- show error message --}}
    @if(Session::has('error'))
        <p class="text-danger">{{ Session::get('error') }}</p>
    @endif


    {{-- display list category table --}}
    <table id="category-list" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Stt</th>
                <th>Danh Mục</th>
                <th>Sản phẩm của danh mục</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($categories))
                @foreach ($categories as $key => $category)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $category->name }}</td>
                        {{-- <td><a class="btn btn-outline-info" href="{{ route('admin.product.index', ['category_id' => $category->id]) }}">View List Category</a></td> --}}
                        {{-- <td><a class="btn btn-outline-info" href="{{ route('admin.category.show', $category->id) }}">Detail</a></td> --}}
                        <td><a class="btn btn-outline-info" href="{{ route('admin.category.edit', $category->id) }}">Chỉnh sửa</a></td>
                        <td>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="post" >
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete"  class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection