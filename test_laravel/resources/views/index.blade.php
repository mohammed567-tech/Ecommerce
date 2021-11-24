@extends('layouts.navbar')

@section('content')




<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/d.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/f.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/s.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>







  {{-- <h1>hello</h1>

@if(Auth::user() && Auth::user()->is_admin == 1)
<a href="{{ url("product/create") }}">Add Books</a>
@endif --}}

{{-- @foreach ($products as $product)
<a href="{{url ('product' , $product->id)}}"><h2>{{ $product->id }}</h2></a>
<h2>{{ $product->name }}</h2>

@if(Auth::user() && Auth::user()->is_admin==1 )
<a href="{{ url("products/edit", $product->id) }}">edit</a>
<a href="{{ url("products/delete" ,$product->id) }}">delete</a>
@endif
@endforeach --}}
@endsection


@section('content_1')
<div class="row  mb-5 m-auto">
{{-- Trend women --}}
        <div class="col-6 mt-3">
            <div class="row  w-100">

                <div class="col-8 w-100 ">
                    <div class= "">
                        <img src="{{ asset('images/d.jpg')}}" class="w-100" alt="">
                    </div>
                </div>




                <div class="col-4 w-100 mt-3"  >
                    <div class="head">
                        <h4>H o t  &MediumSpace;  C o l l e c t i o n</h4>
                        <h2>New Trend For Women</h2>
                    </div>
                    <div class="texthead">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ipsa eum quas nemo, numquam id reprehenderit, earum ratione deleniti rem quis,
                                corporis aliquid!</p>
                    </div>
                        <div class="btnshop">
                            <button class="btn border border-dark">Shop Now</button>
                        </div>
            </div>




        </div>








    </div>

        {{-- men collection --}}
        <div class="col-6 mt-3 ">
            <div class="row flex-column ">
                <div class="col-6 mb-3  w-100 ">
                    <div class="  ">
                        <img src="{{asset("images/d.jpg")}}" alt="" class="w-100">
                    </div>
                </div>

                <div class="col-6  w-100 ">
                    <div>
                        <img src="{{asset("images/d.jpg")}}" alt="" class="w-100">
                    </div>
                </div>


            </div>
        </div>
</div>


@endsection
@section('content_2')
<div>
<h2 class="make-border"><span>Futured Items</span></h2>
</div>


<div class="links ">
<div class=" " >
    <ul class="d-flex justify-content-center mt-4">
        <li class="ps-0">
            <a href="#">All</a>
        </li>
        <li class="ps-5">
            <a href="#">Men</a>
        </li>
        <li class="ps-5">
            <a href="#">Women</a>
        </li>
        <li class="ps-5">
            <a href="#">Kids</a>
        </li>
    </ul>
</div>
</div>



{{-- @foreach ($products as $product)
<a href="{{url ('product' , $product->id)}}"><h2>{{ $product->id }}</h2></a>
<h2>{{ $product->name }}</h2>

@if(Auth::user() && Auth::user()->is_admin==1 )
<a href="{{ url("products/edit", $product->id) }}">edit</a>
<a href="{{ url("products/delete" ,$product->id) }}">delete</a>
@endif
@endforeach --}}
<div class="row">
    @foreach ($products as $product)
    <div class="col-lg-3 col-sm-4">
        <div class="image">
            <img src=" {{asset($product->img)}} " alt="">
            <span class="overlay">5000$</span>
        </div>
        <div class="desc">
            <div class="text">

                <a href="{{url ('product' , $product->id)}}"><h4>{{ $product->id }}{{ $product->name }}</h4></a>
                @if(Auth::user() && Auth::user()->is_admin==1 )
                <a href="{{ url("products/edit", $product->id) }}">edit</a>
                <a href="{{ url("products/delete" ,$product->id) }}">delete</a>
                @endif
            </div>
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>



            </div>
            <div class="icon-product">
                <ul class="d-flex ps-0">
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0 ">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                            <i class="fa fa-share-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    @endforeach




{{-- end of product  --}}
</div>
{{-- end of row  --}}






@endsection


@section('content_3')



    <div class="row">
        <div class="col-6  pe-0   ">
            <img src="{{asset('images/pro.png')}}" alt=" " class="img-fluid  ">

        </div>
         <div class="col-6 ps-0 ">
            <img src="{{asset('images/pro.png')}}" alt=""  class="img-fluid  ">
        </div>
    </div>


@endsection


@section('content_4')
<div>
    <h2 class="make-border"><span>Trending Items</span></h2>
    </div>
