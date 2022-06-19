@extends('Layout.master')

@section('title','pembeli')

@section('content')

<div class="container">

    <div class="wrap-breadcrumb">
        {{-- <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul> --}}
        <ul></ul>
    </div>

    {{-- Daftar yang dimasukan ke keranjang --}}
    <div class=" main-content-area">

        <div class="wrap-iten-in-cart">
            <h3 class="box-title">Products Name</h3>
            <div class="box-titl">
                <a href="{{ url('keranjang/create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <ul class="products-cart">
                <li class="pr-cart-item">


                    {{-- Awal Foreach --}}
                    @foreach($keranjang as $item)
                    <div class="product-image">
                        <img src="{{ asset('storage/'.$item->stock->foto) }}" alt="Logo" width="100px">
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="#">{{ $item->stock->roti->nama_roti }}</a>
                        <a class="link-to-product" href="#">{{ $item->stock->roti->rasa_roti }}</a>
                        <a class="link-to-product" href="#">{{ $item->jumlah }}</a>

                    </div>

                    <div class="delete">
                        <a href="#" class="btn btn-delete" title="">
                            <span>Delete from your cart</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                    @endforeach
                </li>

            </ul>
        </div>

        <div class="summary">
            <div class="checkout-info">
                <label class="checkbox-field">
                </label>
                <a class="btn btn-checkout" href="{{ url('checkout') }}">Check out</a>
                <a class="link-to-shop" href="shop.html">Continue Shopping<i class="fa fa-arrow-circle-right"
                        aria-hidden="true"></i></a>
            </div>

        </div>

    </div>
    <!--end main content area-->
</div>
<!--end container-->


@endsection