<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.mainbar')
    @section('content')
    
    <form method="post" action="">
        {{@csrf_field()}}

        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Email: <input type="text" name="email" placeholder="Email"><br>
        @error('email')
            {{$message}}<br>
        @enderror

        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror

        Confirm Password: <input type="password" name="conf_password"><br>
        @error('conf_password')
            {{$message}}<br>
        @enderror


        <input type="submit" value="Create">
    </form>
    @endsection('content')
</body>
</html>