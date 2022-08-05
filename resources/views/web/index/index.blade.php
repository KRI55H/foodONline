@extends('web.master')
@section('title')
    <title>foodONline</title>
@endsection
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

  <!-- populer items -->
  <div class="populer-items" id="populer">
    <div class="populer-item-container">
      <div class="populer-items-head justify-content-center align-items-center">
        <div class="d-block text-center">
          <h1 class="popitems-head-title">TODAY'S SPECIAL</h1>
          <h6 >Try the delicious new dishes from our chef.</h6>
        </div>
      </div>
      <div class="populer-items-body" id="popitem-body">
        <div class="owl-carousel owl-theme" id="popitem-slider">

          <!-- <div class="card text-center">
            <div class="card-header">
              <img src="./assets/img/pizzas/tandoori-paneer.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">INDI TANDOORI PANEER</h5>
              <h6 class="card-subtitle mt-2 mb-2 text-muted">It is hot. It is spicy. Tandoori paneer with capsicum I red paprika I mint mayo</h6>
              <h5>&#8377;499/-</h5>
            </div>
            <div class="card-footer">
              <a href="#" class="btn shadow-none">Add To Cart</a>
            </div>
          </div> -->

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
            <div class="t-img">
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
            <div class="t-img">
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
            <div class="t-img">
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
            <div class="t-img">
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
  <!-- offfers -->
  <!-- menu items -->
  <div class="menu" id="menu">
    <div class="menu-container">
      <div class="menu-head justify-content-center align-items-center">
        <h1>Our Menu</h1>
      </div>
      <div class="menu-body">
        <div class="row" id="menu-body">

        </div>
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

  <!-- cart model -->
    <div class="modal fade model-end  cart" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="cart-modal">

            <!-- <div class="row p-3 m-3 bg-dark rounded-3">
              <div class="col-md-5 menu-card-head">
                <img src="./assets/img/pizzas/deluxe-veggie.png" width="120">
                </div>
                <div class="col-md-5 menu-card-body">
                  <div class="d-block">
                  <label class="text-light">DELUXE VEGGIE</label>
                  <span class="text-light">₹&nbsp;399/-</span>
                  </div>
                </div>
                <div class="col-md-2 pizza-price menu-card-footer">
                  <h4><i class="ri-close-circle-line"></i></h4>
              </div>
            </div> -->

          </div>
          <div class="modal-footer justify-content-end">
            <button type="button" class="btn btn-primary w-50">PLACE ORDER</button>
          </div>
        </div>
      </div>
    </div>

    <!-- login model -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0 row ps-4 pe-4">
            <button class="btn col-4 btn-form p-1 form-active shadow-none" id="login">LOGIN</button>
            <div class="col-1"></div>
            <button class="btn col-4 btn-form p-1 shadow-none" id="register">REGISTER</button>
            <div class="col-3 text-end">
              <button type="button" class="btn-primary ri-close-line text-dark rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body border-0">
            <!-- login form -->
            <form id="loginForm" class="ps-2 pe-2">
              <h3 class="mb-3">Login</h3>
              <div class="input-group mb-3 border rounded-3">
                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-mail-line"></i></span>
                <input type="text" class="form-control shadow-none border-0" id="emailAddress" name="email" placeholder="Email Address" value="">
              </div>
              <div class="mb-3">
                <div class="input-group mb-3 border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-lock-2-line"></i></span>
                  <input type="password" class="form-control shadow-none border-0" id="password" name="email" placeholder="Password" value="">
                  <span class="input-group-text shadow-none border-0" id="eye-1" style="background-color: white;"><i class="ri-eye-line"></i></span>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="text-start col-6">
                  <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="text-end col-6">
                  <a href="#" class="text-muted" style="text-decoration: none;">Forgot password?</a>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary w-50">Login</button>
              </div>
            </form>
            <!-- register form -->
            <form id="registerForm" class="ps-2 pe-2" style="display: none;">
              <h3 class="mb-3">Register</h3>
              <div class="mb-3">
                <div class="input-group border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-pencil-line"></i></span>
                  <input type="text" class="form-control shadow-none border-0" id="Name" name="text" placeholder="Name" value="">
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-mail-line"></i></span>
                  <input type="email" class="form-control shadow-none border-0" id="emailAddress" name="email" placeholder="Email Address" value="">
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-pencil-line"></i></span>
                  <input type="text" class="form-control shadow-none border-0" id="mobileNumber" name="text" placeholder="Mobile Number" value="">
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-lock-2-line"></i></span>
                  <input type="password" class="form-control shadow-none border-0" id="password1" name="email" placeholder="Password" value="">
                  <span class="input-group-text shadow-none border-0" id="eye-2" style="background-color: white;"><i class="ri-eye-line"></i></span>
                </div>
                <div class="mt-1 password-strength-background" >
                  <div class="password-strength" id="password-strength"></div>
                </div>
              </div>
              <div class="mb-3">
                <div class="input-group border rounded-3">
                  <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-lock-2-line"></i></span>
                  <input type="password" class="form-control shadow-none border-0" id="confirmPassword" name="email" placeholder="Confirm Password" value="">
                  <span class="input-group-text shadow-none border-0" id="eye-3" style="background-color: white;"><i class="ri-eye-line"></i></span>
                </div>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-primary w-50">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@section("js")
  <!-- extra scripts -->
  <script>
    // owl carousel script
    $('.owl-carousel').owlCarousel({
      loop:true,
      dots: true,
      margin:20,
      responsiveClass:true,
      autoplay: true,
      responsive:{
        0:{
            items: 1,
        },
        600:{
            items:2,
        },
        1000:{
            items: 4,
        }
      }
    });

    $(document).ready(function(){
      // login - register form
      $("#login, #loginBtn").click(function(){
        $("#loginForm").show();
        $("#registerForm").hide();
        $("#login").addClass("form-active");
        $("#register").removeClass("form-active");
      });
      $("#register").click(function(){
        $("#loginForm").hide();
        $("#registerForm").show();
        $("#login").removeClass("form-active");
        $("#register").addClass("form-active");
      });
      // password hide-show
      $("#eye-1").click(function(){
        let type = $("#password").attr('type');
            if(type == 'password'){
                $("#password").attr('type','text');
                $(this).html('<i class="ri-eye-off-line"></i>');
              }
              if(type == 'text'){
                $("#password").attr('type','password');
                $(this).html('<i class="ri-eye-line"></i>');
            }
      });
      $("#eye-2").click(function(){
        let type = $("#password1").attr('type');
            if(type == 'password'){
                $("#password1").attr('type','text');
                $(this).html('<i class="ri-eye-off-line"></i>');
              }
              if(type == 'text'){
                $("#password1").attr('type','password');
                $(this).html('<i class="ri-eye-line"></i>');
            }
      });
      $("#eye-3").click(function(){
        let type = $("#confirmPassword").attr('type');
            if(type == 'password'){
                $("#confirmPassword").attr('type','text');
                $(this).html('<i class="ri-eye-off-line"></i>');
              }
              if(type == 'text'){
                $("#confirmPassword").attr('type','password');
                $(this).html('<i class="ri-eye-line"></i>');

            }
      });
      //password strength
      $("#password1").keyup(function (){
            let string = $(this).val();
            var number = new RegExp("^(?=.*[0-9])");
            var small = new RegExp("^(?=.*[a-z])");
            var capital = new RegExp("^(?=.*[A-Z])");
            var special = new RegExp("^(?=.*[@$!%*#?&])");
            let sum = 0;
            if(string.length > 8){ sum += 20; }
            if($(this).val().match(special)){ sum += 25; }
            if($(this).val().match(capital)){ sum += 15; }
            if($(this).val().match(number)){ sum += 25; }
            if($(this).val().match(small)){ sum += 15; }
            // increase width
            $( "#password-strength" ).animate({
                width : sum+"%"
            }, 300);
            // change colour by password strength
            if(sum <= 40){
                $("#password-strength").css('background-color','#aa0000');
            }else if (sum <= 70){
                $("#password-strength").css('background-color','#fbcb09');
            }else if(sum == 100){
                $("#password-strength").css('background-color','#00cc00');
            }
        });

        // dynamic data for populer item
        for(i = 0; i<8; i++){
          data='<div class="card text-center"><div class="card-header"><img src="{{asset('public/assets/img/pizzas/tandoori-paneer.png')}}" class="card-img-top" alt="..."></div><div class="card-body"><h5 class="card-title">INDI TANDOORI PANEER</h5><h6 class="card-subtitle mt-2 mb-2 text-muted">It is hot. It is spicy. Tandoori paneer with capsicum I red paprika I mint mayo</h6><h5>&#8377;499/-</h5></div><div class="card-footer"><button id="add-to-cart" class="btn shadow-none">ADD TO CART</button></div></div>'
          $('.owl-carousel').owlCarousel('add', data).owlCarousel('refresh')
        }


      // cart
      for(i=0; i<5; i++){
        $("#cart-modal").append(
          '<div class="row border-bottom">'
              +'<div class="col-md-4 col-4 cart-head">'
                +'<img src="{{asset('public/assets/img/pizzas/deluxe-veggie.png')}}">'
                +'</div>'
                +'<div class="col-md-4 col-4 cart-body">'
                  +'<div class="d-block">'
                  +'<label >DELUXEVEGGIE</label>'
                  + '</div>'
                  +'</div>'
                +'<div class="col-md-2 col-2 cart-footer">'
                  +'<span>₹&nbsp;399/-</span>'
                  +'</div>'
               + '<div class="col-md-2 col-2 text-danger justify-content-center align-items-center d-flex">'
              +    '<h3><i class="ri-close-circle-line" id="remove-item"></i></h3>'
             + '</div>'
            +'</div>'
        );
      }

      // menu items
      for(i = 0; i<8;i++){
        $("#menu-body").append(
        '<div class="col-md-6 menu-card">'
          + '<div class="row">'
          +  '<div class="col-md-3 menu-card-head">'
            +   '<img src="{{asset('public/assets/img/pizzas/deluxe-veggie.png')}}" class="menu-img">'
            +'</div>'
            +'<div class="col-md-7 menu-card-body">'
              + '<div class="d-block">'
              +  '<h5>DELUXE VEGGIE</h5>'
                + '<div class="item-text">'
                +  '<h6>For a vegetarian looking for a BIG treat that goes easy on the spices, The onions, capsicum</h6>'
                +'</div>'
              +'</div>'
            +'</div>'
            +'<div class="col-md-2 pizza-price menu-card-footer">'
              +'<h5>₹&nbsp;399/-</h5>'
            +'</div>'
          +'</div>'
        +'</div>');
      }



      // swals
      $("#loginForm").submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: 'Failed',
          text: 'Username or password must be wrong.',
          icon: 'error',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        })
      });

      $("#registerForm").submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: 'Failed',
          text: 'Email address has been registerd already.',
          icon: 'warning',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        })
      })

      $(document).on('click',"#remove-item",function(){
        Swal.fire({
          title: 'Success',
          text: 'Item has been removed successfully.',
          icon: 'success',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        })
      });

      $(document).on('click',"#add-to-cart",function(){
        Swal.fire({
          title: 'Success',
          text: 'Item has been added to cart.',
          icon: 'success',
          timer: 2000,
          showCancelButton: false,
          showConfirmButton: false
        })
      });

    });

  </script>
@endsection
