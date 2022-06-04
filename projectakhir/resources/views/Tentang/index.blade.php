@extends('layout.master')

@section('title', 'Stock')

@section('content')

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Contact us</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <!-- <div class="main-content-area"> -->
        <div class="aboutus-info style-center">
            <b class="box-title">R & B Bakery</b>
            <p class="txt-content">Merupakan Toko roti yang menyediakan roti segar dan enak,yang memiliki banyak varian
                rasa,seperti
                rasa bagel,baguette,Ciabatta,Croissant,Crumpet,Focaccia,Limpa,Mufin dan lainnya.untuk harga sesuai dengan
                varian rasa nya.
            </p>
        </div>

        <div class="row equal-container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">10.000</b>
                    <span class="sub-title">Habis Terjual</span>
                    <p class="desc">Dalam 1 tahun Terakhir</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">75%</b>
                    <span class="sub-title">Pelanggan Tetap</span>
                    <p class="desc">Dalam 1 tahun Terakhir</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-box-score equal-elem ">
                    <b class="box-score-title">25%</b>
                    <span class="sub-title">Pelanggan Biasa</span>
                    <p class="desc">Dalam 1 tahun Terakhir</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">Biodata </b>
                    <p class="txt-content">Foto Pribadi
                    </p>
                </div>
                <div class="aboutus-info style-small-left">

                    <p class="txt-content">Nama : Boy Putra
                        Hobi : Olahraga
                        Instagram : @Boy_putra02
                        Alamat : Jln Merdeka No 341.
                        TTL : Palembang,1 Januari 1999
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">Biodata</b>
                    <p class="txt-content">Foto Pribadi</p>
                </div>
                <div class="aboutus-info style-small-left">

                    <p class="txt-content">Nama : Riganda Saputra
                        Hobi : Ngoding
                        Instagram : @riganda
                        Alamat : Jln Ampera No 123.
                        TTL : Selapan,19 Oktober 1999
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <b class="box-title">Visi Misi R & B Bakery</b>
                    <div class="list-showups">
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1"
                                checked="checked">
                            <span class="check-box"></span>
                            <span class='function-name'>Visi R & B Bakery</span>
                            <span class="desc">Menjadi online marketplace nomor 1 di Indonesia</span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                            <span class="check-box"></span>
                            <span class='function-name'>Misi R & B Bakery</span>
                            <span class="desc">Meningkatkan promosi produk melalui media online maupun dengan
                                media promosi lain</span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                            <span class="check-box"></span>
                            <span class='function-name'>Target</span>
                            <span class="desc">Dapat menjual Roti 15.000 dalam 1 Tahun </span>
                        </label>
                        <label>
                            <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                            <span class="check-box"></span>
                            <span class='function-name'>Tujuan</span>
                            <span class="desc">Agar Dapat mempermudah pelanggan dalam membeli Roti</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-team-info">
            <h4 class="title-box">HORMAT KAMI</h4>
            <div class="our-staff">
                <div class="slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false"
                    data-nav="true" data-dots="false" data-margin="30"
                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}'>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="LEONA">
                                <figure><img src="assets/images/member-leona.jpg" alt="LEONA"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">leona</b>
                            <span class="title">Director</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="LUCIA">
                                <figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">LUCIA</b>
                            <span class="title">Manager</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="NANA">
                                <figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">NANA</b>
                            <span class="title">Marketer</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="BRAUM">
                                <figure><img src="assets/images/member-braum.jpg" alt="BRAUM"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">BRAUM</b>
                            <span class="title">Member</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="LUCIA">
                                <figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">LUCIA</b>
                            <span class="title">Manager</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                    <div class="team-member equal-elem">
                        <div class="media">
                            <a href="#" title="NANA">
                                <figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
                            </a>
                        </div>
                        <div class="info">
                            <b class="name">NANA</b>
                            <span class="title">Marketer</span>
                            <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- </div> -->
    </div>
    <!--end container-->

@endsection
