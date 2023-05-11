<?php
    echo "Tugas PHP OOP Yuaini Pranajelita";
    echo "<br>";
    echo "========================================";
    echo "<br>";

    require_once('CDMusic.php');
    $CDMusic = new CDMusic ("Lagu Indonesia", 200000, 10);
    $CDMusic->setPrice(200000);
    $CDMusic->setDiscount(10);
    $CDMusic->setArtist("Tiara Andini");
    $CDMusic->setGenre("Musik Pop");

    echo "Detail CD Music: ";
    echo "<br>";
    echo "Name : ".$CDMusic->getName();
    echo "<br>";
    echo "Harga : Rp.".$CDMusic->getPrice();
    echo "<br>";

    echo "<br>";
    echo "Informasi Lengkap Terkait CD Music Anda :<br>";
    echo "Artist : ".$CDMusic->getArtist();
    echo "<br>";
    echo "Genre : ".$CDMusic->getGenre();
    echo "<br>";
    echo "Diskon yang Berlaku : ".$CDMusic->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100 - $CDMusic->getDiscount())/100 * $CDMusic->getPrice();
    echo "<br>";

    echo "==================================================<br>";

    require_once('CDRack.php');
    $CDRack = new CDRack ("Samsung Corporation", 300000, 15);
    $CDRack->setPrice(300000);
    $CDRack->setDiscount(15);
    $CDRack->setCapacity("256");
    $CDRack->setModel("Solid State Drive 2,5");

    echo "Detail CD Rack : ";
    echo "<br>";
    echo "Name : ".$CDRack->getName();
    echo "<br>";
    echo "Harga : Rp.".$CDRack->getPrice();
    echo "<br>";

    echo "<br>";
    echo "Informasi Lengkap Terkait CD Rack Anda :<br>";
    echo "Kapasitas : ".$CDRack->getCapacity()." GB";
    echo "<br>";
    echo "Model : ".$CDRack->getModel();
    echo "<br>";
    echo "Diskon Berlaku : ".$CDRack->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Mendapat Diskon : Rp.".(100 - $CDRack->getDiscount())/100 * $CDRack->getPrice();
?>