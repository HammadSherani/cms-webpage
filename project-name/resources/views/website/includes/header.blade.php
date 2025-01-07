<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        {{-- <a href="#"><img src="website/img/logo.png" alt="" /></a> --}}
    </div>

    <div class="humberger__menu__widget">

        {{-- <div class="header__top__right__auth">
          <a href="#"><i class="fa fa-user"></i> Login</a>
        </div> --}}
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{ url($marketerId) }}">Home</a></li>
            {{-- <li><a href="./shop-grid.html">New Arrival</a></li> --}}
            <li><a href="{{ route('products', ['marketerId' => $marketerId]) }}">Products</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>

        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
   
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ url($marketerId) }}">Home</a>
                        </li>
                        {{-- <li><a href="#">New Arrivals</a></li> --}}

                        <!-- this is dropdown
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Products</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                        <li><a href="{{ route('products', ['marketerId' => $marketerId]) }}">Products</a></li>
                        {{-- <li><a href="#">Contact</a></li> --}}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
