@extends('front-end.master')
@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Sign Up</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">

                <!--Product Description-->

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 well">
                        <h3 class="text-center text-success">Register if you are not Registered before!!!</h3>
                        </br>
                        {{ Form::open(['route'=>'new-customer-sign-up', 'method'=>'POST']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First_Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last_Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" id="email_address" class="form-control" placeholder="example@gmail.com">
                            <span class="text-success" id="res"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="phone_number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" id="regbtn" class="form-control btn btn-success" value="Register">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->

        <!--new-arrivals-->
    </div>


    <script>
        var email_address = document.getElementById('email_address');
        email_address.onblur = function () {
            var email = document.getElementById('email_address').value;
            var xmlHttp = new XMLHttpRequest();
            var serverPage = 'http://localhost/online_medicine_service_system/public/ajax-signup-email-check/'+email;
            xmlHttp.open('GET',serverPage);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState == 4 && xmlHttp.status ==200){
                    document.getElementById('res').innerHTML = xmlHttp.responseText;

                    if (xmlHttp.responseText == 'Already Exist'){
                        document.getElementById('regbtn').disabled = true;

                    }else {
                        document.getElementById('regbtn').disabled = false;

                    }

                }

            }
            xmlHttp.send(null);

        }
    </script>
@endsection