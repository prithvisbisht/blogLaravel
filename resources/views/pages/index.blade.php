@extends('layouts.app')

@section('content')
<h1></h1>
    <div class="jumbotron text-center">
            <div class="container">
              <h1 class="display-3">{{$title}}</h1>
              {{-- <p>This is a Laravel application</p> --}}
              <p>Join us, Lets Create a community of Creators.</p>
              <p class="text-center">Cause Creator never follows</p><hr>
              <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a></p>
            </div>
          </div>
@endsection