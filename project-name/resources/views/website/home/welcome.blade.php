<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>L.P.H - Welcome Pages</title>

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


<div class="welcome-page py-5" style="position: relative">
    <div class="welcome-wrapper row text-center px-3 py-5"
        style="background: linear-gradient(to right, #8074ff, #81afff);">
        <!-- Heading Section -->
        <h1 class="mt-5 pt-2 text-dark font-weight-bold" style="font-size: 2.5rem;">
            Welcome to <br>
            <span style="color: #5b34d5; font-size: 3rem;">Listing Promoters Hub</span> (L.P.H)
        </h1>
        <p class="mt-4 text-white" style="font-size: 1.2rem; line-height: 1.7; font-weight: 400;">
            Explore the latest products from the best E-commerce sellers. Your go-to place for top-tier promotions!
        </p>

        <!-- Card Section for Marketer & Manager Actions -->
        <div class="w-100 mt-5">
            <div class="row d-flex justify-content-center align-items-center">
                <!-- Marketer Card -->
                <div class="col-md-5 col-sm-12 mb-4">
                    <div class=" rounded-4 p-4" >
                        <h5 class="card-title text-center mb-4"
                            style="font-weight: 600; font-size: 1.25rem; color: #fff;">Marketer Actions</h5>
                        <div class="d-flex flex-column gap-4">
                            <a href="marketer/login">
                                <button class="btn btn-primary btn-lg w-100 rounded-3 transition-all">Login as
                                    Marketer</button>
                            </a>
                            <a href="marketer/signup">
                                <button
                                    class="btn btn-outline-primary btn-lg w-100 rounded-3 text-white transition-all">Register
                                    as Marketer</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Manager Card -->
                <div class="col-md-5 col-sm-12 mb-4">
                    <div class=" rounded-4 p-4" >
                        <h5 class="card-title text-center mb-4"
                            style="font-weight: 600; font-size: 1.25rem; color: #fff;">Manager Actions</h5>
                        <div class="d-flex flex-column gap-4">
                            <a href="manager/login">
                                <button class="btn btn-primary btn-lg w-100 rounded-3 transition-all">Login as
                                    Manager</button>
                            </a>
                            <a href="manager/register">
                                <button
                                    class="btn btn-outline-primary btn-lg w-100 rounded-3 text-white transition-all">Register
                                    as Manager</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed Contact Button -->
    <div style="position: fixed; bottom: 30px; right: 30px;">
        <button
            style="padding: 12px 25px; background-color: #25D366; border: none; border-radius: 50px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); transition: all 0.3s ease;">
            <a href="https://wa.me/+923083370076?text=Hello!%20I%20need%20help%20with%20your%20service."
                style="color: #fff; font-size: 1rem; display: flex; align-items: center; gap: 10px;">
                <i class="fa-brands fa-whatsapp"></i> Contact Us
            </a>
        </button>
    </div>
</div>

</div>




@include('website.includes.foot')
