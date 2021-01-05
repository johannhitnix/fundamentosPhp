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
    <input type="text" name="nombre" id="nombre">
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'nombre') : ''; ?> 
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos">
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'apellidos') : ''; ?>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'email') : ''; ?>

    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
    <?php echo isset($_SESSION['errors']) ? Utils::showErrors($_SESSION['errors'], 'password') : ''; ?>

    <input type="submit" value="Registrarse">
</form>
<?php Utils::borrarErrores(); ?>