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
                        <a href="#" class="banner-link">
                            <figure><img src="assets/images/tokoroti.jpg" width="1000"></figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Pilihan Rasa</h1>

                        <div class="wrap-right">
                        </div>

                    </div>
                    <!--end wrap shop control-->

                    <!--Gambar List -->
                    <div class="row">
                        <ul class="product-list grid-products equal-container">
                            <!--List 1 -->

                            <ul class="product-list grid-products equal-container">
                                <!--List 1 -->
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/rasa bagel.jpg"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <tbody>
                                                @foreach ($belanja as $item)
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->stock->roti->nama_roti }}</td>
                                                    <td>{{ $item->stock->roti->rasa_roti }}</td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <a href="#" class="btn add-to-cart">Masukan Ke
                                                Keranjang</a>
                                        </div>
                                    </div>
                                </li>

                                <!--End List 1 -->

                                {{-- <!--List 2 -->
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/rasa Croissant.jpg"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Roti
                                                Croissant</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Masukan Ke
                                            Keranjang</a>
                                    </div>
                                </div>
                            </li>
                            <!--End List 2 -->

                            <!--List 3 -->
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="assets/images/rasa mufin.jpg"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Roti mufin</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        <a href="#" class="btn add-to-cart">Masukan Ke Keranjang</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!--End List 3 --> --}}
                    </div>

                    <!--Nomor banyak barang -->
                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                    <!-- End Nomor banyak barang -->

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
                                        <span>(Meses Stroberi)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Roti Bagel
                                        <span>(Meses Melon)</span></a>
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
