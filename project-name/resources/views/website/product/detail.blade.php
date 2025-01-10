<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>L.P.H - Product Details</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet" />


    <!-- Favicon -->


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

    <!-- Css Styles -->

    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" type="text/css" />
</head>

<body>

    <ul class="notifications"></ul>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('website.includes.header')


    <!--
    Breadcrumb Section Begin
    <section class="breadcrumb-section set-bg" data-setbg="/website/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product__details__pic">
                                <h4 class="text-center mb-2">Product Image</h4>
                                <div class="product__details__pic__item">
                                    <img class="product__details__pic__item--large"
                                        src="{{env('main_url')}}/uploads/product/images/{{$product->product_picture}}"
                                        alt="product-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="product__details__pic">
                                <h4 class="text-center mb-2">Amazon Product Image</h4>
                                <div class="product__details__pic__item">
                                    <img class="product__details__pic__item--large"
                                        src="{{env('main_url')}}/uploads/product/images/{{$$product->amazon_picture}}"
                                        alt="amazon-product-pic">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="product__details__text">
                        <h5 class="card-title"
                            style="font-weight: bold; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                            {{ \Illuminate\Support\Str::words($product->keyword, 20) }} </h5>



                            <p class="mb-1">
                                <Strong>Keyword:</Strong>
                                {{ $product->keyword }}
                            </p>
                            <p class="mb-1">
                                <Strong>Sold by: </Strong>
                                {{ $product->amazon_seller_name }}
                            </p>
                            <p class="mb-1">
                                <Strong>Brand Name: </Strong>
                                {{ $product->brand_name }}
                            </p>
                            {{-- <p class="mb-3 manager-whatsapp">
                            <Strong>Contact Manager on WhatsApp:</Strong>
                            <a href="https://wa.me/{{ $product->manager->phone }}" target="_blank" >
                                {{ $product->manager->name }}
                            </a>
                        </p> --}}




                            <div>
                                <h6><strong>Refund Condition :</strong></h6>
                                <p class="mb-3">
                                    {{ $product->refund_conditions }}
                                </p>
                            </div>
                            <div>
                                <h6> <strong> Instruction: </strong></h6>
                                <p class="mb-3">
                                    {{ $product->instructions }}
                                </p>
                            </div>


                            @if ($product->todayAvailables() <= 0)
                                <button type="button" class="primary-btn">Buy Now</button>
                            @else
                                <a href="{{ route('buy-form', ['id' => $product, 'marketerId' => $marketerId]) }}"
                                    class="primary-btn">Buy Now</a>
                            @endif
                            <a href="{{ url($marketerId) }}" class="primary-btn-2">Cancel</a>
                            @if ($product->exclusive == 1)
                                <p class="text-danger mb-0">
                                    <b>Note: </b> This is an expensive product contact marketer to order this.
                                </p>
                            @endif
                            @if ($product->todayAvailables() <= 0)
                                <p class="text-danger">
                                    <b>Note: </b> The daily sale limit for this product is achieved please check after
                                    few
                                    hours.
                                </p>
                            @endif




                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .manager-whatsapp a:hover {
            color: blue !important
        }
    </style>





    @include('website.includes.footer')
    @include('website.includes.foot')
