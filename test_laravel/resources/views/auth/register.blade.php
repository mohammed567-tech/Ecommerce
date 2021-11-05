<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

</head>
<body>
    <div class ="result">
@if(Session::get('success'))
{
    <h1> {{ session::get('success') }}</h1>
}
@endif
@if(Session::get('fail'))
{
    <h1> {{ session::get('fail') }}</h1>
}
@endif
    </div>
    <form method="POST" class="my-5 w-25 container" action="{{ url("/user/create") }}" >

        @csrf

<div class="text-center  mb-5">
    <h1> Register </h1>
</div>
            <div class="mb-3">

                    <input type="email" class="form-control" placeholder="User Email" value="{{ old("email") }}" name="email">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <div class="mb-3">

                <input class="form-control" type="password" placeholder="Password " name="password">
            </div>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">

                    <input class="form-control" type="text" value="{{ old("email") }}" placeholder="phone" name="phone">
                </div>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


            <button type="submit" class="btn btn-primary">submit</button>
            <p class="mt-3">do you alredy have acount  <a href="{{ url("user/login") }}"> login</a></p>


            </form>
</body>
</html>
