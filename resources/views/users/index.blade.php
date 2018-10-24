@extends('layouts.app')
@section('content')




    <h1>Users </h1> 
        <table class="table table-striped">
        <th><strong> User Name </strong></th>
        <th><strong> User E-mail </strong></th>

        <th><strong> Actions </strong></th>
        <th><strong>  </strong></th>

        @foreach ($users as $user)
        <tr>
<td> {{ $user->name }} </td>
<td> {{ $user->email }} </td>

<td>    

<a href="/users/view/{{ $user->id }}" ><button class="btn-primary">Details</button></a>
</td>
<td>
    <form action="/users/delete/{{$user->id}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')" value="Delete"/>Delete</button>
            </form>
            </td>
@endforeach

        </tr>
        </table>
        {{ $users->links() }}
@endsection