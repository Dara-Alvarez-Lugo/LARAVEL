<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar usuario</h1>

    <form method="post" action="http://127.0.0.1:8000/users/">

        @csrf

        <label for="">Nombre</label>
        <input type="text" name="name" value="{{$user->name}}">

        <br><br>

        <!-- <label folabr="">Apellido</label>
        <input type="text" name="lastname" value="{{$user->lastname}}"> -->

        <br><br>

        <label for="">Email</label>
        <input type="text" name="email" value="{{$user->email}}">

        <br><br>

        <!-- <label for="">Password</label>
        <input type="password" name="password"> -->

        <br><br>

        <button>Guardar</button>

    </form>

</body>
</html>