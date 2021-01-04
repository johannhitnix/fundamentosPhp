<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') {
    echo "<strong class='green-label'>Registro completado correctamente</strong>";
}elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed') {
    echo "<strong class='red-label'>Registro fallido, introduzca bien los datos</strong>";
}
Utils::deleteSession('register');
?>

<!-- <form action="index.php?controller=usuario&action=save" method="POST"> -->
<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Registrarse">
</form>