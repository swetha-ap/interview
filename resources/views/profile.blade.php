<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <script>
        console.log({{$data}})
    </script> -->
    hello
    @if(isset($data))
    {{$data->name}}
    <img src="{{ asset('storage/img/'.$data->img) }}" alt="" height="200px">
    <br>
    <!-- {{$data->gender}} -->
    YOUR EMAIL :  {{$data->email}} <br>
    <!-- {{$data->password}} -->
    YOUR SUBJECT : {{$data->subname}} <br>
    YOUR SCHOOL : {{$data->school}} <br>
    JOINED ON : {{$data->join_date}} <br>
    @endif
    <a href="{{url('logout')}}">logout</a>
</body>
</html>