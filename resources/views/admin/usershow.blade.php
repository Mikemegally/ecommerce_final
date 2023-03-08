@extends('layouts.admin')
@section('content')

    <div class="container card text-bg-dark" style="max-width: 30rem; margin-top: 90px; height: 27vh">
        <div class="card-header">{{$users->name}}</div>
        <div class="card-body">
            <h5 class="card-title">{{$users->email}}</h5><br>
            <p class="card-text">The role of this account is {{$users->is_admin?'Admin':'User'}}</p>
        </div>
@endsection
