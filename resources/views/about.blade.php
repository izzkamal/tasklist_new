<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1 style="color: rgb(255, 30, 30)"> Hello , <?php echo $name; ?></h1>
    <form action="store" method="POST">
        @csrf
        <input type="text" name="name" id="name">
        <button type="submit">Send</button>
    </form>
</body>

</html>
