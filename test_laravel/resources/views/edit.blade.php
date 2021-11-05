<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("products/update" , $products->id ) }}">

@csrf

<div class="mb-3">
    <label class="form-label">product Name</label>
    <input type="text" class="form-control" name="name" value="{{$products->name }}">
</div>
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label class="form-label">product Desc</label>
    <textarea type="email" class="form-control" name="desc">{{ $products->desc}}</textarea>
</div>
@error('desc')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<button type="submit">Update Book</button>



</form>
</body>
</html>
