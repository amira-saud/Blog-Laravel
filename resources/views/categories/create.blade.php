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

<form method="post" action="/categories">
{{csrf_field()}}
Title :- <input type="text" name="title">


<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection