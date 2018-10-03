@extends('layouts.app')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>post edit</h1>

<form method="post" action="/posts/update/{{ $post->id}}">
{{csrf_field()}}
{{method_field('PUT')}}
Title :- <input type="text" name="title" value="{{ $post->title }}">
<br><br>
Description :- 
<textarea name="description"> {{$post->description}}</textarea>
<br>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection