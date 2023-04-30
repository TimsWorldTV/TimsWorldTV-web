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
        <a href="../rd/t3dw.html" target="_blank">
          <img src="../img/t3dw.png" alt="Logo" class="logo">
        </a>
        <ul>
            <li><a href="../3d">T3DW-Startseite</a></li>
            <li><a href="stldown2">STL-Downloads</a></li>
            <li><a href="#">Platzhalter</a></li>

            
          </ul> 
        <ul>
          <li><a href="../home">Startseite</a></li>
          <li><a href="../gaming">Gaming-Lounge</a></li>
          <li><a href="../technik">Technik-Lounge</a></li>
          <li><a href="../3d">3D-Lounge</a></li>
        </ul> 
      </div>
      <div class="content">
        <h1>STL Downloads</h1>
        <p>Hier gibt es alle aktuellen STL-Dateien:</p>
        <?php include './skript.php'; ?>
      </div>

        
      
    </div>
    
    
    
  </body>
</html>