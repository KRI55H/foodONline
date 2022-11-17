@extends('web.master')
@section('title',"Order | foodONline")
@section('content')
    <div class="menu" id="menu">
        <div class="menu-container ">
            <div class="menu-head align-items-center justify-content-center mb-5">
                <h1>ORDER HISTORY</h1>
            </div>
            <div class="menu-body">
                <div class="row  mb-5" id="menu-body">
                    @if(sizeof($data) > 0)
                    @foreach($data as $row)
                        <div class="col-md-6 menu-card">
                            <a class="nav-link text-dark">
                                <div class="row shadow bg-light" style="border-radius: 3vh; padding: 1vh; height: 100%">
                                    <div class="col-md-3">
                                        <div class="col-md-2 ri-archive-fill fs-8 d-flex align-items-center justify-content-center" style="width: 100%; height: 100%"></div>
                                    </div>
                                    <div class="col-md-7 menu-card-body p-2">
                                        <div class="d-block">
                                            <h5 class="text-dark">ORDER ID : <span class="text-muted">#{{$row->order_id}}</span></h5>
                                            <div class="item-text">
                                                <span>Order Date : <label>{{\Illuminate\Support\Carbon::make($row->created_at)->format('D, M Y')}}</label></span>
                                                <h6>{{Str::of($row->description)->words(10, ' ...')}}</h6>
                                                <h6>Status :
                                                    @if($row->status == "0")
                                                        <span class="badge bg-warning p-2 ">In Process</span>
                                                    @elseif($row->status == "1")
                                                        <span class="badge bg-success p-2 ">Delivered</span>
                                                    @else
                                                        <span class="badge bg-danger p-2 ">Canceled</span>
                                                    @endif
                                                </h6>
                                                <h6>Delivery Type : <span class="text-muted">Take Away</span></h6>
                                            </div>
                                            <h5 class="text-success"><span class="text-dark">Total Amount :</span> &#8377;{{$row->total}}/-</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @else
                        <img src="{{asset('public/assets/img/no-item.png')}}">
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")

@endsection
