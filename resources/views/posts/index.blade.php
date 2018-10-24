@extends('layouts.app')
@section('content')




    <h1>Posts </h1> <a href="/posts/create" >
    <center><button class="btn-success">Create Post</button></a></center>
        <table class="table table-striped">
        <th><strong> Post Title </strong></th>
        <th><strong> Description </strong></th>
        <th><strong> Created At </strong></th>
        <th><strong>  </strong></th>

        <th><strong> Actions </strong></th>
        <th><strong>  </strong></th>

        @foreach ($posts as $post)
        <tr>
<td> {{ $post->title }} </td>
<td> {{ str_limit($post->description , $limit = 50, $end = '...') }} </td>
<td> {{ date('M j, Y', strtotime( $post->created_at )) }} </td>

<td>    
<a href="/posts/view/{{ $post->id }}" ><button class="btn-primary">View</button></a>
</td>
<td>
    <a href="/posts/edit/{{ $post->id }}" ><button class="btn-warning">Edit</button></a>
    </td>
    <td>
    <form action="/posts/delete/{{$post->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')" value="Delete"/>Delete</button>
            </form>
            </td>
@endforeach

        </tr>
        </table>
        {{ $posts->links() }}
@endsection