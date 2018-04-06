@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    {!! Form::open(['action'=> ['PostsController@update', $post->id ],'method'=>'POST']) !!}
        <div class="form-group">
            {{form::label('title','Title')}}
            {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="for-group">
            {{form::label('body','Body')}}
            {{form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body text'])}}
        </div><br>
        {{Form::hidden('_method','PUT')}}
        {{form::submit('Submit',['class'=>'btn btn-success'])}}
    {!! Form::close() !!}
@endsection