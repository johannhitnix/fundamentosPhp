<?php
    // copy('file.txt', 'fileCopied.txt') or die("Nose pudo copiar");

    // rename('fileCopiedRenamed', 'fileCopiedRenamed.txt');

    // unlink('fileCopiedRenamed.txt');

    if (file_exists('file.txt')) {
        echo "<h1>archivo existe</h1>";
    }