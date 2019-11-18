@extends('layouts.app')

@section('title')
Create Post
@endsection
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
            $(document).ready(function(){
                $('#post').on('change',function(){
                        if( $('#post').val()==="house"){
                        $("#houseprop").show()
                        }
                         else{
                         $("#houseprop").hide()
                         }
                    });

            });
            </script>
            <style>
            .jumbotron{
                color: #fe7e01;
            }
            .container{
                /* height: 100%; */
            }
            </style>
</head>
<body>
        @section('content')




                <form method="POST" action="/post" class="pb-0 " enctype="multipart/form-data">
            @csrf
            <div class="jumbotron jumbotrun-fluid">
                <div class="container">
                    <h2 class="text-center" style="color:#3490dc" style="color:#3490dc">CREATE NEW POSTS</h2>
                    <div class=" form-group">
                            <label for="proptype" style="color:#3490dc">property type</label>
                            <select name="proptype" class="form-control form-control-sm" id="post" style="color:#3490dc">
                                <option value="" disabled selected style="color:#3490dc">select property type</option>
                                <option value="house" style="color:#3490dc">house</option>
                                <option value="land" style="color:#3490dc">land</option>
                                <option value="shops" style="color:#3490dc">shops</option>
                                <option value="room" style="color:#3490dc">room</option>
                                <option value="room" style="color:#3490dc">office</option>
                                <option value="service apartment" style="color:#3490dc">service apartment</option>
                            </select>

                    </div>


                    <div class=" form-group"  id="houseprop" style="display:none;">
                            <label for="housetype" style="color:#3490dc">house type</label>
                            <select name="housetype" class="form-control form-control-sm" style="color:#3490dc">
                                <option value="" disabled selected style="color:#3490dc">select property type</option>
                                <option value="room" style="color:#3490dc">room</option>
                                <option value="mini-flat" style="color:#3490dc">mini-flat</option>
                                <option value="shops" style="color:#3490dc">room/selfcon</option>
                                <option value="room/selfcon" style="color:#3490dc">duplex</option>
                                <option value="service apartment" style="color:#3490dc">service apartment</option>
                            </select>

                    </div>
                    {{$errors->first('house-type')}}

                    <div class=" form-group">
                            <label for="landmark" style="color:#3490dc">land mark</label>
                            <select name="landmark" class="form-control form-control-sm" style="color:#3490dc">
                                <option value="" disabled selected>select landmark</option>
                                <option value="EPE" style="color:#3490dc">EPE</option>
                                <option value="ETI-OSA" style="color:#3490dc">ETI-OSA</option>
                                <option value="IBEJU-LEKKI" style="color:#3490dc">IBEJU-LEKKI</option>
                                <option value="IFAKO-IJAYE" style="color:#3490dc">IFAKO-IJAYE</option>
                                <option value="IKEJA" style="color:#3490dc">IKEJA</option>
                                <option value="IKORODU" style="color:#3490dc">IKORODU</option>
                                <option value="KOSOFE" style="color:#3490dc">KOSOFE</option>
                                <option value="LAGOS MAINLAND" style="color:#3490dc">LAGOS MAINLAND</option>
                                <option value="LAGOS-ISLAND" style="color:#3490dc">LAGOS-ISLAND</option>
                                <option value="MUSHIN" style="color:#3490dc">MUSHIN</option>
                                <option value="OJO" style="color:#3490dc">OJO</option>
                                <option value="OSHODI-ISOLO" style="color:#3490dc">OSHODI-ISOLO</option>
                                <option value="SOMOLU" style="color:#3490dc">SOMOLU</option>
                                <option value="SURULERE" style="color:#3490dc">SURULERE</option>
                                <option value="Alimosho" style="color:#3490dc">Alimosho</option>
                                <option value="Ajeromi-Ifelodun" style="color:#3490dc">Ajeromi-Ifelodun</option>
                                <option value="Agege" style="color:#3490dc">Agege</option>
                                <option value="Amuwo-Odofin" style="color:#3490dc">Amuwo-Odofin</option>
                                <option value="Badagry" style="color:#3490dc">Badagry</option>
                                <option value="Apapa" style="color:#3490dc">Apapa</option>
                            </select>
                    </div>
                    <div class=" form-group">
                            <label for="worth" style="color:#3490dc">property estimate</label>
                            <select name="worth" class="form-control form-control-sm" >
                                <option value="" disabled selected >select property type</option>
                                <option value=" ₦50,000 - ₦200,000" > ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000"> ₦200,000 -  ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000" >₦500,000 -  ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000" >₦1,000,000 -  ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000" >₦2,000,000 -  ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000"> ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000" > ₦10,000,000 -  ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000">₦20,000,000 -  ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000">₦50,000,000 -  ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above" >₦100,000,000 -  Above</option>
                            </select>
                    </div>
                    <div class="custom-file mb-4">
                            <label  for="phone" style="color:#3490dc">phone number</label>
                        <input type="number" name="phone" class="form-control form-control-sm" >

                      </div>

                    <div class=" form-group">
                            <label for="vacancy">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm" >
                                <option value="" disabled selected >select property type</option>
                                <option value="rent" >rent</option>
                                <option value="sale" >sale</option>
                            </select>

                    </div>
                    <div class=" form-group">
                            <label for="address">address</label>
                            <textarea name="address" id="" cols="30" rows="1" class="form-control form-control-sm"></textarea>
                    </div>

                    <div class=" form-group">
                            <label for="propdesc" >property describtion</label>
                            <textarea name="propdesc" id="" cols="30" rows="6"  class="form-control form-control-sm"></textarea>
                    </div>
                    <div class=" form-group"  id="houseprop" >
                            <label for="validation" >approved</label>
                            <select name="validation" class="form-control form-control-sm" >
                                <option value="1"  selected >No</option>
                                <option value="2" disabled>Yes</option>
                                <option value="3" disabled >in-active</option>

                            </select>

                    </div>
                    <div class=" form-group"  id="houseprop" style="display:none;" >
                            <label for="moderator" >approved</label>
                            <select name="moderator" class="form-control form-control-sm"  >
                                <option value="0"  >No</option>
                                <option value="2" disabled>Yes</option>
                                <option value="3" disabled>in-active</option>

                            </select>

                    </div>
                    <div class=" form-group"  id="houseprop" style="display:none;" >
                            <label for="review" >approved</label>
                            <select name="review" class="form-control form-control-sm">
                                <option value="0"  selected>No</option>
                                <option value="2" disabled >Yes</option>
                                <option value="3" disabled>in-active</option>

                            </select>

                    </div>

                    <div class="custom-file mb-4">
                            <input type="file" class="custom-file-input form-control-sm" multiple name='filename[]' id="customFile" style="color:#3490dc">
                            <label class="custom-file-label" for="customFile" style="color:#3490dc">Choose file</label>
                          </div>




                    <button type="submit" class="btn btn-primary btn-lg btn-block">Create new Post</button>




                </div>




             </div>
           </div>
        </form>

    @endsection


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>‌
</body>
</html>

