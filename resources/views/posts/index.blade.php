@extends('layouts.app')
@section('title')
Home
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .mid {
            /* min-height: 95vh; */
            /* border-left: 2px solid #ccc; */
            /* border-right: 2px solid #ccc; */
        }

    </style>
</head>

<body>


    @section('content')



    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-3 col-sm-12 col-lg-3  text-center ">

                <br>
                <div>
                    <form action="/posts/filter" class="form">
                        <h3 style="color:#3490dc">Search available properties</h3>

                        <div class="form-group ">
                            <label for="inputEmail4" >property</label>
                            <select name="proptype" class="form-control form-control-sm" id="post" >
                                <option value="" disabled selected >select property type</option>
                                <option value="house"  >house</option>
                                <option value="land">land</option>
                                <option value="shops" >shops</option>
                                <option value="room">room</option>
                                <option value="room" >office</option>
                                <option value="service apartment" style="color:#3490dc">service apartment</option>
                            </select>

                        </div>

                        <div class="form-group ">
                            <label for="housetype" >specifications</label>
                            <select name="housetype" class="form-control form-control-sm" >
                                <option value="" disabled selected>select property type</option>
                                <option value="room" >bungalow</option>
                                <option value="mini-flat">mini-flat</option>
                                <option value="shops" >room/selfcon</option>
                                <option value="room/selfcon">duplex</option>
                                <option value="Mansion" >Mansion</option>
                                <option value="Penthouse" >Penthouse</option>
                                <option value=" Terraced house" > Terraced house</option>
                                <option value="Semi-detached house" > Semi-detached house</option>


                            </select>



                        </div>

                        <div class="form-group">
                            <label for="landmark" >landmark</label>
                            <select name="landmark" class="form-control form-control-sm" >
                                <option value="" disabled selected >select landmark</option>
                                <option value="EPE" >EPE</option>
                                <option value="ETI-OSA" >ETI-OSA</option>
                                <option value="IBEJU-LEKKI" >IBEJU-LEKKI</option>
                                <option value="IFAKO-IJAYE">IFAKO-IJAYE</option>
                                <option value="IKEJA" >IKEJA</option>
                                <option value="IKORODU" >IKORODU</option>
                                <option value="KOSOFE" >KOSOFE</option>
                                <option value="LAGOS MAINLAND" >LAGOS MAINLAND</option>
                                <option value="LAGOS-ISLAND" >LAGOS-ISLAND</option>
                                <option value="MUSHIN">MUSHIN</option>
                                <option value="OJO" >OJO</option>
                                <option value="OSHODI-ISOLO" >OSHODI-ISOLO</option>
                                <option value="SOMOLU">SOMOLU</option>
                                <option value="SURULERE" >SURULERE</option>
                                <option value="Alimosho" >Alimosho</option>
                                <option value="Ajeromi-Ifelodun" >Ajeromi-Ifelodun</option>
                                <option value="Agege" >Agege</option>
                                <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                <option value="Badagry" >Badagry</option>
                                <option value="Apapa" >Apapa</option> style="color:#3490dc"
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" >Price Range</label>
                            <select name="worth" class="form-control form-control-sm">
                                <option value="" disabled selected >Price Range</option>
                                <option value=" ₦50,000 - ₦200,000" > ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000" > ₦200,000 - ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000" >₦500,000 - ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000" >₦1,000,000 - ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000" >₦2,000,000 - ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000" > ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000" > ₦10,000,000 - ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000" >₦20,000,000 - ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000" >₦50,000,000 - ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above" >₦100,000,000 - Above</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="inputCity">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value="rent">rent</option>
                                <option value="sale" >sale</option>
                            </select>


                        </div>

                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>



            @if(session()->has('approved'))
            <div class="alert alert-warning" role="alert">
                <strong>'Approved posts cannot be edited</strong>{{session()->get('approved')}}
            </div>
            @endif
            <div class="col--7 col-sm-12 col-md-7 text-center mid">

                @foreach($approvedPosts as $approvedPost)
                <div class="row py-4">
                    <a href="/post/{{$approvedPost->id}}">
                        <div class="col-12">
                            <div class="card mb-0" style="max-width: 100%;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        @foreach($images as $image)
                                        <div class="carousel-item {{$images[0] == $image ? "active" : ""}}">
                                            <img src="{{url('/images/'.$image)}}" class="d-block w-100 img" height="">
                                            <div class="overlay">
                                                <div class="text">POST DETAILS</div>
                                              </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" >Post Describtion</h5>
                                            {{-- <p>Advertiser: {{$approvedPost->user->firstname}}
                                            {{$approvedPost->user->lastname}}</p> --}}
                                            <p >TYPE OF PROPERTY: {{$approvedPost->proptype}}</p>
                                            <p >LANDMARK: {{$approvedPost->landmark}}</p>
                                            <p >ADDRESS: {{$approvedPost->address}}</p>
                                            {{-- <p>Moderator: {{$approvedPost->moderator}}</p> --}}
                                            {{-- <p>star: {{$approvedPost->user->star}}</p> --}}
                                            <p >vacancy: {{$approvedPost->vacancy}}</p>
                                            <p >describtion: {{$approvedPost->propdesc}}</p>
                                            {{-- <p>Email: {{$approvedPost->user->email}}</p> --}}
                                            <p class="card-text" >price range: {{$approvedPost->worth}}</p>
                                            {{-- <p class="card-text"><small class="text-muted">{{$approvedPost->worth}}</small>
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </a> </div>
                @endforeach

            </div>

            <div class="col-md-2 col-sm-12 col-lg-2 container py-3">
                <ul>
                    <li><b><a href='/posts/all'> view all your posts</a></b></li>
                    <li><b><a href='/posts/pending'>view all pending posts</a></b></li>


                </ul>

                <div class="container">
                    <form action="/post/create">
                        <b> <button class="container btn btn-link "  style="color:#3490dc"><span style="color:#3490dc !important "> Create New Post </span></p></b>
                        @csrf
                    </form>

                </div>

            </div>
            @endsection
</body>

</html
