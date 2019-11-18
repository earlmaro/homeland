@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach
@endif

@if(session('sucess'))
<div class="alert alert-sucess">
    {{session('sucess')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
@if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                <strong>post created sucessfully</strong>
            </div>
            @endif
            @if(session()->has('updated'))
            <div class="alert alert-success" role="alert">
                <strong>Post updated sucessfully</strong>
                </div>
                @endif
                @if(session()->has('notedit'))
                <div class="alert alert-warning" role="alert">
                    <strong>Approved Post cannot be Editted</strong>
                    </div>
                    @endif
                    @if(session()->has('contact'))
            <div class="alert alert-success" role="alert">
                <strong>post created sucessfully</strong>
            </div>
            @endif

