<!-- footer -->
<footer class="page-footer font-small bg-dark text-light">
    <div class="container">
        <div class="row pt-5 pb-3">
            <div class="col-md-4 text-center mb-4">
                <h3 class="mb-3">OPENING HOURS</h3>
                <div class="row ">
                    <label class="col-6 text-end">Monday To Friday<br>Saturday & Sunday</label>
                    <label class="col-6 text-muted text-start">10:00 AM - 10:30 PM<br>10:00 AM - 11:30 PM</label>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <h3 class="mb-3">FOLLOW US</h3>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="#" class="ri-facebook-fill btn btn-primary m-1"></a>
                    <a href="#" class="ri-twitter-fill btn btn-primary m-1"></a>
                    <a href="#" class="ri-youtube-fill btn btn-primary m-1"></a>
                    <a href="#" class="ri-instagram-fill btn btn-primary ms-2 me-1"></a>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4">
                <h3 class="mb-3">CONTECT US</h3>
                <div class="d-flex align-items-center justify-content-center">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control shadow-none" type="email" name="email" placeholder="Enter your email">
                                <div class="input-group-addon btn" style="background-color: #FF5F00;">SUBSCRIBE</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center text-light py-2"> Copyright © 2020-21 <a href="/"> foodONline.com</a>
        </div>
    </div>
</footer>

<!-- cart model -->
<div class="modal fade model-end  cart" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="cart-modal">

                <div class="row p-3 m-3 bg-dark rounded-3">
                  <div class="col-md-5 menu-card-head">
                    <img src="{{asset('public/assets/img/pizza/deluxe-veggie.png')}}" width="120">
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
                </div>

            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary w-50">PLACE ORDER</button>
            </div>
        </div>
    </div>
</div>

<!-- user profile canvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="userProfile" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">User Settings</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center w-100 mb-3">
                <div class="bg-light rounded-circle p-2 d-flex" style="height: 200px; width: 200px; overflow: hidden">
                    <img src="{{asset('public/assets/img/user-img/user-1.jpg')}}" class="w-100 rounded-circle shadow">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 mb-3">
                <button class="btn nav-cart shadow-none w-100 align-items-center justify-content-center d-flex" id="cart" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="ri-shopping-cart-fill me-3"></i> MY CART</button>
            </div>
            <div class="col-md-6 col-xs-12 mb-3">
                <a class="btn btn-primary w-100" id="cart" data-bs-toggle="modal" data-bs-target="#cartModal">LOGOUT</a>
            </div>

        </div>
    </div>
</div>


<script>
    // cart
    for (i = 0; i < 5; i++) {
        $("#cart-modal").append(
            '<div class="row border-bottom">'
            + '<div class="col-md-4 col-4 cart-head">'
            + '<img src="{{asset('public/assets/img/pizza/deluxe-veggie.png')}}">'
            + '</div>'
            + '<div class="col-md-4 col-4 cart-body">'
            + '<div class="d-block">'
            + '<label >DELUXEVEGGIE</label>'
            + '</div>'
            + '</div>'
            + '<div class="col-md-2 col-2 cart-footer">'
            + '<span>₹&nbsp;399/-</span>'
            + '</div>'
            + '<div class="col-md-2 col-2 text-danger justify-content-center align-items-center d-flex">'
            + '<h3><i class="ri-close-circle-line" id="remove-item"></i></h3>'
            + '</div>'
            + '</div>'
        );
    }
</script>
