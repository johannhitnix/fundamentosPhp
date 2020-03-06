<?php
// VARIABLES DE SERVIDOR
echo '<h5>SERVER_ADDR</h5>';
echo '<h3>';
echo $_SERVER['SERVER_ADDR'];
echo '</h3><br>';

echo '<h5>SERVER_NAME</h5>';
echo '<h3>';
echo $_SERVER['SERVER_NAME'];
echo '</h3><br>';

echo '<h5>SERVER_SOFTWARE</h5>';
echo '<h3>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h3><br>';

echo '<h5>HTTP_USER_AGENT</h5>';
echo '<h3>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h3><br>';

// --muestra la ip del cliente--
echo '<h5>REMOTE_ADDR</h5>';
echo '<h3>';
echo $_SERVER['REMOTE_ADDR'];
echo '</h3>';