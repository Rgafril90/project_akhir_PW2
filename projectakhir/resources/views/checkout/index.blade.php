@extends('Layout.master')

@section('title', 'pembeli')

@section('content')

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>

        {{-- //ambil Data Start --}}
        <div class="card-body">

            @foreach($keranjang as $item)
            <div class="product-image" name="keranjang_id" value="{{ $item->id }}">
                <img src="{{ asset('storage/'.$item->stock->foto) }}" alt="Logo" width="100px">

                <div class="product-name">
                    <td class="link-to-product">{{ $item->stock->roti->nama_roti }}</td>
                    <td class="link-to-product"> Rasa {{ $item->stock->roti->rasa_roti }} </td>
                    <div>
                        <td class="link-to-product">Jumlah {{ $item->jumlah }}</td>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- //ambil Data End --}}


            {{-- Input data awal --}}
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf

                <div class=" main-content-area">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Billing Address</h3>
                    </div>

                    <div class="form-group">
                        <label for="nama"> Nama <span>*</span></label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">

                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="text" class="form-control" name="email" placeholder=" Masukan Email ">

                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="noHp">No Handphone <span>*</span></label>
                        <input type="text" class="form-control" name="noHp" placeholder="Masukan Nomor Handphone">

                        @error('noHp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat <span>*</span></label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukan Nomor Handphone">

                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Input data End --}}

                    <button type="submit" class="btn btn-primary">Simpan</button>

                </div>
                <!--end main content area-->
        </div>
        <!--end container-->

</main>


@endsection