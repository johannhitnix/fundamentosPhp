<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- explicacion atributo enctype: https://www.w3schools.com/tags/att_form_enctype.asp -->
    <!-- multipart/form-data: permite enviar archivos al servidor -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">nombre</label>
        <!-- exp regular: un numero indefinido de letras mayusculas -->
        <p><input type="text" name="nombre" id="nombre" pattern="[A-Z]+"></p>
        
        <label for="apellido">apellido</label>
        <!-- ALGO NUEVO: atributo autofocus -->
        <p><input type="text" name="apellido" id="apellido" pattern="[A-Z]+" autofocus="autofocus"></p>

        <input type="submit" value="Ok">
    </form>
</body>
</html>