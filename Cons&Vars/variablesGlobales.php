<?php

$frase = "ni los genios son tan genios, ni los mediocres son tan mediocres";

function mondo(){
    global $frase;
    echo "<h1>$frase</h1>";
}

mondo();