@extends('web.master')
@section('title')
    <title>Reservation | foodONline</title>
@endsection
@section('content')
	<div class="register-form">
    <div class="row form-container">
      <div class="col-md-6 col-sm-12">
        <div class="form-img"></div>
      </div>
      <div class="col-md-6 col-sm-12 p-2">
        <form class="form">
          <div class="row">
            <div class="form-group col-md-6 mb-2">
              <div class="form-group mb-2" >
                <label>Full Name</label>
                <input type="text" class="form-control  shadow-none" placeholder="Full Name ">
              </div>

              <div class="form-group mb-2" >
                <label >Mobile Number</label>
                <input type="text" class="form-control  shadow-none" placeholder="Mobile Number ">
              </div>

              <div class="form-group mb-2">
                <label for="exampleInputEmail1">Date</label>
                <input type="text" data-field="date" class="form-control" placeholder="Reservation Date"/>
              </div>

              <div class="form-group mb-2" >
                <label for="exampleInputEmail1">Time</label>
                <input type="text" data-field="time" class="form-control" placeholder="Reservation Time"/>
              </div>
              <div id="date-time-picker"></div>

              <div class="form-group mb-2" >
                <label >Special Ocation</label>
                <select class="form-control form-select shadow-none"  name="special ocation">
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
                <div class="form-group mb-2" >
                  <label for="exampleInputEmail1">Select table type</label>
                  <select class="form-control form-select shadow-none" id="number-of-person" name="numberOfPerson">
                    <option value="2" selected>Two Persons</option>
                    <option value="4">Four Persons</option>
                    <option value="6">Six Persons</option>
                    <option value="8">Eight Persons</option>
                  </select>
                </div>
                <div class="form-group mb-2 d-block">
                  <img src="{{asset('public/assets/img/tables/2.png')}}" class="table-img" id="table-image">
                </div>
                <div class="text-end form-group d-block">
                  <button type="submit" class="btn shadow-none register-btn">Book Table</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
	</div>
@endsection
@section('js')
  <script>
    // loader
    $(window).on('load',function(){
        setTimeout(function(){
        $("#loader").hide();
        },10);
    });

    // date time picker
    $("#date-time-picker").DateTimePicker();

    $("#number-of-person").change(function(){
      let tableSize = $("#number-of-person").val();
      $("#table-image").animate({opacity: '0%'},{duration: 500, complete: function(){
        $("#table-image").attr('src','{{asset('public/assets/img/tables')."/"}}'+tableSize+".png");
        $("#table-image").animate({opacity: '100%'},500);
    }});
      return false;
    });


  </script>
@endsection
