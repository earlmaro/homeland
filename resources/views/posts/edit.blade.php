@extends('layouts.app')

@section('title')
Edit Properties
@endsection
<!DOCTYPE html>
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




<form method="POST" action="/post/{{$post->id}}" class="pb-0 " enctype="multipart/form-data">
            @csrf
           @method('PATCH')
            <div class="jumbotron jumbotrun-fluid">
                <div class="container">
                    <h2 class="text-center">CREATE NEW POSTS</h2>
                    <div class=" form-group">
                            <label for="proptype">property type</label>
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
                    <div class=" form-group"  id="" style="display:none;" >
                            <label for="review" >review</label>
                            <select name="review" class="form-control form-control-sm">
                                <option value="0"  selected>No</option>
                                <option value="2" disabled >Yes</option>
                                <option value="3" disabled>in-active</option>

                            </select>

                    </div>


                    <div class=" form-group"  id="houseprop" style="display:none;">
                            <label for="housetype">house type</label>
                            <select name="housetype" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value="room">room</option>
                                <option value="mini-flat">mini-flat</option>
                                <option value="shops">room/selfcon</option>
                                <option value="room/selfcon">duplex</option>
                                <option value="service apartment">service apartment</option>
                            </select>

                    </div>
                    {{$errors->first('house-type')}}

                    <div class=" form-group">
                            <label for="post-type">land mark</label>
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
                    <div class=" form-group">
                            <label for="worth">property estimate</label>
                            <select name="worth" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value=" ₦50,000 - ₦200,000"> ₦50,000 - ₦200,000</option>
                                <option value=" ₦200,000 -  ₦500,000"> ₦200,000 -  ₦500,000</option>
                                <option value="₦500,000 -  ₦1,000,000">₦500,000 -  ₦1,000,000</option>
                                <option value="₦1,000,000 -  ₦2,000,000">₦1,000,000 -  ₦2,000,000</option>
                                <option value="₦2,000,000 -  ₦5,000,000">₦2,000,000 -  ₦5,000,000</option>
                                <option value=" ₦5,000,000 - ₦10,000,000"> ₦5,000,000 - ₦10,000,000</option>
                                <option value="₦10,000,000 -  ₦20,000,000"> ₦10,000,000 -  ₦20,000,000</option>
                                <option value="₦20,000,000 -  ₦50,000,000">₦20,000,000 -  ₦50,000,000</option>
                                <option value="₦50,000,000 -  ₦100,000,000">₦50,000,000 -  ₦100,000,000</option>
                                <option value="₦100,000,000 -  Above">₦100,000,000 -  Above</option>
                            </select>
                    </div>
                    <div class="custom-file mb-4">
                            <label  for="phone">phone number</label>
                        <input type="number" name="phone" class="form-control form-control-sm"  >

                      </div>

                    <div class=" form-group">
                            <label for="vacancy">vacancy</label>
                            <select name="vacancy" class="form-control form-control-sm">
                                <option value="" disabled selected>select property type</option>
                                <option value="rent">rent</option>
                                <option value="rent">sale</option>
                            </select>

                    </div>
                    <div class=" form-group">
                            <label for="address">address</label>
                            <textarea name="address" id="" cols="30" rows="1"   class="form-control form-control-sm"></textarea>
                    </div>

                    <div class=" form-group">
                            <label for="propdesc">property describtion</label>
                            <textarea name="propdesc" id="" cols="30" rows="6"  class="form-control form-control-sm"></textarea>
                    </div>
                    <div class=" form-group"  id="houseprop" style="display:none;">
                            <label for="validation">approved</label>
                            <select name="validation" class="form-control form-control-sm">
                                <option value="1"  selected>No</option>
                                <option value="2" disabled>Yes</option>
                                <option value="3" disabled>in-active</option>

                            </select>

                    </div>

                    <div class="custom-file mb-4">
                            <input type="file" class="custom-file-input form-control-sm" multiple name='filename[]' id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>




                    <button type="submit" class="btn btn-primary btn-lg btn-block">Edit Post</button>




                </div>




             </div>
           </div>
        </form>

    @endsection


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>‌
</body>
</html>

