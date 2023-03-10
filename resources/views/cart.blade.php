@extends('layouts.user')

@section('user')
    @if(session()->has('success'))
        <p class="container alert alert-secondary mt-2 text-center fw-bold">
            {{session()->get('success')}}
        </p>
    @endif
    <div class="container-fluid px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach( $products as  $product)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{'/storage/'.$product['image']}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$product['name']}}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>
                            <!-- Product price-->
                            {{$product['price']}} LE
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-secondary" href="{{route('cart.remove',$product['id'])}}">remove from cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

@endsection
