@extends('layouts.admin')
@section('content')

    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif
    <div class="container card mb-3 mt-5" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('/storage/'.$products->image)}}" class="img-fluid rounded-start" height="100">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$products->name}}</h5>
                    <p class="card-text">{{$products->description}}</p>
                    <p class="card-text">{{$products->price}} L.E</p>
                    <p class="card-text text text-secondary-emphasis">there are {{$products->count}} items in stock </p>
{{--                    <p class="card-text"><small class="text-muted"></small>{{$products->category->name}}</p>--}}
                    <a href="{{route('adminproduct.index')}}" class="btn btn-secondary">
                        all product
                    </a>
                    <a href="{{route('adminproduct.edit',$products->id)}}" class="btn btn-secondary">
                        update product
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
