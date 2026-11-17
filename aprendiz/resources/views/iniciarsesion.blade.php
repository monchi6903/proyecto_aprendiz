<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    @vite(['resources/css/iniciar_sesion.css'])
</head>
<body>
    
<h2> Captura de información usuario</h2>
<br>
<br>

    <form action=''>
        <label for="usuario">Usuario_</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <button type="submit" value="Iniciar sesión">
    </form>
</body>
</html>