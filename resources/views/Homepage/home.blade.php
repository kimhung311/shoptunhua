@section('content')
@extends('layouts.master')
@include('layouts.header')

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                @foreach ($products as $item)
                    <div class="single-products-catagory clearfix">
                            <img src="{{ $item->image }}" alt="">
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <div class="line"></div>
                                <a href="{{ url('home/shop/'. $item->id)}}" style="color:black"><h4 style="color:black">{{ $item->category->name }}</h4>    </a>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
  
    <!-- ##### Newsletter Area End ##### -->

  
@endsection


@push('js')

@endpush
