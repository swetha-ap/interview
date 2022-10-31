<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('upd')}}/{{$data->id}}" method="post">
        @csrf
        <input type="text" name="name" id="" value="{{$data->name}}">
        <br>
        <input type="text" name="email" id="" value="{{$data->email}}">
        <br>
        <input type="text" name="gender" id="" value="{{$data->gender}}">
        <br>
        <input type="text" name="password" id="" value="{{$data->password}}"><br>
        <button type="submit">update</button>
    </form>
</body>
</html>