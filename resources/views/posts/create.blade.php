@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="for-group">
            {{form::label('title','Title')}}
            {{form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="for-group">
            {{form::label('body','Body')}}
            {{form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{form::submit('Submit',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
@endsection