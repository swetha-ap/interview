<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
       enter name : <input type="text" name="name" id=""><br>
       enter email: <input type="text" name="email" id=""><br>
       enter gender: <br>
        male<input type="radio" name="gender" id="" value="m">
      female <input type="radio" name="gender" id="" value="f" }}>
       <br>
       enter password: <input type="text" name="password" id="">
       <br>
       upload: <input type="file" name="img" id="">
       <button type="submit">submit</button>
    </form>
    <br><br>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>gender</td>
            <td>password</td>
            <td>pic</td>
            <td>action</td>
        </tr>
        @foreach($data as $i)
        <tr>
            <td>{{ $i->id}}</td>
            <td>{{ $i->name}}</td>
            <td>{{ $i->email}}</td>
            <td>{{ $i->gender}}</td>
            <td>{{ $i->password}}</td>
            <td><img src="{{ asset('storage/img/'.$i->img) }}" alt="" height="100px" width="50px"></td>
            <td><a href="{{ url('delete') }}/{{$i->id}}">delete</a></td>
            <td><a href="{{url('update')}}/{{$i->id}}">update</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>