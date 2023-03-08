@extends('layouts.admin')
@section('content')

    <div class="container mt-5">
        <h3 class="text text-secondary mb-5">
            update Product
        </h3>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('adminproduct.update',$product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Product Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="name" value="{{old('name',$product->name)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-2 col-form-label fw-bold">Product Price</label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" id="price"  name="price" value="{{old('price',$product->price)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="count" class="col-sm-2 col-form-label fw-bold">Product count</label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" id="count"  name="count" value="{{old('count',$product->count)}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label fw-bold">Product description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="description" rows="2" name="description" ></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label fw-bold">Product category</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-select">
                        <option selected>Choose category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
                Update
            </button>

        </form>
    </div>
@endsection
