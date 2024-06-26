<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


function tampilkanSenimanDenganWarna($seniman) {
    $arrart = array("Leonardo Da Vinci", "Van Gogh", "Pablo Picasso", "Salvador Dali");
    $arrwarna = array(
        "Leonardo Da Vinci" => "img/monalisa.jpg",
        "Van Gogh" => "img/van gog.jpg",
        "Pablo Picasso" => "img/pablo.jpg",
        "Salvador Dali" => "img/salvador.jpg"
    );

    if (in_array($seniman, $arrart)) {
        $warna = $arrwarna[$seniman];
        echo "<h1>$seniman</h1>";
        echo "<img src='$warna' alt='$seniman' style='width: 100%; height: auto;'>";
    } else {
        echo "Seniman tidak dikenal.";
    }
}

if (isset($_POST['seniman'])) {
    $seniman = $_POST['seniman'];

  
    tampilkanSenimanDenganWarna($seniman);
} else {
    echo "Tidak ada seniman yang dipilih.";
}
?>
