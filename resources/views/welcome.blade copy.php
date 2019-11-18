{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
@include("layouts.app")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" >

        <title>Laravel</title>


        <!-- Styles -->

    </head>
    <body>


{{-- Slider Starts Here --}}

    <div class="container-fluid slider p-5">

        <div class="first pb-5" >
            <h1  style="color: white">welcome to  <span style="color: #fe7e01"> HomeLand </span><span class="typed-words"  style="color: white"></span></h1> <br>
        </div>


        <div class="container-fluid ">

            <div class="row px-0">

                <div class="col-md-6 px-0">

                    <ul class="list p-0">
                        <li style="color: #fe7e01"><p>Are you tired of from the stress of looking for new accomodations</p></li>

                        <li style="color: #fe7e01"><p>are you looking for that new office space</p></li>

                        <li style="color: #fe7e01"><p>are you look for a service apartment that suits your taste and style and yet affordable</p></li>

                        <li style="color: #fe7e01"><p>are you are looking for a verified agent/developer to lease your property to</p></li>

                        <li style="color: #fe7e01"><p>are you looking to lease your room out to a roomate</p></li>
                    </ul>

                </div>

                <div class="col-md-6 px-0">

                        <ul class="list p-0">
                            <li style="color: #fe7e01"><p>Are you tired of from the stress of looking for new accomodations</p></li>

                            <li style="color: #fe7e01"><p>are you looking for that new office space</p></li>

                            <li style="color: #fe7e01"><p>are you look for a service apartment that suits your taste and style and yet affordable</p></li>

                            <li style="color: #fe7e01"><p>are you are looking for a verified agent/developer to lease your property to</p></li>

                            <li style="color: #fe7e01"><p>are you looking to lease your room out to a roomate</p></li>
                        </ul>

                    </div>

            </div> {{-- row --}}

        </div>

    </div> {{-- Slider --}}

{{-- Slider Ends Here --}}








<div class="row">

    <div class="col-md-8">

        <div class="row">

            <div class="col-md-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>

            <div class="col-md-8">

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1572504300795-54af7d92df51?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Office</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex illo labore quos culpa! Quisquam illum vel mollitia, rerum culpa minus perferendis ipsa officiis, voluptas, iste quae suscipit eum delectus?</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1572470161086-a44ca728cea4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Office</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex illo labore quos culpa! Quisquam illum vel mollitia, rerum culpa minus perferendis ipsa officiis, voluptas, iste quae suscipit eum delectus?</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="card" style="width: 18rem;">
                             <img src="{{URL::asset('/index/buy.jpg')}}" alt="logo"  width="70%"/>
                            <div class="card-body">
                                <h5 class="card-title">Office</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex illo labore quos culpa! Quisquam illum vel mollitia, rerum culpa minus perferendis ipsa officiis, voluptas, iste quae suscipit eum delectus?</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1572470161086-a44ca728cea4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Office</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex illo labore quos culpa! Quisquam illum vel mollitia, rerum culpa minus perferendis ipsa officiis, voluptas, iste quae suscipit eum delectus?</p>
                            </div>
                        </div>
                    </div>

                </div> {{-- Tab Content --}}

            </div>{{-- Inner Col-md-8 --}}

        </div> {{-- Inner Row --}}

    </div> {{-- Outer Col-md-8 --}}

    <div class="col-md-4">
        <h1>Advert Here</h1>
    </div>

</div>





<script src="js/typed.js"></script>
<script src="{{ asset('/js/typed.js') }}" defer></script>
        <script>
            var typed = new Typed('.typed-words', {
            strings: [" where you dont just get your dream home you get it at AFFORDABLE prices at the convience of your HOME, OFFICE or anywhere you please... :)"],
            typeSpeed: 50,
            backSpeed: 100,
            backDelay: 15000,
            startDelay: 500,
            loop: true,
            showCursor: true
            });
        </script>






