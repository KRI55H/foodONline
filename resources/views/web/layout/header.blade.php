 <!-- loader -->
 <div id="loader">
      <img src="{{asset('public/assets/img/loader.gif')}}" alt="" srcset="" id="loader-image">
  </div>

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg bg-light navbar-light"  id="home">
    <div class="container-fluid">
        <img src="{{asset('public/assets/img/logo.png')}}" alt="foodONline" class="nav-brand">
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('reservation')}}">Reservation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="#aboutus">About Us</a>
                </li>
            </ul>
            <button class="btn nav-cart shadow-none" id="cart" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="ri-shopping-cart-fill"></i></button>
            <button class="btn nav-cart shadow-none ms-3" ><i class="ri-user-fill"></i></button>
            <button class="btn nav-cart shadow-none ms-3" id="loginBtn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        </div>
    </div>
</nav>
