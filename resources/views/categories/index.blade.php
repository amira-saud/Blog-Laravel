@extends('layouts.app')
@section('content')




    <h1>Categories </h1> <a href="/categories/create" >
    <center><button class="btn-success">Create Post</button></a></center>
        <table class="table table-striped">
        <th><strong> Category Title </strong></th>
        <th><strong> Created At </strong></th>

        <th><strong> Actions </strong></th>

        @foreach ($categories as $category)
        <tr>
<td> {{ $category->title }} </td>

<td> {{ date('M j, Y', strtotime( $category->created_at )) }} </td>

<td>    
<a href="/categories/view/{{ $category->id }}" ><button class="btn-primary">View</button></a>
    <a href="/categories/edit/{{ $category->id }}" ><button class="btn-warning">Edit</button></a>

    <form action="/categories/delete/{{$category->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')" value="Delete"/>Delete</button>
            </form>

@endforeach

        </tr>
        </table>
        {{ $categories->links() }}
@endsection