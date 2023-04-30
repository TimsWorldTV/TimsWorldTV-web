<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TWTV/3D</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <script>
        function downloadFile(url) {
            window.location.href = url;
        }
    </script>
  <body>
    <div class="banner">
      <div class="menu">
        <a href="rd/t3dw.html" target="_blank">
          <img src="img/t3dw.png" alt="Logo" class="logo">
        </a>
        <ul>
            <li><a href="stldown.php">STL-Downloads</a></li>
            <li><a href="#">Platzhalter</a></li>
            <li><a href="#">Platzhalter</a></li>

            
          </ul> 
        <ul>
          <li><a href="home">Startseite</a></li>
          <li><a href="gaming">Gaming-Lounge</a></li>
          <li><a href="technik">Technik-Lounge</a></li>
          <li><a href="3d">3D-Lounge</a></li>
        </ul> 
      </div>
      <div class="content">
        <h1>STL Downloads</h1>
        <p> Hier gibt es alle aktuellen STL datein</p>

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

      </div>
      
    </div>
    
    
    
  </body>
</html>
