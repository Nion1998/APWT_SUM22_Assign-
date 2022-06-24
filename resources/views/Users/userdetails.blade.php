<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.userbar')

@section('content')

    
        <h4>ID:{{$users->id}} </h4>
        <h4>Name: {{$users->name}} </h4>
        <h4>Email: {{$users->email}}</h4>
    

@endsection
</body>
</html>