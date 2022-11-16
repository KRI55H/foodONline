@extends('web.master')
@section('title',"Reservation | foodONline")
@section('content')
    <div class="register-form">
        <div class="row form-container">
            <div class="col-md-6 col-sm-12">
                <div class="form-img"></div>
            </div>
            <div class="col-md-6 col-sm-12 p-2">
                <form class="form" id="regiserTable" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            <div class="form-group mb-2">
                                <label>Full Name</label>
                                <input type="text" class="form-control  shadow-none" placeholder="Full Name " name="name">
                            </div>

                            <div class="form-group mb-2">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control  shadow-none" placeholder="Mobile Number " name="mobile_no">
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="text" data-field="date" class="form-control"
                                       placeholder="Reservation Date" name="date"/>
                            </div>
                            <div id="date-time-picker"></div>

                            <div class="form-group mb-2">
                                <label>Special Ocation</label>
                                <select class="form-control form-select shadow-none" name="special_ocation">
                                    <option value="" selected disabled>Choose any option</option>
                                    <option value="BirthdayParty">Birthday Party</option>
                                    <option value="Merrage Aniversary">Merrage Aniversary</option>
                                    <option value="Proffessional Metting">Proffessional Metting</option>
                                    <option value="Other Celebration">Other Celebration</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 d-flex justify-content-center align-items-center">
                            <div class="d-block w-100 h-100">
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">Select table type</label>
                                    <select class="form-control form-select shadow-none" id="number_of_person"
                                            name="number_of_person">
                                        <option value="2" selected>Two Persons</option>
                                        <option value="4">Four Persons</option>
                                        <option value="6">Six Persons</option>
                                        <option value="8">Eight Persons</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2 d-block">
                                    <img src="{{asset('public/assets/img/tables/2.png')}}" class="table-img"
                                         id="table-image">
                                </div>
                                <div class="text-end form-group d-block">
                                    <button type="submit" id="bookTableBtn" class="btn shadow-none register-btn"><i class="ri-loader-2-line spinner" style="display: none"></i>Book Table</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2">
                        <span class="text-danger fw-bold">* NOTE : </span>
                        Rs. 100/- booking charge will be applied per person.
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // loader
        $(window).on('load', function () {
            setTimeout(function () {
                $("#loader").hide();
            }, 10);
        });

        // date time picker
        $("#date-time-picker").DateTimePicker({
            stepping: 15,
            minDate: new Date(),
        });

        $("#number_of_person").change(function () {
            let tableSize = $("#number_of_person").val();
            $("#table-image").animate({opacity: '0%'}, {
                duration: 500, complete: function () {
                    $("#table-image").attr('src', '{{asset('public/assets/img/tables')."/"}}' + tableSize + ".png");
                    $("#table-image").animate({opacity: '100%'}, 500);
                }
            });
            return false;
        });

        // regiser table
        $("#regiserTable").validate({
            rules : {
                name : { required : true },
                mobile_no : { required : true, digits : true },
                special_ocation : { required : true },
                date : { required : true }
            },
            messages : {
                name : { required : "Please enter your name." },
                mobile_no : { required : "Please enter mobile number.", digits : "Please enter numbers only." },
                special_ocation : { required : "Please select ocation type." },
                date : { required : "Please select reservation date." },
            },
            errorClass : "text-danger",
            errorPlacement: function(error, element) {
                if (element.attr("type") == "select") {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element.parent());
                }
            },
            submitHandler: function(form,e) {
                e.preventDefault();
                let data = new FormData(form);
                $.ajax({
                    url : '{{route("reserve-table")}}',
                    type : "POST",
                    dataType : "JSON",
                    data : data,
                    cache : false,
                    async : true,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $("#bookTableBtn").attr('disabled','disabled');
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
                            $("#bookTableBtn").removeAttr('disabled');
                            $(".spinner").hide();
                            window.location.href = "{{route('/')}}";
                        }else{
                            Swal.fire({
                                title: 'Failed',
                                text: data.message,
                                icon: 'warning',
                                timer: 2000,
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                            $("#bookTableBtn").removeAttr('disabled');
                            $(".spinner").hide();
                        }
                    }
                });
            }
        });

    </script>
@endsection
