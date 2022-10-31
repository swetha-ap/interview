<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
    @if(isset($data))
    {{$data->name}}
    {{$data->gender}}
    {{$data->email}}
    {{$data->password}}
    <img src="{{ asset('storage/img/'.$data->img) }}" alt="" height="200px">
    @endif
    <a href="{{url('logout')}}">logout</a>
</body>
</html>