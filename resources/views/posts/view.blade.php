@extends('layouts.app')
@section('content')


<div class="blog-header">
<h1>{{ $post->title }}<h1>
       
    </div>
    
    <div class="row">
        <div class="col-sm-8 blog-main">
            
            <div class="blog-content">
                {{$post->description}}
            </div><!-- /.blog-post --><br>
            <p>{{ date('M j, Y', strtotime( $post->created_at )) }} </p>
            
           

        </div><!-- /.blog-main -->
        
        
    </div><!-- /.row -->


@endsection