<div class="row mt-5">

    <div class="col-lg-3 col-sm-4">
        <div class="image">
            <img src=" {{asset('images/images.jpg')}} " alt="">
            <span class="overlay">5000$</span>
        </div>
        <div class="desc">
            <div class="text">
                <h4>Lorem, ipsum.</h4>
            </div>
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>



            </div>
            <div class="icon-product">
                <ul class="d-flex ps-0">
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0 ">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                            <i class="fa fa-share-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    {{-- 2 --}}
    <div class="col-lg-3 col-sm-4">
        <div class="image">
            <img src=" {{asset('images/images.jpg')}} " alt="">
            <span class="overlay">5000$</span>
        </div>
        <div class="desc">
            <div class="text">
                <h4>Lorem, ipsum.</h4>
            </div>
            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>



            </div>
            <div class="icon-product">
                <ul class="d-flex ps-0">
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0 ">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link waves-effect waves-light ps-0">
                            <i class="fa fa-share-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
{{-- 3 --}}

<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>

{{-- 4 --}}
<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
{{-- 5 --}}
<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
{{-- 6 --}}

<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>


{{-- 7 --}}

<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
{{-- 8 --}}

<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset('images/images.jpg')}} " alt="">
        <span class="overlay">5000$</span>
    </div>
    <div class="desc">
        <div class="text">
            <h4>Lorem, ipsum.</h4>
        </div>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>



        </div>
        <div class="icon-product">
            <ul class="d-flex ps-0">
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0 ">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="">
                    <a class="nav-link waves-effect waves-light ps-0">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>



{{-- end of product  --}}
</div>
{{-- end of row  --}}



<div class="button  d-flex  justify-content-center  ">
    <button class="btn border border-dark ps-5 pe-5 fw-bold">LOAD MORE</button>
</div>
@endsection


@section('content_5')

<div class="bglayout d-flex  flex-column align-content-center ">
    <div class=" w-50 text-center  m-auto ">

        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, atque. Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit.</h5>

    </div>
    <div class="info  m-auto">
        <div class="profile text-center ">

            <img src="{{asset('images/f.jpg')}}" alt="" class="w-50" >
            <h5> Mohamed Salah</h5>
            <p>CEO of Team</p>
        </div>


    </div>





</div>

@endsection



@section('content_6')

    <div>
        <h2 class="make-border"><span>Latest Blog</span></h2>
    </div>

    <div class="row mt-5 mb-5">
        {{-- 1 --}}
        <div class="col-lg-4  mb-sm-3">
            <div>
                <img src=" {{asset('images/s.jpg')}} " alt="" class="img-fluid">
            </div>
            <div class="textPic mt-3">
                <h4>Lorem, ipsum dolor.</h4>
                <p> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nemo sit earum fugiat deserunt doloremque
                    ut consectetur dolor libero ipsum sed!</p>

            </div>
            <div class="btnRead">
    <button class="btn border border-dark ps-3 pe-3 fw-bold text-uppercase  "> read more</button>
            </div>
        </div>
{{-- 2 --}}
        <div class="col-lg-4  mb-sm-3">
            <div>
                <img src=" {{asset('images/s.jpg')}} " alt="" class="img-fluid">
            </div>
            <div class="textPic  mt-3">
                <h4>Lorem, ipsum dolor.</h4>
                <p> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nemo sit earum fugiat deserunt doloremque
                    ut consectetur dolor libero ipsum sed!</p>

            </div>
            <div class="btnRead">
    <button class="btn border border-dark ps-3 pe-3 fw-bold text-uppercase  "> read more</button>
            </div>
        </div>

        {{-- 3 --}}
           <div class="col-lg-4  mb-sm-3 ">
            <div>
                <img src=" {{asset('images/s.jpg')}} " alt="" class="img-fluid">
            </div>
            <div class="textPic  mt-3">
                <h4>Lorem, ipsum dolor.</h4>
                <p> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Nemo sit earum fugiat deserunt doloremque
                    ut consectetur dolor libero ipsum sed!</p>

            </div>
            <div class="btnRead">
    <button class="btn border border-dark ps-3 pe-3 fw-bold text-uppercase  "> read more</button>
            </div>
        </div>





    </div>

@endsection


@section('content_7')

<div>
    <h2 class="make-border"><span>Shop By Brand</span></h2>
</div>

