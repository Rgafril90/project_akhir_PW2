@extends('layout.master')

@section('title', 'Belanja')

@section('content')

    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Toko R & B Bakery</span></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="banner-shop">
                        <a href="#" class="product-thumnail">
                            <figure><img src="assets/images/tokoroti.jpg" width="1000" alt="Toko Roti R and B Bakery">
                            </figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Pilihan Rasa</h1>
                        {{-- <div class="row">
                            @foreach ($belanja as $stock)
                                <div class=col-lg-4>
                                    <a href="detail.html" title="Roti bagel">
                                        <figure><img src="assets/images/rasa bagel.jpg" alt="Roti Bagel">
                                        </figure>
                                    </a>
                                    <div>{{ $stock->roti->nama_roti }}
                                        {{ $stock->roti->rasa_roti }} {{ $stock->jumlah }}
                                        <br>{{ $stock->tanggal }}
                                    </div>
                                    <a href="#" class="btn add-to-cart">Masukan Ke
                                        Keranjang</a>
                                </div>
                            @endforeach
                        </div> --}}


                    </div>
                    <!--end wrap shop control-->

                    <!--Menampilkan Isi data Pada Stock yang dapat dijalankan utk belanja -->
                    <div class="product-info">
                        <tbody>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($stock as $item)
                                        <div class=col-lg-4>
                                            <a href="detail.html" title="Roti bagel">
                                                <figure><img src="assets/images/rasa bagel.jpg" alt="Roti Bagel">
                                                </figure>
                                            </a>
                                            <div>{{ $item->roti->nama_roti }}
                                                {{ $item->roti->rasa_roti }} {{ $item->jumlah }}
                                                <br>{{ $item->tanggal }}
                                            </div>
                                            <center><a href="#" class="btn add-to-cart">Masukan Ke
                                                    Keranjang</a></center>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </tbody>

                    </div>


                    <!--Nomor banyak barang -->
                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li class="result-count">Menampilkan Slide Pertama
                            <li>
                        </ul>
                    </div>

                </div>
                <!--end main products area-->

                <!-- Categories widget-->
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">Nama Varian (Rasa Roti) </h2>
                        <div class="widget-content">

                        </div>
                    </div>
                    <!-- End Categories widget-->

                    <!-- Rasa kategori-->
                    <div class="widget mercado-widget filter-widget">
                        <div class="widget-content">
                            <ul class="list-style vertical-list has-count-index">
                                <li class="list-item"><a class="filter-link " href="#"> Roti Bagel
                                        <span>(Keju)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Coklat)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Srikaya)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Kelapa)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Nanas)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Meses Campur)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Stroberi)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Melon)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Meses Coklat)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Rasa kategori-->

                </div>
            </div>
            <!-- brand widget-->

        </div>
        <!--end sitebar-->

        </div>
        <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

@endsection
