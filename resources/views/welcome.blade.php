<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="GET">
        <label for="name">Name</label>
        <input type="text" name='name' placeholder="{{$name}}"/>
        <br>
        <label for="email" >Email</label>
        <input type="email" name="email" id="email" placeholder="{{$age}}">
        <br>
        <input type="submit" value="submit" >
    </form>
</body>
</html>