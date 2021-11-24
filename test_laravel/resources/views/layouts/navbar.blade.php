
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="icon" href="{{asset('images/—Pngtree—e commerce logo_5066822.png')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class=" bg-light w-100">
        <nav class="navbar navbar-expand-lg navbar-light  container">
            {{-- <div class="container bg-info"> --}}
            <div class="container-fluid">
            <a class="navbar-brand" href="{{url('products')}}">Free Shipping on All Over $75!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    @if(Auth::user())
                    <li class="nav-item">

                      <a class="nav-link active" aria-current="page" href="{{ url('products') }}">Products</a>
                    </li>
                 @if(Auth::user()->is_admin == 1)
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ url("/productt/create") }}">Add product</a>
                    </li>

                    @endif

                      <li class="nav-item">
                      <a class="nav-link active"  href="{{ url('/users/logout') }}">Logout</a>
                    </li>
      @else
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ url('/user/register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ url('/user/login') }}">Login</a>
                    </li>
      @endif
                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" href="#">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wishlist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    currncy:USD
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> My Cart</a>
                </li>
                </ul>

            </div>
            </div>

        </nav>
    </div>
        <div class="container mt-3 mb-3 ">
            <form class="d-flex w-25 m-auto " type="get" action ="{{url('/search')}}">
                <input class="form-control me-2  rounded-pill" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success  rounded-pill" type="submit">Search</button>
              </form>
        </div>


<div class="bg-color">
        <nav class="navbar navbar-expand-lg  container">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">F a s h i o n</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Women</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Men</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Footwear</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Accessories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Sales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Blog</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>









<div class="container">
    @yield('content')
</div>

<div class="container">
    @yield('content_1')
</div>

<div class="container">
    @yield('content_2')
</div>
<div class="overf mb-5 mt-5">
    @yield('content_3')
</div>
<div class="container mb-5 mt-5">
    @yield('content_4')
</div>
<div class="mb-5">
    @yield('content_5')
</div>

<div class="container">
    @yield('content_6')
</div>
<div class="container">
    @yield('content_7')
</div>
<footer>
    @yield('footer')
</footer>
<div class="downfooter">
    @yield('downfooter')
</div>


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
