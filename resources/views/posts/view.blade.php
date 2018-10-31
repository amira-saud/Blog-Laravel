@extends('layouts.app')
@section('content')

<div class="blog-header">

     <!-- Page Content -->
     <div class="container" style="width:1000px; margin:0 auto;">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
      by
      <a href="#">{{ $post->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>P{{ date('M j, Y', strtotime( $post->created_at )) }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="/uploads/{{$post->photo }}" alt="">

    <hr>

    <!-- Post Content -->


    <blockquote class="blockquote">
      <p class="mb-0">{{$post->description}}</p>

    </blockquote>

    <hr>

 <div class="card my-4">
@if (Auth::check())
<h5 class="card-header">Leave a Comment:</h5>
<span> This post has {{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</span>

  {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
  <p>{{ Form::textarea('body', old('body'),['class'=>'form-control', 'rows' => 2]) }}</p>
  {{ Form::hidden('post_id', $post->id) }}
  <p>{{ Form::submit('Comment') }}</p>
{{ Form::close() }}
@endif
@forelse ($post->comments as $comment)
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
            <h5 class="mt-0">{{ $comment->user->name }}</h5>

  
  <p>{{ $comment->body }}</p>
  <p style="float:right"> {{$comment->created_at}}</p>
  </div>
          </div>
  <hr>
@empty
  <p>This post has no comments</p>
  
  </div>
@endforelse

@endsection

