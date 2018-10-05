@extends('layouts.app')
@section('content')




    <h1>Users </h1> 
        <table class="table table-striped">
        <th><strong> User Name </strong></th>
        

        <th><strong> Actions </strong></th>

        @foreach ($users as $user)
        <tr>
<td> {{ $user->name }} </td>


<td>    
<a href="/users/view/{{ $user->id }}" ><button class="btn-primary">Details</button></a>

    <form action="/users/delete/{{$user->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')" value="Delete"/>Delete</button>
            </form>

@endforeach

        </tr>
        </table>
        {{ $users->links() }}
@endsection