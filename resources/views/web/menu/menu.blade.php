@extends('web.master')
@section('title',"Menu | foodONline")
@section('content')
<div class="container-fluid bg-light">
    <div class="menu-body">
        <div class="row p-5" id="menu-body">
            <div class="col-md-8 ps-5 pe-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-start"><h5>Item</h5></th>
                            <th class="text-center"><h5>Price</h5></th>
                            <th class="text-center"><h5>Quantity</h5></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <th>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-2">
                                        <img src="{{asset('public/assets/img/pizza/'.$row->product_img)}}" class="w-100">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="d-block">
                                            <h5 class="text-dark">{{$row->name}}</h5>
                                            <div class="item-text">
                                                <h6>{{Str::of($row->description)->words(10, ' ...')}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <th class="align-middle">
                                <span class="pizza-price">
                                    <h5 >&#8377;{{$row->price}}/-</h5>
                                </span>
                            </th>
                            <th class="text-center align-middle">
                                <div class="qty-container">
                                    <button class="qty-btn-minus btn-primary rounded-circle ri-indeterminate-circle-line fs-4" data-id="{{$row->id}}" type="button"></button>
                                    <input type="text" name="qty" value="{{$row->qty ? : 0}}" class="input-qty input-rounded ms-1 me-1" id="qty"/>
                                    <button class="qty-btn-plus btn-primary rounded-circle ri-add-circle-line fs-4" data-id="{{$row->id}}" type="button"></button>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-4 ps-4 pe-4" style="position: sticky">
                <div class="card shadow" style="border-radius: 3vh; overflow: hidden">
                    <div class="card-header text-center" style="background: rgba(0,0,0,.6)!important;">
                        <span class="fs-4 fw-semibold text-light btn">Order Summary</span>
                    </div>
                    <div class="cart-detail">
                        <div class="card-body p-4 border-bottom">
                            @if(sizeof($cart) > 0)
                                @foreach($cart as $row)
                                    <div class="row mb-1">
                                        <span class="text-muted align-middle fs-7 col-md-8">{{$row->qty."x"}} {{$row->name}}</span>
                                        <span class="col-md-4 text-end">&#8377; {{$row->price}}</span>
                                        <?php
                                        $subtotal = $subtotal  + $row->total;
                                        $discount = $discount + $row->discount;
                                        if($row->delivery_charge > $delivery){
                                            $delivery = $row->delivery_charge;
                                        }
                                        ?>
                                    </div>
                                @endforeach
                                <?php $total =$subtotal - $discount + $delivery; ?>
                            @else
                                <img src="{{asset('public/assets/img/no-item.png')}}">
                            @endif

                            <div class="row mt-3 mb-1">
                                <span class="col-md-9 fs-7">Sub total</span>
                                <span class="col-md-3 fs-7 text-end subtotal">&#8377; {{$subtotal}}</span>
                            </div>
                            <div class="row  mb-1">
                                <span class="col-md-9 fs-7">Discount</span>
                                <span class="col-md-3 fs-7 text-end discount">- &#8377; {{$discount}}</span>
                            </div>
                            <div class="row mb-1">
                                <span class="col-md-9 fs-7">Delivery charge</span>
                                <span class="col-md-3 fs-7 text-end delivery">&#8377; {{$delivery}}</span>
                            </div>
                            <div class="row mt-2">
                                <span class="col-md-8 fs-5 fw-bold">GRAND TOTAL</span>
                                <span class="col-md-4 fs-5 text-end total" data-total="{{$total}}">&#8377; {{$total}}</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            @if(auth()->guard('web')->check() && sizeof($cart) > 0)
                                <button class="btn btn-primary" id="orderNow"><i class="ri-loader-2-line spinner" style="display: none"></i>PLACE ORDER</button>
                            @else
                                <button class="btn btn-primary" disabled>PLACE ORDER</button>
                            @endif
                        </div>
                    </div>
                    <h6 class="text-center pb-2 text-muted">DUE TO SOME ISSUE ONLY TAKEAWAY IS ALLOWED</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("js")
    <script>
        // quantity add - remove
        var buttonPlus  = $(".qty-btn-plus");
        var buttonMinus = $(".qty-btn-minus");
        var incrementPlus = buttonPlus.click(function() {
            var $n = $(this)
                .parent(".qty-container")
                .find(".input-qty");
            $n.val(Number($n.val())+1 );
        });
        var incrementMinus = buttonMinus.click(function() {
            var $n = $(this)
                .parent(".qty-container")
                .find(".input-qty");
            var amount = Number($n.val());
            if (amount > 0) {
                $n.val(amount-1);
            }
        });

        // add to cart
        $(".qty-btn-plus").click(function (e){
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url : '{{route("add-cart")}}',
                type : "POST",
                dataType : "JSON",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'id' : id,
                    'type' : "insert"
                },
                success : function(data){
                    if(data.status == 1){
                        $(".cart-detail").html(data.data);
                    }else{
                        Swal.fire({
                            title: 'Failed',
                            text: data.message,
                            icon: 'warning',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                        $(".input-qty").val(0);
                    }
                }
            });
        });

        // remove from cart
        $(".qty-btn-minus").click(function (e){
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                url : '{{route("add-cart")}}',
                type : "POST",
                dataType : "JSON",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'id' : id,
                    'type' : "remove"
                },
                success : function(data){
                    if(data.status == 1){
                        $(".cart-detail").html(data.data);
                    }else{
                        Swal.fire({
                            title: 'Failed',
                            text: data.message,
                            icon: 'warning',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                        $("#"+id).val(data.qty);
                    }
                }
            });
        });

        // Place order
        $(document).on('click','#orderNow',function (){
            $.ajax({
                url : '{{route("place-order")}}',
                type : "POST",
                dataType : "JSON",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'total' : $(".total").data('total')
                },
                beforeSend : function () {
                    $("#orderNow").attr('disabled','disabled');
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
                        setTimeout(function (){
                            $("#orderNow").removeAttr('disabled');
                            $(".spinner").hide();
                            window.location.href = data.url;
                        },2000)
                    }else{
                        Swal.fire({
                            title: 'Failed',
                            text: data.message,
                            icon: 'warning',
                            timer: 2000,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                        $("#orderNow").removeAttr('disabled');
                        $(".spinner").hide();
                    }
                }
            });
        });
    </script>
@endsection
