@extends('layouts.app')
@section('content')


<div class="blog-header">
<h5>Category Name: </h5>
<div>{{ $category->title }}<div> <br>     
    </div>
    
    <div class="row">
        <div class="col-sm-8 blog-main">
            
          <h5>created at :</h5>
            <p>{{ date('M j, Y', strtotime( $category->created_at )) }} </p>
            
           

        </div><!-- /.blog-main -->
        
        
    </div><!-- /.row -->


@endsection