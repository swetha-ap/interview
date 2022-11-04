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
        enter school name: <input type="text" name="sname" id=""><br>
        enter subject: <input type="text" name="sub" id=""><br>
        enter join date: <input type="date" name="jdate" id=""><br>
        enter teacher id: <input type="number" name="tid" id=""><br>
        <button type="submit">submit</button>
    </form>
    @if(isset($msg))
    <script>
        alert('{{ $msg }}')
    </script>
    @endif
</body>
</html>