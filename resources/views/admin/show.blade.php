@extends('layouts.app')
@section('title')
Show post
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
            /* max-height: 100vh;
            border-left: 2px solid #ccc;
            border-right: 2px solid #ccc; */
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
                    <form action="/admin/filter">
                        <h3>Search available properties</h3>

                        <div class="form-group ">
                            <label for="inputEmail4">property</label>
                            <select name="proptype" class="form-control form-control-sm" id="post">
                                <option value="" disabled selected>select property type</option>
                                <option value="house">house</option>
                                <option value="land">land</option>
                                <option value="shops">shops</option>
                                <option value="room">room</option>
                                <option value="room">office</option>
                                <option value="service apartment">service apartment</option>
                            </select>

                        </div>

                        <div class="form-group ">
                            <label for="housetype">specifications</label>
                            <select name="housetype" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value="room">bungalow</option>
                                <option value="mini-flat">mini-flat</option>
                                <option value="shops">room/selfcon</option>
                                <option value="room/selfcon">duplex</option>
                                <option value="Mansion">Mansion</option>
                                <option value="Penthouse">Penthouse</option>
                                <option value=" Terraced house"> Terraced house</option>
                                <option value="Semi-detached house"> Semi-detached house</option>


                            </select>



                        </div>

                        <div class="form-group">
                            <label for="landmark">landmark</label>
                            <select name="landmark" class="form-control form-control-sm">
                                <option value="" disabled selected>select landmark</option>
                                <option value="EPE">EPE</option>
                                <option value="ETI-OSA">ETI-OSA</option>
                                <option value="IBEJU-LEKKI">IBEJU-LEKKI</option>
                                <option value="IFAKO-IJAYE">IFAKO-IJAYE</option>
                                <option value="IKEJA">IKEJA</option>
                                <option value="IKORODU">IKORODU</option>
                                <option value="KOSOFE">KOSOFE</option>
                                <option value="LAGOS MAINLAND">LAGOS MAINLAND</option>
                                <option value="LAGOS-ISLAND">LAGOS-ISLAND</option>
                                <option value="MUSHIN">MUSHIN</option>
                                <option value="OJO">OJO</option>
                                <option value="OSHODI-ISOLO">OSHODI-ISOLO</option>
                                <option value="SOMOLU">SOMOLU</option>
                                <option value="SURULERE">SURULERE</option>
                                <option value="Alimosho">Alimosho</option>
                                <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
                                <option value="Agege">Agege</option>
                                <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                <option value="Badagry">Badagry</option>
                                <option value="Apapa">Apapa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Price Range</label>
                            <select name="worth" class="form-control form-control-sm">
                                <option value="" disabled selected>Price Range</option>
                                <option value=" ₦50,000 - ₦200,000"> ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000"> ₦200,000 - ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000">₦500,000 - ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000">₦1,000,000 - ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000">₦2,000,000 - ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000"> ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000"> ₦10,000,000 - ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000">₦20,000,000 - ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000">₦50,000,000 - ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above">₦100,000,000 - Above</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="inputCity">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value="rent">rent</option>
                                <option value="sale">sale</option>
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
            <div class="col-7 col-sm-12 col-md-7 text-center mid">
                <div class="row">
                    <div class="col-md-12 py-5 mid">
                        <div class="card ml-4 p-0" style="width: 35rem; :">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($images as $image)
                                    <div class="carousel-item {{$images[0] == $image ? "active" : ""}}" >
                                        <img class="img p-0" src="{{url('/images/'.$image)}}" width="450" height="300" >
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
                        <th>Property Type</th>
                        <td>{{$post->proptype}}</td>

                    </tr>
                    <tr>
                        <th>House Cartegory</th>
                        <td>{{$post->housetype}}</td>

                    </tr>
                    <tr>
                        <th>Landmark</th>
                        <td> {{$post->landmark}}</td>

                    </tr>
                    <tr>
                        <th>Worth</th>
                        <td> {{$post->worth}}</td>

                    </tr>
                    <tr>
                        <th>vacancy</th>
                        <td> {{$post->vacancy}}</td>

                    </tr>
                    <tr>
                        <th>Describtion</th>
                        <td>{{$post->propdesc}}</td>

                    </tr>
                </table>
                <div class="d-flex">
                    @if(auth()->user()->id == $post->moderator && $post->validation == 1)
                        <a href="/post/{{$post->id}}/edit"><button type="submit"
                            class="btn btn-secondary mr-3">Edit Post</button></a>
                            @endif
                            @if(auth()->user()->id == $post->user_id && $post->validation == 1)
                            <form action="/post/{{$post->id}}" method="POST" class="d-flex pl-3 ">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete Post</button>
                            </form>
                            @endif





                </div>





            </div>

            <div class="col-md-2 col-sm-12 col-lg-2 container py-3">
                    <div class="row">

                            <ul>
                                   <li><b><a href='/admin/pending'>view all pending posts</a></b></li>
                                    <li><b><a href='/admin/mypending'>view all your pending posts</a></b></li>
                                    <li  class="py-3"><b><a href='/admin/approved'>view all Approved posts</a></b></li>
                                     <li><b><a href='/admin/concluded'>view all concluded posts</a></b></li>


                                </ul>

                                <div class="container">
                                    <form action="/post/create">
                                        <b> <button class="container btn btn-link"><span style="color:#3490dc !important "> Create New Post </span></p></b>
                                        @csrf
                                    </form>

                                </div>
                     </div>
                     <div class="row ml-5">



                         @if($post->moderator  == 0)

                            <form action="/admin/{{$post->id}}" method="POST">

                                @csrf
                                @method('PATCH')

                                <div class="form-group ">
                                    <label for="moderator">Take Control Of This Post</label>
                                    <select name="moderator" class="form-control form-control-sm">
                                        <option value="" disabled selected>select name</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->firstname}} ({{$user->email}})</option>
                                    </select>
                                    @endforeach
                                </div>
                                @csrf
                            <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>
                            @endif

                                @if(auth()->user()->id == $post->moderator && $post->validation == 1)



                                <form action="/admin/{{$post->id}}" method="POST">
                                    @method('PATCH')
                                     @csrf
                                <div class="form-group ">
                                    <label for="validation">Approve This Post</label>
                                    <select name="validation" class="form-control form-control-sm">
                                            <option value="" disabled selected>select name</option>
                                            <option value="1">Not Approved </option>
                                            <option value="2">Approved </option>
                                            <option value="3"> Deactivate Post </option>
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </form>
                         @endif





                                @if( $post->validation == 2)


                                <form action="/admin/{{$post->id}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                <div class="form-group ">
                                    <label for="validation">Conclude Post</label>
                                    <select name="validation" class="form-control form-control-sm">
                                            <option value="" disabled selected>successful?</option>
                                            <option value="1">disable post </option>
                                            <option value="3">yes! post concluded </option>
                                            {{-- <option value="3"> Deactivate Post </option> --}}
                                        </select>
                                </div>
                                    {{-- @endforeach --}}

                                <button type="submit" class="btn btn-secondary">Submit</button>
                                @endif
                            </form>



                            </div>

            </div>
            @endsection
</body>

</html
