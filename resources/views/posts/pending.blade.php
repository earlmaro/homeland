@extends('layouts.app')
@section('title')
Your pending
@endsection

@section('content')




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .mid {
            min-height: 95vh;
            border-left: 2px solid #ccc;
            border-right: 2px solid #ccc;
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
                    <form action="/posts/filter">
                        <h3  >Search available properties</h3>

                        <div class="form-group ">
                            <label for="inputEmail4"   >property</label>
                            <select name="proptype" class="form-control form-control-sm" id="post">
                                <option value="" disabled selected>select property type</option>
                                <option value="house" >house</option>
                                <option value="land" >land</option>
                                <option value="shops" >shops</option>
                                <option value="room" >room</option>
                                <option value="room" >office</option>
                                <option value="service apartment" >service apartment</option>
                            </select>

                        </div>

                        <div class="form-group ">
                            <label for="housetype"  >specifications</label>
                            <select name="housetype" class="form-control form-control-sm"  >
                                <option value="" disabled selected >select property type</option>
                                <option value="room" >bungalow</option>
                                <option value="mini-flat" >mini-flat</option>
                                <option value="shops" >room/selfcon</option>
                                <option value="room/selfcon"  >duplex</option>
                                <option value="Mansion"  >Mansion</option>
                                <option value="Penthouse"  >Penthouse</option>
                                <option value=" Terraced house"  > Terraced house</option>
                                <option value="Semi-detached house" > Semi-detached house</option>


                            </select>



                        </div>

                        <div class="form-group">
                            <label for="landmark"  style="color:#3490dc"  style="color:#3490dc">landmark</label>
                            <select name="landmark" class="form-control form-control-sm"  style="color:#3490dc"  style="color:#3490dc">
                                <option value="" disabled selected  style="color:#3490dc"  style="color:#3490dc">select landmark</option>
                                <option value="EPE"  style="color:#3490dc"  style="color:#3490dc">EPE</option>
                                <option value="ETI-OSA"  style="color:#3490dc"  style="color:#3490dc">ETI-OSA</option>
                                <option value="IBEJU-LEKKI"  style="color:#3490dc"  style="color:#3490dc">IBEJU-LEKKI</option>
                                <option value="IFAKO-IJAYE"  style="color:#3490dc"  style="color:#3490dc">IFAKO-IJAYE</option>
                                <option value="IKEJA"  style="color:#3490dc"  style="color:#3490dc">IKEJA</option>
                                <option value="IKORODU"  style="color:#3490dc"  style="color:#3490dc">IKORODU</option>
                                <option value="KOSOFE"  style="color:#3490dc"  style="color:#3490dc">KOSOFE</option>
                                <option value="LAGOS MAINLAND"  style="color:#3490dc"  style="color:#3490dc">LAGOS MAINLAND</option>
                                <option value="LAGOS-ISLAND"  style="color:#3490dc"  style="color:#3490dc">LAGOS-ISLAND</option>
                                <option value="MUSHIN"  style="color:#3490dc"  style="color:#3490dc">MUSHIN</option>
                                <option value="OJO"  style="color:#3490dc"  style="color:#3490dc">OJO</option>
                                <option value="OSHODI-ISOLO"  style="color:#3490dc"  style="color:#3490dc">OSHODI-ISOLO</option>
                                <option value="SOMOLU"  style="color:#3490dc"  style="color:#3490dc">SOMOLU</option>
                                <option value="SURULERE"  style="color:#3490dc"  style="color:#3490dc">SURULERE</option>
                                <option value="Alimosho"  style="color:#3490dc"  style="color:#3490dc">Alimosho</option>
                                <option value="Ajeromi-Ifelodun"  style="color:#3490dc"  style="color:#3490dc">Ajeromi-Ifelodun</option>
                                <option value="Agege"  style="color:#3490dc"  style="color:#3490dc">Agege</option>
                                <option value="Amuwo-Odofin"  style="color:#3490dc"  style="color:#3490dc">Amuwo-Odofin</option>
                                <option value="Badagry"  style="color:#3490dc"  style="color:#3490dc">Badagry</option>
                                <option value="Apapa"  style="color:#3490dc"  style="color:#3490dc">Apapa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2"  style="color:#3490dc"  style="color:#3490dc">Price Range</label>
                            <select name="worth" class="form-control form-control-sm"  style="color:#3490dc"  style="color:#3490dc">
                                <option value="" disabled selected  style="color:#3490dc"  style="color:#3490dc">Price Range</option>
                                <option value=" ₦50,000 - ₦200,000"  style="color:#3490dc"  style="color:#3490dc"> ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000"  style="color:#3490dc"  style="color:#3490dc"> ₦200,000 - ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000"  style="color:#3490dc"  style="color:#3490dc">₦500,000 - ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000"  style="color:#3490dc"  style="color:#3490dc">₦1,000,000 - ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000"  style="color:#3490dc"  style="color:#3490dc">₦2,000,000 - ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000"  style="color:#3490dc"  style="color:#3490dc"> ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000"  style="color:#3490dc"  style="color:#3490dc"> ₦10,000,000 - ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000"  style="color:#3490dc"  style="color:#3490dc">₦20,000,000 - ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000"  style="color:#3490dc"  style="color:#3490dc">₦50,000,000 - ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above"  style="color:#3490dc"  style="color:#3490dc">₦100,000,000 - Above</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="inputCity"  style="color:#3490dc"  style="color:#3490dc">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm"  style="color:#3490dc"  style="color:#3490dc">
                                <option value="" disabled selected  style="color:#3490dc"  style="color:#3490dc">select property type</option>
                                <option value="rent"  style="color:#3490dc"  style="color:#3490dc">rent</option>
                                <option value="sale"  style="color:#3490dc"  style="color:#3490dc">sale</option>
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
            @foreach($unApprovedPosts as $unApprovedPost)
            <div class="col--7 col-sm-12 col-md-7 text-center mid">
                    <div class="row py-4">
                            <a href="/post/{{$unApprovedPost->id}}">
                                <div class="col-12">
                                    <div class="card mb-0" style="max-width: 100%;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                @foreach($images as $image)
                                                <div class="carousel-item {{$images[0] == $image ? "active" : ""}}">
                                                    <img src="{{url('/images/'.$image)}}" class="d-block w-100 img">
                                                    <div class="overlay">
                                                            <div class="text">Click To View Post</div>
                                                          </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"  style="color:#3490dc">POST DETAILS</h5>
                                                    {{-- <p>Advertiser: {{$unApprovedPost->user->firstname}}
                                                    {{$unApprovedPost->user->lastname}}</p> --}}
                                                    <p  style="color:#3490dc">TYPE OF PROPERTY: {{$unApprovedPost->proptype}}</p>
                                                    <p  style="color:#3490dc">LANDMARK: {{$unApprovedPost->landmark}}</p>
                                                    <p  style="color:#3490dc">ADDRESS: {{$unApprovedPost->address}}</p>
                                                    {{-- <p>Moderator: {{$unApprovedPost->moderator}}</p> --}}
                                                    {{-- <p>star: {{$unApprovedPost->user->star}}</p> --}}
                                                    <p  style="color:#3490dc">vacancy: {{$unApprovedPost->vacancy}}</p>
                                                    <p  style="color:#3490dc">describtion: {{$unApprovedPost->propdesc}}</p>
                                                    {{-- <p>Email: {{$unApprovedPost->user->email}}</p> --}}
                                                    <p class="card-text"  style="color:#3490dc">price range: {{$unApprovedPost->worth}}</p>
                                                    {{-- <p class="card-text"><small class="text-muted">{{$unApprovedPost->worth}}</small>
                                                    </p> --}}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </a>    </div>
                        </div>


            <div class="col-md-2 col-sm-12 col-lg-2 container py-3">
                <ul>
                    <li><b><a href='/posts/all'> view all your posts</a></b></li>
                    <li><b><a href='/posts/pending'>view all pending posts</a></b></li>


                </ul>

               <div class="container">
                    <form action="/post/create">
                      <b>  <button class="container btn btn-link"><span style="color:#3490dc"> Create New Post </span></p></b>
                            @csrf
                        </form>

        </div>

    </div>
    @endsection
</body>

</html



@endsection
















{{--
--}}
