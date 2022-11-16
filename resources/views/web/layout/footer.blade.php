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
        <div class="footer-copyright text-center text-light py-2"> Copyright © 2022 <a href="/"> foodONline.com</a>
        </div>
    </div>
</footer>

<!-- login model -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 row ps-4 pe-4">
                <button class="btn col-4 btn-form p-1 form-active shadow-none" id="login">LOGIN</button>
                <div class="col-1"></div>
                <button class="btn col-4 btn-form p-1 shadow-none" id="register">REGISTER</button>
                <div class="col-3 text-end">
                    <button type="button" class="btn-primary ri-close-line text-dark rounded-circle"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body border-0">
                <!-- login form -->
                <form id="loginForm" class="ps-2 pe-2">
                    @csrf
                    <h3 class="mb-3">Login</h3>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-mail-line"></i></span>
                            <input type="email" class="form-control shadow-none border-0" id="emailAddress" name="email"
                                   placeholder="Email Address" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-lock-2-line"></i></span>
                            <input type="password" class="form-control shadow-none border-0" id="password"
                                   name="password" placeholder="Password" value="">
                            <span class="input-group-text shadow-none border-0" id="eye-1"
                                  style="background-color: white;"><i class="ri-eye-line"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="text-start col-6">
                            <input type="checkbox" class="form-check-input shadow-none me-2" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="text-end col-6">
                            <a href="#" class="text-muted" style="text-decoration: none;">Forgot password?</a>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary w-50" id="LoginBtn"><i class="ri-loader-2-line spinner" style="display: none"></i>Login</button>
                    </div>
                </form>
                <!-- register form -->
                <form id="registerForm" class="ps-2 pe-2" style="display: none;" method="post">
                    @csrf
                    <h3 class="mb-3">Register</h3>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-pencil-line"></i></span>
                            <input type="text" class="form-control shadow-none border-0" id="name" name="name"
                                   placeholder="Name" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-mail-line"></i></span>
                            <input type="email" class="form-control shadow-none border-0" id="email" name="email"
                                   placeholder="Email Address" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-pencil-line"></i></span>
                            <input type="text" class="form-control shadow-none border-0" id="mobileNo" name="mobile_no"
                                   placeholder="Mobile Number" value="" maxlength="10">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div>
                            <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i class="ri-lock-2-line"></i></span>
                                <input type="password" class="form-control shadow-none border-0" id="userPassword"
                                       name="password" placeholder="Password" value="">
                                <span class="input-group-text shadow-none border-0" id="eye-2"
                                      style="background-color: white;"><i class="ri-eye-line"></i></span>
                            </div>
                            <div class="mt-1 password-strength-background">
                                <div class="password-strength" id="password-strength"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-lock-2-line"></i></span>
                            <input type="password" class="form-control shadow-none border-0" id="confirm_password"
                                   name="confirm_password" placeholder="Confirm Password" value="">
                            <span class="input-group-text shadow-none border-0" id="eye-3"
                                  style="background-color: white;"><i class="ri-eye-line"></i></span>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" id="registerBtn" class="btn btn-primary w-50"><i class="ri-loader-2-line spinner" style="display: none"></i>Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- user profile canvas -->