<div class="row mt-5 mb-5">

    <div class="col-lg-3  col-sm-6 mb-sm-2 ">
        <div class="row">
            <div class="col-2" >
                <i class="fas fa-mountain fa-2x"></i>
            </div>
            <div class="col-6">
                <h4>themeforest</h4>
            </div>
        </div>
    </div>
{{-- 2 --}}
<div class="col-lg-3  col-sm-6 ">
    <div class="row">
        <div class="col-2" >
            <i class="fas fa-mountain fa-2x"></i>
        </div>
        <div class="col-6">
            <h4>themeforest</h4>
        </div>
    </div>
</div>
{{-- 3 --}}
<div class="col-lg-3  col-sm-6 ">
    <div class="row">
        <div class="col-2" >
            <i class="fas fa-mountain fa-2x"></i>
        </div>
        <div class="col-6">
            <h4>themeforest</h4>
        </div>
    </div>
</div>

{{-- 4 --}}

<div class="col-lg-3  col-sm-6">
    <div class="row">
        <div class="col-2" >
            <i class="fas fa-mountain fa-2x"></i>
        </div>
        <div class="col-6">
            <h4>themeforest</h4>
        </div>
    </div>
</div>

</div>
@endsection

@section('footer')
<div class="container">
<div class="row  ">
<div class="col-lg-3 mt-5 col-sm-6 col-md-5">
        <div class="mb-5">
            <h4>Shops</h4>
        </div>
        <div class="d-flex flex-column  mb-5 color-f">
            <a href="#" class="text-capitalize  mb-2">new In</a>
            <a href="#" class="text-capitalize mb-2">women</a>
            <a href="#" class="text-capitalize  mb-2">men</a>
            <a href="#" class="text-capitalize mb-2 ">schude shoes</a>
            <a href="#" class="text-capitalize  mb-2">bags & accessories</a>
            <a href="#" class="text-capitalize  mb-2">top brand</a>
            <a href="#" class="text-capitalize mb-2 ">sale & special offers</a>
            <a href="#" class="text-capitalize mb-2">look book</a>

        </div>


</div>


{{-- information --}}
<div class="col-lg-3 mt-5  col-sm-6 col-md-5">
    <div class="mb-5 text-uppercase">
        <h5>information</h5>
    </div>
    <div class="d-flex flex-column color-f  mb-5">
        <a href="#" class="text-capitalize  mb-2">about us</a>
        <a href="#" class="text-capitalize mb-2">customer services</a>
        <a href="#" class="text-capitalize  mb-2">new collection</a>
        <a href="#" class="text-capitalize mb-2 ">best sellers</a>
        <a href="#" class="text-capitalize  mb-2">manufacturers</a>
        <a href="#" class="text-capitalize  mb-2">privacy policy</a>
        <a href="#" class="text-capitalize mb-2 ">terms & condition</a>
        <a href="#" class="text-capitalize mb-2">blog</a>

    </div>


</div>


{{-- customer services --}}
<div class="col-lg-3 mt-5  col-sm-6 col-md-5">
    <div class="mb-5">
        <h5 class="text-uppercase">customer services</h5>
    </div>
    <div class="d-flex flex-column  color-f mb-5">
        <a href="#" class="text-capitalize  mb-2">search terms</a>
        <a href="#" class="text-capitalize mb-2">advanced search </a>
        <a href="#" class="text-capitalize  mb-2">store locations</a>
        <a href="#" class="text-capitalize mb-2 ">order and returns</a>
        <a href="#" class="text-capitalize  mb-2">contact us</a>
        <a href="#" class="text-capitalize  mb-2">rSS</a>
        <a href="#" class="text-capitalize mb-2 ">help &fAQs</a>
        <a href="#" class="text-capitalize mb-2">consultant</a>

    </div>


</div>


<div class="col-lg-3  col-sm-6 col-md-5 ">

    <div class="newseller mt-5">

        <h5 class="text-uppercase">  newsletter</h5>
    </div>
    <div class="formemail form-group ">
        <h6 class="text-capitalize  mt-4 mb-4">sign up for news letter</h6>
        <input type="email" class="form-control mb-4" placeholder="e-mail">
        <button type="submit" class="btn colorbg mb-2 w-100 fw-bold text-uppercase">subscribe</button>
    </div>
    <div class="iconsocial">

        <div class="row">

            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
            <div class="col-2">
                <a class="nav-link waves-effect waves-light ps-0">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>
        </div>
    </div>






</div>



</div>
</div>




@endsection

@section('downfooter')
<div class="row container align-items-center">
<div class="col-9 d-flex  fonts">
    <p>&copy; ELLA Fashion Store . All Rights Reserved.Software by Mohamed Ali Under Supervision -- Gehad Kassap -- </p>
</div>
<div class="col-2"> </div>

</div>



@endsection

