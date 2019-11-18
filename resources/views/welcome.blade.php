
@include("layouts.app")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" >

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<style>
body{

background-image: url(https://armorfort.com/img/slider/5.jpg);
background-repeat:no-repeat;
background-size: cover;
height: 100vh;

}
.first{
    min-height: 20vh;
}
h1{
    color: aliceblue
}
.typed-words{
    color: aliceblue
}
.li{
    padding-top: 0.4vh;
    padding-bottom: 0.2vh;
    font-size: 20px;
}
</style>
        <!-- Styles -->

    </head>
    <body>
 <style>
     .list-group-item{
         background-color:transparent !important;
         border: none !important;
         color: white;
         font-family: Nunito;
         font-size: 20px;
     }
     .centered {
   position: absolute;
   /* top: 50%; */
   left: 50%;
   bottom: 8px;
   transform: translate(-50%, -50%);
 }
     .footer {
   position: relative;
   text-align: center;
   color: white;
 }
 .thumbnail:hover {
   position:relative;
   top:-25px;
   /* right:-35px; */
   width:500px;
   height:auto;
   display:block;
   z-index:999;
}
     }
 </style>

{{-- Slider Starts Here --}}

    <div class="container-fluid slider p-5">

        <div class="first pb-5" >
            <h1 >welcome to  <span style="color: #5a01fe"> HomeLand </span><span class="typed-words"></span></h1> <br>
        </div>

    </div>

    <div class="card-group footer centered">
            <div class="card ml-2 thumbnail" style="background-color: rgba(225,225,225,0.5)">

              <div class="card-body" >

                    <h3 class="card-text" style="color:black"> <b> Register to have access to fully <strong  style="color:#5a01fe">VERIFIED</strong> properties. </b> </h3> <br>

                    <h3> <b> Verify and lease/sell your properties to our large database of users and developers. </b>
                    <br>
                            <div class="btn-more">
                                    <a href="{{ route('register') }}" style="color:blue">
                            <span class="animated infinite heartBeat delay-2s" style="color:blue"> SIGN UP</span> to Learn More.
                                <i class="right-arrow"></i>
                            </div>
                        </a></h3>



              </div>
            </div>
            <div class="card mx-3 thumbnail" style="background-color: rgba(225,225,225,0.5)">

              <div class="card-body" >



               <h3 class="card-text" style="color:#5a01fe"> <b>Register today and start getting notifications on every of our verified properties in your prefered locations!</b>
                <br>

                <div class="btn-more pt-4">
                        <a href="{{ route('register') }}" style="color:blue">
                 SIGN UP to Learn More.
                    <i class="right-arrow"></i>
                </div>
            </a></h3>

              </div>
            </div>
            <div class="card mr-2 thumbnail" style="background-color: rgba(225,225,225,0.5)">

              <div class="card-body" >

                    <h3 class="card-text" style="color:#5a01fe"> <b>Subcribe and get that golden oppurtunity where you can pay 50%  of your rent or purchases
                            and pay remaing 50% installmentally over time!!.</b>
                            <br>
                            <div class="btn-more pt-4">
                                    <a href="{{ route('register') }}" style="color:blue">
                             SIGN UP to Learn More.
                                <i class="right-arrow"></i>
                            </div>
                        </a></h3>
              </div>
            </div>
          </div>
    {{-- Slider --}}

{{-- Slider Ends Here --}}







{{--
<div class="row">

    <div class="col-md-12">

            <div class="container container-fluid" style="padding:120px 16px">
                    <div class="row">
                      <div class="col m6">
                        <h3>We know design.</h3>
                        <p>Get that dream house at affordable rates!!!  <br>homeland offers you the golden oppurtunity where you can also pay 50%  of your rent or purchases
                            and pay remaing 50% installmentally over time

                            <a href=""  data-toggle="modal" data-target="#exampleModalScrollable-modal">
                                    <div class="btn-more">
                                      Register to Learn More.
                                        <i class="right-arrow"></i>
                                    </div>
                                </a>
                            </p>

                      </div>
                      <div class="col m6 ">
                       <img  class="BackOpacityLayer" class="image round-large" src="index/best.jpg" alt="Buildings" width="" height="" >
                      </div>
                    </div>
                </div>
            </div>
    </div> --}}

    {{-- <div class="col-md-8">

        <div class="row">




        </div>

    </div> --}}

    {{-- <div class="col-md-4">
        <h1>Advert Here</h1>
    </div> --}}

</div>





<script src="js/typed.js"></script>
<script src="{{ asset('/js/typed.js') }}" defer></script>
        <script>
            var typed = new Typed('.typed-words', {
            strings: [" where you dont just get your dream home you get it at AFFORDABLE prices at the convinence of your HOME, OFFICE or anywhere you please... :)"],
            typeSpeed: 50,
            backSpeed: 100,
            backDelay: 15000,
            startDelay: 500,
            loop: true,
            showCursor: true
            });
        </script>