@if(Auth::guard('web')->check())
<div class="offcanvas bg-light offcanvas-end " tabindex="-1" id="userProfile" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Profile Settings</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <form id="editProfile">
                @csrf
                <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" name="profile_img" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload" class="text-center"><i class="ri-pencil-fill fs-5"></i></label>
                        </div>
                        <div class="avatar-preview">
                            @if(!file_exists(public_path('/assets/img/user-img/'.Auth::guard('web')->user()->profile_img)) || Auth::guard('web')->user()->profile_img == "")
                                <div id="imagePreview" style="background-image: url('{{asset('public/assets/img/user-img/no-image.png')}}');"></div>
                            @else
                                <div id="imagePreview" style="background-image: url('{{asset('public/assets/img/user-img/'.Auth::guard('web')->user()->profile_img)}}');"></div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3 ps-3 pe-3">
                    <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-pencil-line"></i></span>
                        <input type="text" class="form-control shadow-none border-0" id="name" name="name"
                               placeholder="Name" value="{{Auth::guard('web')->user()->name}}">
                    </div>
                </div>
                <div class="mb-3 ps-3 pe-3">
                    <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-mail-line"></i></span>
                        <input type="email" class="form-control shadow-none border-0" id="email"
                               placeholder="Email Address" value="{{Auth::guard('web')->user()->email}}" disabled>
                    </div>
                </div>
                <div class="mb-3 ps-3 pe-3">
                    <div class="input-group border rounded-3">
                                <span class="input-group-text shadow-none border-0" style="background-color: white;"><i
                                        class="ri-pencil-line"></i></span>
                        <input type="text" class="form-control shadow-none border-0" id="mobileNo" name="mobile_no"
                               placeholder="Mobile Number" value="{{Auth::guard('web')->user()->mobile_no}}" maxlength="10">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6 col-xs-12 mb-3">
                        <a href="{{route('logout')}}" class="btn btn-primary w-100">Logout</a>
                    </div>
                    <div class="col-md-6 col-xs-12 mb-3">
                        <button type="submit" class="btn btn-primary w-100">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
