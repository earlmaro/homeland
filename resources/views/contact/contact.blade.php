@extends('layouts.app')
@section('title')
Contact Us
@endsection

@section('content')
@if(! session()->has('contact'))
<div class="container-fluid">
    <h1>Contact Us</h1>
    <b>Homeland contact: 08139260120</b> <br>
    <b>Email: tobiprecious13@gmail.com</b>

<div>

        <form action="{{ url('/contact')}}" method="POST">
            @csrf
                <div class="form-row py-4">
                  <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control"  placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" name="Address" placeholder="1234 Main St">
                </div>

                  <div class="form-group ">
                    <label for="inputCity">City</label>
                    <input type="text"  name ="city" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group ">
                        <label for="message">Message</label>
                        <textarea name="message" id=""  class="form-control" cols="10" rows="10" placeholder="Enter message..."></textarea>
                      </div>






                      <button type="submit" class="btn btn-primary btn-lg">Send</button>

              </form>
              @endif
</div>
</div>
@endsection
