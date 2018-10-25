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

<form method="post" action="/posts/update/{{ $post->id}}" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}
Title :- <input type="text" name="title" value="{{ $post->title }}">
<br><br>
Description :- 
<textarea name="description"> {{$post->description}}</textarea>
<br>
<div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Your photo') }}</label>
                            <div class="form-group col-md-6">
                            <input value="{{$post->photo}}" type="file" class="form-control-file"  name="photo">

                            </div>
    
                          </div>
                          <br>
<div class="col-md-4 col-form-label ">
Post Category
<select class="form-control" name="category_id">
@foreach ($categories as $category)
    <option @if($category->id == $post->category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
@endforeach

</select>
</div>
<br>
<input type="submit" value="Submit" class="btn btn-primary">

</form>

@endsection