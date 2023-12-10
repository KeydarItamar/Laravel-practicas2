<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Creacion de usuario</h1>
    <form action="/mostrarUsuario" method="post">
        @csrf
        <label for="numero">numero</label>
        <input type="number" name="numero" id="numero">
        <br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos">
        <br>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <br>
        <input type="submit">
    </form>

    <a href="/login">Iniciar sesion con usuario</a>
</body>
</html>