<!DOCTYPE html>
<html>
  <head>
    <script>
      // Generiere einen zufälligen Text
      function generateText() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        
        for (var i = 0; i < 10; i++) {
          text += possible.charAt(Math.floor(Math.random() * possible.length));
        }
        
        return text;
      }
    </script>
  </head>
  <body onload="document.getElementById('text').innerHTML = generateText();">
    <p id="text"></p>
  </body>
</html>