<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>L.P.H - All Products</title>

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


    <div class="product-detail my-5 px-xl-5">
        <div class="container-fluid  px-xl-5">
            <div class="row my-5 px-lg-5 px-1">
                <div class="col-md-3">
                    <div class="filter-form">

                        <h6 class="mb-3">
                            Search By Filter
                        </h6>
                        <form action="#" method="GET">
                            <div class="mb-3">
                                <label for="product_id" class="form-label">Product ID</label>
                                <input type="text" class="form-control" id="product_id" name="product_id"
                                    placeholder="Enter Product ID" value="{{ request()->get('product_id') }}">
                            </div>

                            <div class="mb-3">
                                <label for="keyword" class="form-label">Keyword</label>
                                <input type="text" class="form-control" id="keyword" name="keyword"
                                    placeholder="Enter keyword" value="{{ request()->get('keyword') }}">
                            </div>

                            
                            <select class="form-select" id="category" name="category" style="max-height: 200px; overflow-y: auto;">
                                <option value="" disabled {{ !request()->get('category') ? 'selected' : '' }}>Select Category</option>
                                <option value="all" {{ request()->get('category') == 'all' ? 'selected' : '' }}>All</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->title }}" {{ request()->get('category') == $category->title ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            

                            <div class="mb-3">
                                <select class="form-select" id="market" name="market">
                                    <option value="" disabled {{ !request()->get('market') ? 'selected' : '' }}>
                                        Select Market</option>
                                    <option value="all" {{ request()->get('market') == 'all' ? 'selected' : '' }}>
                                        All</option>
                                    @foreach ($markets as $market)
                                        <option value="{{ $market->title }}"
                                            {{ request()->get('market') == $market->title ? 'selected' : '' }}>
                                            {{ $market->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Apply Filter</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="row">

                        <div class="col-12 mb-4">
                            <h3>Products</h3>
                        </div>

                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="px-1 mix col-md-4 mb-3">
                                    <div class="card product-card"
                                        style="width: 100%; margin: auto; border: 1px solid #ddd; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                        <img src="{{env('main_url')}}/uploads/product/images/{{$product->product_picture}}"
                                            class="card-img-top" alt="Product Image"
                                            style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: bold; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                                                {{ \Illuminate\Support\Str::words($product->keyword, 20) }}
                                            </h5>
                                            <p class="card-text text-muted mb-0" style="font-size: 0.9rem;">Brand:
                                                {{ $product->brand_name }}</p>
                                            <p class="card-text mb-0">Category: <span
                                                    class="text-primary">{{ $product->category->title }}</span></p>
                                            <p class="card-text text-success"
                                                style="margin-bottom: 6px; font-weight: 600;">Market:
                                                {{ $product->market->title }}</p>
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
                                                    <b>Note: </b> This is an expensive product. Contact the marketer to
                                                    order this.
                                                </p>
                                            @endif
                                            @if ($product->todayAvailables() <= 0)
                                                <p class="text-danger mb-0 lh-1" style="font-size: 14px">
                                                    <b>Note: </b> The daily sale limit for this product is achieved.
                                                    Please check after a few hours.
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <p class="text-center text-danger">No products found for the selected filters.</p>
                            </div>
                        @endif


                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="pagination">
                                {{ $products->links() }}
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>




    @include('website.includes.footer')
    @include('website.includes.foot')