<script>
    // login - register form
    $("#login, #loginBtn").click(function () {
        $("#loginForm").show();
        $("#registerForm").hide();
        $("#login").addClass("form-active");
        $("#register").removeClass("form-active");
    });
    $("#register").click(function () {
        $("#loginForm").hide();
        $("#registerForm").show();
        $("#login").removeClass("form-active");
        $("#register").addClass("form-active");
    });

    // password hide-show
    $("#eye-1").click(function () {
        let type = $("#password").attr('type');
        if (type == 'password') {
            $("#password").attr('type', 'text');
            $(this).html('<i class="ri-eye-off-line"></i>');
        }
        if (type == 'text') {
            $("#password").attr('type', 'password');
            $(this).html('<i class="ri-eye-line"></i>');
        }
    });
    $("#eye-2").click(function () {
        let type = $("#userPassword").attr('type');
        if (type == 'password') {
            $("#userPassword").attr('type', 'text');
            $(this).html('<i class="ri-eye-off-line"></i>');
        }
        if (type == 'text') {
            $("#userPassword").attr('type', 'password');
            $(this).html('<i class="ri-eye-line"></i>');

        }
    });
    $("#eye-3").click(function () {
        let type = $("#confirm_password").attr('type');
        if (type == 'password') {
            $("#confirm_password").attr('type', 'text');
            $(this).html('<i class="ri-eye-off-line"></i>');
        }
        if (type == 'text') {
            $("#confirm_password").attr('type', 'password');
            $(this).html('<i class="ri-eye-line"></i>');

        }
    });

    //password strength
    $("#userPassword").keyup(function () {
        let string = $(this).val();
        var number = new RegExp("^(?=.*[0-9])");
        var small = new RegExp("^(?=.*[a-z])");
        var capital = new RegExp("^(?=.*[A-Z])");
        var special = new RegExp("^(?=.*[@$!%*#?&])");
        let sum = 0;
        if (string.length > 7) {
            sum += 20;
        }
        if ($(this).val().match(special)) {
            sum += 25;
        }
        if ($(this).val().match(capital)) {
            sum += 15;
        }
        if ($(this).val().match(number)) {
            sum += 25;
        }
        if ($(this).val().match(small)) {
            sum += 15;
        }
        // increase width
        $("#password-strength").animate({
            width: sum + "%"
        }, 300);
        // change colour by password strength
        if (sum <= 40) {
            $("#password-strength").css('background-color', '#aa0000');
        } else if (sum <= 70) {
            $("#password-strength").css('background-color', '#fbcb09');
        } else if (sum == 100) {
            $("#password-strength").css('background-color', '#00cc00');
        }
        jQuery.validator.addMethod("strong", function(value, element) {
                return sum == 100;
            }, "Please enter a strong password date."
        );
    });

    // register user
    $("#registerForm").validate({
        rules: {
            name: "required",
            email: { required: true, email: true },
            mobile_no: { required: true, digits: true, minlength: 10 },
            password: { required: true, minlength: 8 },
            confirm_password: { required : true, equalTo: '#userPassword' }
        },
        messages: {
            name: "Please enter your name.",
            email: { required: "Please enter your email.", email: "Please enter email correctly." },
            mobile_no: { required: "Please enter your mobile number.", digits: "Mobile number must be in digits.",
                minlength: "Mobile number must contain 10 digits." },
            password: { required: "Please enter your password", minlength: "Password must contain at least 8 characters." },
            confirm_password: { required : "Please enter confirm password.", equalTo: "Your password and confirm password doesn't match." }
        },
        errorClass: "text-danger",
        errorPlacement: function(error, element) {
            if (element.attr("name") == "password") {
                error.insertAfter(element.parent().parent());
            } else {
                error.insertAfter(element.parent());
            }
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            let formData = new FormData(form);
            $.ajax({
                url: "{{route("register-user")}}",
                method: 'post',
                dataType: "json",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                async: true,
                beforeSend: function () {
                    $("#registerBtn").attr('disabled','disabled');
                    $(".spinner").show();
                },
                success: function (data) {
                    if (data.status == 1) {
                        Swal.fire({
                            title: "Success",
                            text: data.message,
                            icon: "success",
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            timer: 1500
                        });
                        window.location.reload();
                        $("#registerBtn").removeAttr('disabled');
                        $(".spinner").hide();
                    }else{
                        Swal.fire({
                            title: "Failed",
                            text: data.message,
                            icon: "warning",
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            timer: 1500
                        });
                        $("#registerBtn").removeAttr('disabled');
                        $(".spinner").hide();
                    }
                }
            });
        }
    });

    // login check
    $("#loginForm").validate({
        rules : {
            email : { required : true, email : true },
            password : { required : true }
        },
        messages : {
            email : { required : "Please enter your email address.", email : "Please enter email correctly." },
            password : {
                required : "Please enter your password.",
            }
        },
        errorClass : "text-danger",
        errorPlacement: function(error, element) {
            if (element.attr("type") == "password") {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element.parent());
            }
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            let data = new FormData(form);
            $.ajax({
                url : '{{route("login-user")}}',
                type : "POST",
                dataType : "JSON",
                data : data,
                cache : false,
                async : true,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#LoginBtn").attr('disabled','disabled');
                    $(".spinner").show();
                },
                success : function(data){
                    if(data.status == 1){
                        Swal.fire({
                            title: 'Success',
                            text: data.message,
                            icon: 'success',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                        $("#LoginBtn").removeAttr('disabled');
                        $(".spinner").hide();
                        window.location.reload();
                    }else{
                        Swal.fire({
                            title: 'Failed',
                            text: data.message,
                            icon: 'warning',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                        $("#LoginBtn").removeAttr('disabled');
                        $(".spinner").hide();
                    }
                }
            });
        }
    });

    // update profile
    $("#editProfile").validate({
        rules : {
            name : {
                'required' : true
            },
            mobile_no : {
                'required' : true,
                'digits' : true,
            }
        },
        messages : {
            name : {
                'required' : "Please enter your name."
            },
            mobile_no : {
                'required' : "Please enter your mobile number.",
                'digits' : "Please write digits in mobile number.",
            }
        },
        errorClass : "text-danger",
        errorPlacement: function(error, element) {
            if (element.attr("type") == "password") {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element.parent());
            }
        },
        submitHandler: function(form,e) {
            e.preventDefault();
            let data = new FormData(form);
            $.ajax({
                url : '{{route("edit-user")}}',
                type : "POST",
                dataType : "JSON",
                data : data,
                cache : false,
                async : false,
                processData: false,
                contentType: false,
                success : function(data){
                    if(data.status == 1){
                        Swal.fire({
                            title: 'Success',
                            text: data.message,
                            icon: 'success',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                        window.location.reload();
                    }else{
                        Swal.fire({
                            title: 'Failed',
                            text: data.message,
                            icon: 'warning',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                    }
                }
            });
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>
