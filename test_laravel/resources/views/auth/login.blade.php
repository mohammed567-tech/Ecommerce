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
    <form method="POST" class="my-5 mt-5 container w-25" action="{{ url("/user/login") }}" >

@csrf
<div class="m-auto text-center mb-5 ">
    <h1> LOG IN </h1>
</div>

    <div class="mb-3 ">
            <label class="form-label">User Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="mb-3">
    <label for="formFile" class="form-label">password</label>
        <input class="form-control" type="password" name="password">
    </div>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button type="submit" class="btn btn-primary">Login</button>
    <a href="register" class=" ms-3"> create new acount now!</a>

    {{-- <a href="{{ route('facebook.login') }}" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i>
        Login with Facebook
     </a> --}}

    </form>
</body>
</html>
