<?php
// Pfad zum Ordner mit den Dateien
$ordner = "./stl";

// Alle Dateien im Ordner auflisten und in ein Array speichern
$alle_dateien = scandir($ordner);

// Alle Dateien im Array durchgehen und Download-Links erstellen
foreach ($alle_dateien as $datei) {
  // Nur Links für Dateien erstellen (keine Ordner oder .-Dateien)
  if ($datei != "." && $datei != ".." && !is_dir($ordner . "/" . $datei) && strpos($datei, '.') !== false) {
    // Pfad zur Datei erstellen
    $dateipfad = $ordner . "/" . $datei;

    // Download-Link erstellen
    echo "<a href='$dateipfad' download>$datei</a><br>";
  }
}
?>