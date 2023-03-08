@extends('layouts.admin')
@section('content')
    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif
    <table class="container table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Product count</th>
            <th scope="col">Product description</th>
            <th scope="col">Product image</th>
            <th scope="col">Product category</th>
            <th scope="col">Delete product</th>
            <th scope="col">Show product</th>
            <th scope="col">Update product</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->count}}</td>
            <td>{{$product->description}}</td>
            <td>
                <img src="{{asset('/storage/'.$product->image)}}" height="100">
            </td>
            <td>{{$product->category->name}}</td>
            <td>
                <form action="{{route('adminproduct.destroy',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        delete product
                    </button>
                </form>

            </td>
            <td>
                <a href="{{route('adminproduct.show',$product->id)}}" class="btn btn-secondary">
                    show product
                </a>
            </td>
            <td>
                <a href="{{route('adminproduct.edit',$product->id)}}" class="btn btn-secondary">
                    update product
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
