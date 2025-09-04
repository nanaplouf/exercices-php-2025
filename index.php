<?php

$nombre = 0;
while ($nombre <= 20) {
    $result = $nombre % 2;
    if($result == 0) {
        echo "<p>Nombre: $nombre</p>";
    }
    $nombre++;
}