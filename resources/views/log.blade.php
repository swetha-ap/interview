<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        @csrf
    <input type="text" name="email" id="" placeholder="enter email"><br>
    <input type="text" name="pswd" id="" placeholder="enter password"><br>
    <button type="submit">login</button>
    </form>
    @if(isset($error))
    <script>
        alert('{{$error}}')
    </script>
    @endif
</body>
</html>