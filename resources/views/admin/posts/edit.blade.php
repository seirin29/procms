@extends('layouts.admin');

@section('content')

<h1>Edit Posts</h1>
{!! Form::model(['method'=>'PATCH','action'=>'AdminPostsController@update', 'files'=>true]) !!}

<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('category_id', 'Category:') !!}
{!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('photo_id', 'Photo:') !!}
{!! Form::file('photo_id') !!}
</div>

<div class="form-group">
{!! Form::label('body', 'Description:') !!}
{!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
</div>
@stop