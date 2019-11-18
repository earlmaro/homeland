@component('mail::message')
# Thank you for your message
<strong>Name</strong> {{$data['name']}}
<strong>Email</strong> {{$data['email']}}

<strong>City</strong> {{$data['city']}}

<strong>Address</strong> {{$data['Address']}}

<strong>Message</strong>

{{$data['message']}}

@endcomponent
