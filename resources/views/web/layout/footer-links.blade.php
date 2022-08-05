<!-- bootstrap -->
<script src="{{asset('public/assets/libs/bootstrap-5.1.3/dist/js/bootstrap.min.js')}}"></script>
<!-- jquery -->
<script src="{{asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.validate.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('public/assets/js/owl.carousel.js')}}"></script>
<!-- sweet alert -->
<script src="{{asset('public/assets/js/sweetalert.js')}}"></script>
{{-- date time picker--}}
<script src="{{asset('public/assets/libs/Date-Time_Picker/dist/DateTimePicker.js')}}"></script>

<script>
    // loader
    $(window).on('load',function(){
        setTimeout(function(){
            $("#loader").hide();
        },10);
    });
</script>
