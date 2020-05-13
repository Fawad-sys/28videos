<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($errors->all() as $e)
    <li>{{ $e }}</li>
    @endforeach

    <form action="/form" method="post">
    @csrf
    <input type="text" name="name"><br><br>
    <input type="text" name="email"><br><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>