@extends('Layout.master')

@section('title','pembeli')

@section('content')

<!--Latest Products-->
<div class="wrap-show-advance-info-box style-1">
    <h3 class="title-box">Latest Products</h3>
    <div class="wrap-top-banner">
        <a href="#" class="link-banner banner-effect-2">
            <figure><img src="{{ asset('assets/images/roti enak.jpg') }}" width="600" height="240" alt="">
            </figure>
        </a>
    </div>

    <div class="product product-style-2 equal-elem ">
        <div class="product-thumnail">
            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="{{ asset('assets/images/rasa Crumpet.jpg') }}" width="200" height="1000"
                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                </figure>
            </a>
            <div class="group-flash">
                <span class="flash-item new-label">new</span>
            </div>
            <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
            </div>
        </div>
        <div class="product-info">
            <a href="#" class="product-name"><span>Rasa Crumpet</span></a>
            <div class="wrap-price"><ins>
                    <p class="product-price">Rp.10.000</p>
                </ins> <del>
                    <p class="product-price">Rp.20.000</p>
                </del></div>
        </div>
    </div>

    <div class="product product-style-2 equal-elem ">
        <div class="product-thumnail">
            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                <figure><img src="{{ asset('assets/images/rasa bagel.jpg') }}" width="200" height=" 1000"
                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                </figure>
            </a>
            <div class="group-flash">
                <span class="flash-item sale-label">sale</span>
            </div>
            <div class="wrap-btn">
                <a href="#" class="function-link">quick view</a>
            </div>
        </div>
        <div class="product-info">
            <a href="#" class="product-name"><span>Rasa Bagel</span></a>
            <div class="wrap-price"><ins>
                    <p class="product-price">Rp.8000</p>
                </ins> <del>
                    <p class="product-price">Rp.15.000</p>
                </del></div>
        </div>
    </div>

</div>


@endsection