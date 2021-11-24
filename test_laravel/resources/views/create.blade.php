<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creat product</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <form method="POST" action="{{ url("/productt/store") }}" class="w-25 m-auto mt-5"  enctype="multipart/form-data">

        @csrf

        <div class="mb-3 mt-5">

            <input type="text" class="form-control" name="name" placeholder="product Name" >
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">

            <textarea type="email" class="form-control" name="desc" placeholder="product Description"></textarea>
        </div>
        @error('desc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">

            <input class="form-control" type="file" name="img" placeholder="Image">
          </div>
        @error('img')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary ">Create product</button>
    </div>


        </form>
        {{-- <h1>hello from create blade</h1> --}}
</body>
</html>
