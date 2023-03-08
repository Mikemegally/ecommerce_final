@extends('layouts.admin')
@section('content')

  <div class="container card shadow mt-5">
      <div class=" card-header py-4" style="width: 100%">
          <h6 class="m-0 font-weight-bold text-dark">welcome {{auth()->user()->name}}</h6>
      </div>
      <div class="card-body">
          <p>Admin page is to control the site by adding products, view all users, deleting them.</p>
          <p class="mb-0">Before working with this theme, you should become familiar with the
              Bootstrap framework, especially the utility classes.</p>
      </div>
  </div>
@endsection
