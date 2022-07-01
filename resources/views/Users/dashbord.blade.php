@extends('layouts.mainbar')
@section('content')
    <hr>
    <center>
        <h1>User Dashboard</h1>
    </center>
    <hr>
    <table border="1">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
        </tr>

        @foreach($users as $users)
            <tr height="50px">
                <td>{{$users->id}}</td>
                <td><a href="{{route('user.details',['id'=>$users->id])}}">{{$users->name}}</a></td>
                <td><a href="{{route('delete',['id'=>$users->id])}}">Delete</a></td>  
            </tr>
        @endforeach
    </table>
    <hr>
@endsection