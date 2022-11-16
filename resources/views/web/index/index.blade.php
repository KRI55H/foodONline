@extends('web.master')
@section('title',"Home | foodONline")
@section('content')
    <!-- header content for laptop -->
    <div class="header-container">
        <div class="header-body justify-content-end align-items-center">
            <div class="header-content">
                <div class="text-center">
                    <img src="{{asset('public/assets/img/logo.png')}}" alt="foodONline" srcset="">
                </div>
                <h4 class="tagline">TAKE A BITE OUT OF <b><span class="text-danger">HUNGER.</span></b></h4>
            </div>
        </div>
    </div>

    <!-- header content for mobile view -->
    <div class="mobile-header-container">
        <div class="mobile-header-body">
            <div class="mobile-header-content">
                <div>
                    <div class="text-center">
                        <img src="{{asset('public/assets/img/logo.png')}}" alt="foodONline" srcset="">
                    </div>
                    <h4 class="mobile-tagline">TAKE A BITE OUT OF <b><span class="text-danger">HUNGER.</span></b></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials" id="t-menu">
        <div class="row">
            <div class="col-md-3 col-auto">
                <div class="t-card">
                    <div class="card-head">
                        <div class="t-img shadow">
                            <img src="{{asset('public/assets/img/icons/fresh-food.png')}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <span>Fresh Food</span>
                    </div>
                    <div class="card-footer">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur suscipit repudiandae facilis incidunt unde saepe</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-auto">
                <div class="t-card">
                    <div class="card-head">
                        <div class="t-img shadow">
                            <img src="{{asset('public/assets/img/icons/stafff.png')}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <span>Friendly Staff</span>
                    </div>
                    <div class="card-footer">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur suscipit repudiandae facilis incidunt unde saepe</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-auto">
                <div class="t-card">
                    <div class="card-head">
                        <div class="t-img shadow">
                            <img src="{{asset('public/assets/img/icons/resurvation.png')}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <span>Easy Resurvation</span>
                    </div>
                    <div class="card-footer">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur suscipit repudiandae facilis incidunt unde saepe</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-auto">
                <div class="t-card">
                    <div class="card-head">
                        <div class="t-img shadow">
                            <img src="{{asset('public/assets/img/icons/fast-delivery.png')}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <span>Fast Delivery</span>
                    </div>
                    <div class="card-footer">
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur suscipit repudiandae facilis incidunt unde saepe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popular items -->
    <div class="popular-items" id="popular">
        <div class="popular-item-container">
            <div class="popular-items-head justify-content-center align-items-center">
                <div class="d-block text-center">
                    <h1 class="popitems-head-title">POPULAR ITEMS</h1>
                    <h6>Try the delicious new dishes from our chef.</h6>
                </div>
            </div>
            <div class="popular-items-body" id="popitem-body">
                <div class="owl-carousel owl-theme" id="popitem-slider">
                    @foreach($popularData as $row)
                        <div class="card text-center">
                            <div class="card-header">
                                <img src="{{asset('public/assets/img/pizza/'.$row->product_img)}}" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$row->name}}</h5>
                                <h6 class="card-subtitle mt-2 mb-2 text-muted">{{$row->description}}</h6>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <span class="btn btn-primary">&#8377;{{$row->price}}/-</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <a href="{{route('menu')}}" class="btn shadow-none" id="add-to-cart"
                                                data-id="'.$row->id.'">Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- menu items -->
    <div class="menu " id="menu">
        <div class="menu-container">
            <div class="menu-head justify-content-center align-items-center">
                <h1>Our Menu</h1>
            </div>
            <div class="menu-body">
                <div class="row mb-3" id="menu-body">
                    @foreach($menuData as $row)
                        <div class="col-md-6 menu-card">
                            <div class="row">
                                <div class="col-md-3 menu-card-head">
                                    <img src="{{asset('public/assets/img/pizza/'.$row->product_img)}}" class="menu-img">
                                </div>
                                <div class="col-md-7 menu-card-body">
                                    <div class="d-block">
                                        <h5>{{$row->name}}</h5>
                                        <div class="item-text">
                                            <h6>{{$row->description}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 pizza-price menu-card-footer">
                                    <h5>&#8377;{{$row->price}}/-</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="menu-card-footer p-3 d-flex align-items-end justify-content-end">
                <a href="{{route('menu')}}" class="btn btn-primary"><label>VIEW MORE</label></a>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="row about-us-container" id="aboutus">
        <div class="about-us-head">
            <h1>ABOUT US</h1>
        </div>
        <div class="about-us-body">
            <div class="row">
                <div class="col-md-3 col-auto about-img">
                    <img src="{{asset('public/assets/img/chef/tm2.png')}}" alt="" srcset="">
                </div>
                <div class="col-md-6 col-auto d-flex justify-content-center align-items-center">
            <span>foodONline strives to source local, sustainable and organic when possible. We work hard to source premium ingredients and we cook everything from scratch with love.
              We also do our best to pay our employees living wages ( tips are shared with all employees, including kitchen staff ) and to reduce our environmental footprint wherever we can.
              Overall, these factors translate to higher menu prices, but we hope that you find value and feel a sense of comfort in knowing that we aim to get better everyday at doing what is important to us.</span>
                </div>
                <div class="col-md-3 col-auto about-img">
                    <img src="{{asset('public/assets/img/chef/tm5.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>


@endsection
@section("js")
    <!-- extra scripts -->
    <script>
        // owl carousel script
        $('#popitem-slider').owlCarousel({
            loop: true,
            padding: 0,
            margin: 20,
            responsiveClass: true,
            autoplay: true,
            responsive: {
                0: {
                    dots: true,
                    items: 1,
                },
                600: {
                    dots: true,
                    items: 2,
                },
                1000: {
                    dots: false,
                    items: 4,
                }
            }
        });

        // partners data
        $('#partners').owlCarousel({
            loop: true,
            margin: 20,
            responsiveClass: true,
            autoplay: true,
            responsive: {
                0: {
                    dots: true,
                    items: 1,
                },
                600: {
                    dots: true,
                    items: 2,
                },
                1000: {
                    dots: false,
                    items: 2,
                }
            }
        });

    </script>
@endsection
