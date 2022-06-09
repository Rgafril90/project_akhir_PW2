@extends('Layout.master')

@section('title', 'pembeli')

@section('content')

<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Hubungi</span></li>
            </ul>
        </div>
        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Tinggalkan Pesan</h2>

                            {{-- //Input Data Start --}}
                            <div class="card-body">
                                <form action="{{ route('hubungi.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="nama"> Nama <span>*</span></label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">

                                        @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email<span>*</span></label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder=" Masukan Email ">

                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="noHp">No Handphone <span>*</span></label>
                                        <input type="text" class="form-control" name="noHp"
                                            placeholder="Masukan Nomor Handphone">

                                        @error('noHp')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">

                                        <label for="komentar"> Komentar <span>*</span></label>
                                        <textarea class="form-control" name="komentar"></textarea>

                                        @error('komentar')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- //Input Data End --}}

                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                <div class="mercado-google-maps" id="az-google-maps57341d9e51968" data-hue=""
                                    data-lightness="1" data-map-style="2" data-saturation="-100"
                                    data-modify-coloring="false" data-title_maps="Kute themes"
                                    data-phone="088-465 9965 02" data-email="kutethemes@gmail.com"
                                    data-address="Z115 TP. Thai Nguyen" data-longitude="-0.120850"
                                    data-latitude="51.508742" data-pin-icon="" data-zoom="16" data-map-type="ROADMAP"
                                    data-map-height="263">
                                </div>
                            </div>
                            <h2 class="box-title">RINCIAN KONTAK</h2>
                            <div class="wrap-icon-box">

                                <div class="icon-box-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Email</b>
                                        <p>R&B_Bakery@Gmail.com</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>Phone</b>
                                        <p>0123-465-789-111</p>
                                    </div>
                                </div>

                                <div class="icon-box-item">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="right-info">
                                        <b>R & B Bakery</b>
                                        <p>Jalan Rajawali Seberang Univ MDP<br />Kota Palembang, Sumatera Selatan</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end main products area-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>


@endsection