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

<form method="post" action="/categories/update/{{ $category->id}}">
{{csrf_field()}}
{{method_field('PUT')}}
Title :- <input type="text" name="title" value="{{ $category->title }}">
<br><br>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection