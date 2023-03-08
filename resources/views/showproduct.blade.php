@extends('layouts.user')

@section('user')
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-4 mb-md-0" src="{{'/storage/'.$products->image}}"/></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$products->name}}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{$products->price}} LE</span>
                    </div>
                    <p class="lead">{{$products->description}}</p>
                    <p class="lead">there are {{$products->count}} items of this product</p>
                    <div class="d-flex">
                        <a class="btn btn-outline-dark flex-shrink-0" href="{{route('cart.add',$products->id)}}" >
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
