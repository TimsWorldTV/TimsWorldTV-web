<?php
    $dir = './stl';
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "<div class='file'><a href='$dir/$file' download>$file</a></div>";
        }
    }
    
?>