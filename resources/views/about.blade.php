<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>About page here</h1></center>
@foreach ($d as $item)
<h5>{{$item}}</h5><br>
@endforeach
    
</body>
</html>