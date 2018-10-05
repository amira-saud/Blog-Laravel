@extends('layouts.app')
@section('content')


<div class="blog-header">
<h4>User Details: </h5>
<h5>user name</h5>
<div>{{ $user->name }}<div> <br> 
<h5>user email</h5> 
<div>{{ $user->email }}<div> <br>
    </div>
    
    <div class="row">
        <div class="col-sm-8 blog-main">
            
         
           

        </div><!-- /.blog-main -->
        
        
    </div><!-- /.row -->


@endsection