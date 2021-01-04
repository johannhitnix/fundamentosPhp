<?php
// esta url se usa para hacer llamadas absolutas a otras partes del proyecto (imagenes, views, etc)
define("base_url", "http://localhost/masterPhp/proyectoMVC/");

// controlador y metodo x defecto
define("default_controller", "productoController");
define("default_action", "index");

// para poder acortar urls activar el rewrite_module de Apache:
// wamp/Apache/Apache modules/rewrite_module(checked)
// para usar ese modulo con un archivo .htaccess