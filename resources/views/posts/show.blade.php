@extends('layouts.app')
@section('title')
Show Properties
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /* .mid {
            max-height: 100vh;
            border-left: 2px solid #ccc;
            border-right: 2px solid #ccc; */
        /* } */
    </style>
</head>

<body>


    @section('content')



    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-3 col-sm-12 col-lg-3  text-center ">

                <br>
                <div>
                    <form action="/admin/filter">
                        <h3 style="color:#3490dc">Search available properties</h3>

                        <div class="form-group ">
                            <label for="inputEmail4"style="color:#3490dc">property</label>
                            <select name="proptype" class="form-control form-control-sm" id="post"style="color:#3490dc">
                                <option value="" disabled selected>select property type</option>
                                <option value="house"style="color:#3490dc">house</option>
                                <option value="land"style="color:#3490dc">land</option>
                                <option value="shops"style="color:#3490dc">shops</option>
                                <option value="room"style="color:#3490dc">room</option>
                                <option value="room"style="color:#3490dc">office</option>
                                <option value="service apartment"style="color:#3490dc">service apartment</option>
                            </select>

                        </div>

                        <div class="form-group ">
                            <label for="housetype"style="color:#3490dc">specifications</label>
                            <select name="housetype" class="form-control form-control-sm"style="color:#3490dc">
                                <option value="" disabled selected>select property type</option>
                                <option value="room"style="color:#3490dc">bungalow</option>
                                <option value="mini-flat"style="color:#3490dc">mini-flat</option>
                                <option value="shops"style="color:#3490dc">room/selfcon</option>
                                <option value="room/selfcon"style="color:#3490dc">duplex</option>
                                <option value="Mansion"style="color:#3490dc">Mansion</option>
                                <option value="Penthouse"style="color:#3490dc">Penthouse</option>
                                <option value=" Terraced house"style="color:#3490dc"> Terraced house</option>
                                <option value="Semi-detached house"style="color:#3490dc"> Semi-detached house</option>


                            </select>



                        </div>

                        <div class="form-group">
                            <label for="landmark"style="color:#3490dc">landmark</label>
                            <select name="landmark" class="form-control form-control-sm"style="color:#3490dc">
                                <option value="" disabled selectedstyle="color:#3490dc">select landmark</option>
                                <option value="EPE"style="color:#3490dc">EPE</option>
                                <option value="ETI-OSA"style="color:#3490dc">ETI-OSA</option>
                                <option value="IBEJU-LEKKI"style="color:#3490dc">IBEJU-LEKKI</option>
                                <option value="IFAKO-IJAYE"style="color:#3490dc">IFAKO-IJAYE</option>
                                <option value="IKEJA"style="color:#3490dc">IKEJA</option>
                                <option value="IKORODU"style="color:#3490dc">IKORODU</option>
                                <option value="KOSOFE"style="color:#3490dc">KOSOFE</option>
                                <option value="LAGOS MAINLAND"style="color:#3490dc">LAGOS MAINLAND</option>
                                <option value="LAGOS-ISLAND"style="color:#3490dc">LAGOS-ISLAND</option>
                                <option value="MUSHIN"style="color:#3490dc">MUSHIN</option>
                                <option value="OJO"style="color:#3490dc">OJO</option>
                                <option value="OSHODI-ISOLO"style="color:#3490dc">OSHODI-ISOLO</option>
                                <option value="SOMOLU"style="color:#3490dc">SOMOLU</option>
                                <option value="SURULERE"style="color:#3490dc">SURULERE</option>
                                <option value="Alimosho"style="color:#3490dc">Alimosho</option>
                                <option value="Ajeromi-Ifelodun"style="color:#3490dc">Ajeromi-Ifelodun</option>
                                <option value="Agege"style="color:#3490dc">Agege</option>
                                <option value="Amuwo-Odofin"style="color:#3490dc">Amuwo-Odofin</option>
                                <option value="Badagry"style="color:#3490dc">Badagry</option>
                                <option value="Apapa"style="color:#3490dc">Apapa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2"style="color:#3490dc">Price Range</label>
                            <select name="worth" class="form-control form-control-sm"style="color:#3490dc">
                                <option value="" disabled selectedstyle="color:#3490dc">Price Range</option>
                                <option value=" ₦50,000 - ₦200,000"style="color:#3490dc"> ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000"style="color:#3490dc"> ₦200,000 - ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000"style="color:#3490dc">₦500,000 - ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000"style="color:#3490dc">₦1,000,000 - ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000"style="color:#3490dc">₦2,000,000 - ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000"style="color:#3490dc"> ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000"style="color:#3490dc"> ₦10,000,000 - ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000"style="color:#3490dc">₦20,000,000 - ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000"style="color:#3490dc">₦50,000,000 - ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above"style="color:#3490dc">₦100,000,000 - Above</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="inputCity"style="color:#3490dc">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm"style="color:#3490dc">
                                <option value="" disabled selectedstyle="color:#3490dc">select property type</option>
                                <option value="rent"style="color:#3490dc">rent</option>
                                <option value="sale"style="color:#3490dc">sale</option>
                            </select>


                        </div>

                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>



            {{-- @if(session()->has('approved'))
            <div class="alert alert-warning" role="alert">
                <strong>'Approved posts cannot be edited</strong>{{session()->get('approved')}}
            </div>
            @endif --}}
            <div class="col-7 col-sm-12 col-md-7 text-center mid">
                <div class="row">
                    <div class="col-md-12 py-5 mid">
                        <div class="card " style="width: 35rem;">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($images as $image)
                                    <div class="carousel-item {{$images[0] == $image ? "active" : ""}}">
                                        <img src="{{url('/images/'.$image)}}" class="img p-0" width="500" height="300" >
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>




                    </div>


                </div>
                <table class="table">

                    <tr>
                        <th style="color:#3490dc">Property Type</th>
                        <td style="color:#000">{{$post->proptype}}</td>

                    </tr>
                    <tr>
                        <th style="color:#3490dc">House Cartegory</th>
                        <td style="color:#000">{{$post->housetype}}</td>

                    </tr>
                    <tr>
                        <th style="color:#3490dc">Landmark</th>
                        <td style="color:#000"> {{$post->landmark}}</td>

                    </tr>
                    <tr>
                        <th style="color:#3490dc">Worth</th>
                        <td style="color:#000"> {{$post->worth}}</td>

                    </tr>
                    <tr>
                        <th style="color:#3490dc">vacancy</th>
                        <td style="color:#000"> {{$post->vacancy}}</td>

                    </tr>
                    <tr>
                        <th style="color:#3490dc">Describtion</th>
                        <td style="color:#000">{{$post->propdesc}}</td>

                    </tr>
                </table>
                <div class="d-flex">
                        @if($post->validation == 1)
                        <a href="/post/{{$post->id}}/edit"><button type="submit"
                            class="btn btn-secondary mr-3">Edit Post</button></a>
                            @endif

                            @if(auth()->user()->id == $post->user_id)
                            <form action="/post/{{$post->id}}" method="POST" class="d-flex pl-3 " style="display:inline !important">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  style="display:content" class="btn btn-danger">Delete Post</button>
                            </form>
                            @endif


                </div>





            </div>

            <div class="col-md-2 col-sm-12 col-lg-2 container py-3">
                    <div class="row">

                            <ul>
                                    {{-- <li class="py-3"><b><a href='/posts/all'> view all your posts</a></b></li> --}}
                                    <li  class="py-3"><b><a href='/posts/pending'>view all pending posts</a></b></li>
                                    <li  class="py-3"><b><a href='/posts/pending'>view all Approved posts</a></b></li>
                                    <li ><b><a href='/posts/conclude'>view all concluded posts</a></b></li>



                                </ul>


                                    <form action="/post/create">
                                      <b>  <button class="container btn btn-link ml-3"><span style="color:#3490dc"> Create New Post </span></p></b>
                                            @csrf
                                        </form>
                     </div>
                     <div class="row ml-5">




                            </div>

            </div>
            @endsection
</body>

</html
