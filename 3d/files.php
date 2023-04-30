<?php
    // Bestimme den Pfad zum Ordner
    $dir = './stl';

    // Liste alle Dateien und Ordner im Ordner auf
    $files = scandir($dir);

    // Schleife über alle Dateien und Ordner
    foreach ($files as $file) {
        // Überprüfe, ob es sich um einen Ordner handelt
        if (is_dir($dir.'/'.$file) && $file != '.' && $file != '..') {
            // Wenn es sich um einen Ordner handelt, gib einen Link aus, um ihn zu betreten
            echo "<div class='file'><a href='stl/$file/'>$file/</a></div>";
        } elseif ($file != '.' && $file != '..') {
            // Wenn es sich um eine Datei handelt, gib einen Download-Link aus
            echo "<div class='file'><a href='$dir/$file' download>$file</a></div>";
        }
    }
?>