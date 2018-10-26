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

<form method="post" action="/posts" enctype="multipart/form-data">
{{csrf_field()}}
Title :- <input type="text" name="title">
<br><br>
Description :- 
<textarea name="description" required></textarea>
<br>
<div class="form-group row">
                                    <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Yous photo') }}</label>
                                    <div class="form-group col-md-6">
                                    <input type="file" class="form-control-file" name="photo" required>

                                    </div>
<br><br>
<div class="col-md-4 col-form-label ">
Post Category
<select class="form-control" name="category_id" required>
@foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->title}}</option>
@endforeach

</select>
</div>
<br>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection