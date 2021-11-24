@foreach ($products as $product)
<div class="col-lg-3 col-sm-4">
    <div class="image">
        <img src=" {{asset($product->img)}} " alt="">
        <span class="overlay"></span>
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
