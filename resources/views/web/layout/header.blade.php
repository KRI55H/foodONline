 <!-- loader -->
 <div id="loader">
      <img src="{{asset('public/assets/img/loader.gif')}}" alt="" srcset="" id="loader-image">
  </div>

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg bg-light navbar-light"  id="home">
    <div class="container-fluid">
        <img src="{{asset('public/assets/img/logo.png')}}" alt="foodONline" class="nav-brand ms-auto me-auto">
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark @if(request()->segment(1) == ""){{"active"}} @endif" aria-current="page" href="{{route('/')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark @if(request()->segment(1) == "menu"){{"active"}} @endif" href="{{route('menu')}}">Menu</a>
                </li>
                @if(Auth::guard('web')->check())
                <li class="nav-item">
                    <a class="nav-link text-dark @if(request()->segment(1) == "reservation"){{"active"}} @endif" href="{{route('reservation')}}">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark @if(request()->segment(1) == "orders"){{"active"}} @endif" href="{{route('orders')}}">Orders</a>
                </li>
                @endif
            </ul>
            @if(Auth::guard('web')->check())
                <button class="btn nav-cart shadow-none ms-3" data-bs-toggle="offcanvas" data-bs-target="#userProfile" aria-controls="offcanvasRight"><i class="ri-user-fill"></i></button>
            @else
                <button class="btn nav-cart shadow-none ms-3" id="loginBtn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            @endif
        </div>
    </div>
</nav>
