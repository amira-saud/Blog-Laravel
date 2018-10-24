@extends('layouts.app')
@section('content')


<div class="blog-header">
<h1>{{ $post->title }}<h1>
       
    </div>
    
    <div class="row">
        <div class="col-sm-8 blog-main">
            
            <div class="blog-content">
            <h4>
                {{$post->description}}
                </h4>
            </div><!-- /.blog-post --><br>

           
            <p class="post-meta">Posted by:
            {{ $post->user->name }}<br>
              <a href="#"></a>
               on {{ date('M j, Y', strtotime( $post->created_at )) }}</p>
        </div><!-- /.blog-main -->
        
        
    </div><!-- /.row -->


@endsection