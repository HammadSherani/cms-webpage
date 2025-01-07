<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>L.P.H - Home</title>

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

    {{-- <section>
    <div class="conatiner-md">
        <img src="website/img/banner/banner-4.jpg" alt="">
    </div>
</section> --}}





    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>New Arrivals</h2>
                    </div>
                    <div class="featured__controls">
                        {{-- <ul>
                            <li class="active" data-filter="*">All</li>
                            <li class="" data-filter="*">MKT 1 </li>
                            <li class="" data-filter="*">MKT 2</li>
                            <li class="" data-filter="*">MKT 3</li>
                            <li class="" data-filter="*">MKT 4</li>
                            <li class="" data-filter="*">MKT 5</li>
                            <li class="" data-filter="*">MKT 6</li>
                            <li class="" data-filter="*">MKT 7</li>
                            <li class="" data-filter="*">MKT 8</li>
                            <li class="" data-filter="*">MKT 9</li>
                            <li class="" data-filter="*">MKT 10</li>
                            <li class="" data-filter="*">MKT 11</li>
                        </ul> --}}
                    </div>
                </div>
            </div>

            <!-- Categories Section Begin -->
            <section class="categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="categories__slider owl-carousel row">
                                @foreach ($latestProducts as $todayProducts)
                                    <div class="px-1 mix oranges fresh-meat">
                                        <div class="card product-card"
                                            style="width: 100%; margin: auto; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                            <img src="{{env('main_url')}}/uploads/product/images/{{$todayProducts->product_picture}}"
                                                class="card-img-top" alt="Product Image"
                                                style="height: 200px; object-fit: cover;">
                                            <div class="card-body">
                                                <h5 class="card-title"
                                                    style="font-weight: bold; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                                                    {{ \Illuminate\Support\Str::words($todayProducts->keyword, 20) }}
                                                </h5>
                                                <p class="card-text text-muted mb-0" style="font-size: 0.9rem;">Brand:
                                                    {{ $todayProducts->brand_name }}</p>
                                                <p class="card-text mb-0">Category: <span
                                                        class="text-primary">{{ $todayProducts->category->title }}</span>
                                                </p>
                                                <p class="card-text text-success"
                                                    style="margin-bottom: 6px; font-weight: 600;">Market:
                                                    {{ $todayProducts->market->title }}
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    @if ($todayProducts->todayAvailables() <= 0)
                                                        <button type="button"
                                                            class="btn btn-danger rounded-pill m-1">Buy
                                                            Now</button>
                                                    @else
                                                        <a href="{{ route('buy-form', ['id' => $todayProducts, 'marketerId' => $marketerId]) }}"
                                                            class="btn btn-primary rounded-pill m-1">Buy Now</a>
                                                    @endif
                                                    <button class="btn btn-secondary rounded-pill m-1">
                                                        <a
                                                            href="{{ route('productDetail', ['id' => $todayProducts->id, 'marketerId' => $marketerId]) }}">View
                                                            Now</a>
                                                    </button>
                                                </div>
                                                <div class="product-review">
                                                    <span
                                                        class="text-capitalize">{{ $todayProducts->service_type }}</span>
                                                </div>
                                                @if ($todayProducts->exclusive == 1)
                                                    <p class="text-danger mb-0 lh-1" style="font-size: 14px">
                                                        <b>Note: </b> This is an expensive product contact marketer to
                                                        order
                                                        this.
                                                    </p>
                                                @endif

                                                @if ($todayProducts->todayAvailables() <= 0)
                                                    <p class="text-danger mb-0 lh-1" style="font-size: 14px">
                                                        <b>Note: </b> The daily sale limit for this product is achieved
                                                        please check
                                                        after few
                                                        hours.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                        <div class="featured__item card">
                                            <div class="featured__item__pic set-bg">
                                                <img src="{{ asset('uploads/product/images/' . $todayProducts->product_picture) }}"
                                                    alt="" class="img-fluid rounded">
                                            </div>
                                            <div class="featured__item__text text-center">
                                                <h6><a href="#"
                                                        class="text-dark">{{ $todayProducts->keyword }}</a>
                                                </h6>
                                                <div class="d-flex justify-content-center">
                                                    @if ($todayProducts->todayAvailables() <= 0)
                                                        <button type="button"
                                                            class="btn btn-danger rounded-pill m-1">Buy
                                                            Now</button>
                                                    @else
                                                        <a href="{{ route('buy-form', ['id' => $todayProducts, 'marketerId' => $marketerId]) }}"
                                                            class="btn btn-primary rounded-pill m-1">Buy Now</a>
                                                    @endif
                                                    <button class="btn btn-secondary rounded-pill m-1">
                                                        <a
                                                            href="{{ route('productDetail', ['id' => $todayProducts->id, 'marketerId' => $marketerId]) }}">View
                                                            Now</a>
                                                    </button>
                                                </div>

                                                @if ($todayProducts->exclusive == 1)
                                                    <p class="text-danger mb-0" style="font-size: 14px">
                                                        <b>Note: </b> This is an expensive product contact marketer to
                                                        order
                                                        this.
                                                    </p>
                                                @endif

                                                @if ($todayProducts->todayAvailables() <= 0)
                                                    <p class="text-danger mb-0" style="font-size: 14px">
                                                        <b>Note: </b> The daily sale limit for this product is achieved
                                                        please check
                                                        after few
                                                        hours.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div> --}}
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Featured Section Begin -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-items-center justify-content-between mb-4" style="display: flex;">
                    <div class="section-titl">
                        <h2>All Products</h2>
                    </div>
                    <div class="featured__control">
                        <div>
                            <button class="btn btn-primary mb-0" style="margin-bottom: 0px !important">
                                <a href="{{ route('products', ['marketerId' => $marketerId]) }}">
                                    View Products
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="px-md-1 px-2 mix col-md-3 mb-3">
                                <div class="card product-card"
                                    style="width: 100%; margin: auto; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                    <img src="{{ asset('uploads/product/images/' . $product->product_picture) }}"
                                        class="card-img-top" alt="Product Image"
                                        style="height: 200px; object-fit: cover;">


                                    <div class="card-body">
                                        <h5 class="card-title"
                                            style="font-weight: bold; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                                            {{ \Illuminate\Support\Str::words($product->keyword, 20) }}
                                        </h5>


                                        <p class="card-text text-muted mb-0" style="font-size: 0.9rem;">Brand:
                                            {{ $product->brand_name }}</p>
                                        <p class="card-text mb-0">Category: <span
                                                class="text-primary">{{ $product->category->title }}</span></p>
                                        <p class="card-text text-success"
                                            style="margin-bottom: 6px; font-weight: 600;">Market:
                                            {{ $product->market->title }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            @if ($product->todayAvailables() <= 0)
                                                <button type="button" class="btn btn-danger rounded-pill m-1">Buy
                                                    Now</button>
                                            @else
                                                <a href="{{ route('buy-form', ['id' => $product, 'marketerId' => $marketerId]) }}"
                                                    class="btn btn-primary rounded-pill m-1">Buy Now</a>
                                            @endif
                                            <button class="btn btn-secondary rounded-pill m-1">
                                                <a
                                                    href="{{ route('productDetail', ['id' => $product->id, 'marketerId' => $marketerId]) }}">View
                                                    Now</a>
                                            </button>
                                        </div>
                                        <div class="product-review">
                                            <span class="text-capitalize">{{ $product->service_type }}</span>
                                        </div>
                                        @if ($product->exclusive == 1)
                                            <p class="text-danger mb-0 lh-1" style="font-size: 14px">
                                                <b>Note: </b> This is an expensive product contact marketer to
                                                order
                                                this.
                                            </p>
                                        @endif

                                        @if ($product->todayAvailables() <= 0)
                                            <p class="text-danger mb-0 lh-1" style="font-size: 14px">
                                                <b>Note: </b> The daily sale limit for this product is achieved
                                                please check
                                                after few
                                                hours.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 mb-2 align-items-center d-flex justify-content-between"
                            style="display: flex;">
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>



    <!-- Featured Section End -->

    <!-- Banner Begin -->
    {{-- <div class="banner mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                <div class="banner__pic">
                    <img src="website/img/banner/banner-4.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                <div class="banner__pic">
                    <img src="website/img/banner/banner-1.jpg" alt="" />
                </div>
            </div>

        </div>
    </div>
</div> --}}
    <!-- Banner End -->




    <script>
        // Open modal using JavaScript
        document.getElementById('openModalBtn').addEventListener('click', function() {
            $('#exampleModal').modal('show');
        });
    </script>



    @include('website.includes.footer')
    @include('website.includes.foot')
