<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Registro de clientes</h1>

    <form method="post" action="http://127.0.0.1:8000/clients/">

        @csrf

        <label for="">Nombre</label>
        <input type="text" name="name">

        <br><br>

        <label for="">Apellido</label>
        <input type="text" name="lastname">

        <br><br>

        <label for="">Email</label>
        <input type="text" name="email">

        <br><br>

        <label for="">Telefono</label>
        <input type="text" name="phone_number">

        <br><br>

        <button>Guardar</button>
        
    </form>
    
</body>
</html>