@extends('layouts.admin')
@section('content')
    @if(session()->has('success'))
        <p class="container alert alert-success mt-3 text-center">
            {{session()->get('success')}}
        </p>
    @endif

    <div class="container mt-5">
        <h3 class="text text-dark mb-5">
           Add category
        </h3>
        <form action="{{route('category.store')}}" method="POST" >
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label fw-bold">Category Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name"  name="name" required>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-dark mt-4" style="width: 450px; position: relative; left: 35%">
                Create
            </button>

        </form>
    </div>
@endsection
