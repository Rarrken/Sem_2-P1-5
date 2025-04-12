<?php
    $temansaya = ["Ellen","Corin","lycaon","Rina"];
    print_r($temansaya);
    // untuk menampilkan seluruh nilai array
    echo $temansaya[2];
    echo "<ol>";
    foreach ($temansaya as $key => $value) {
        echo "<li>$key. $value</li>";
    }
    echo "</ol>";
    $temansaya[] = "Lycaon";
    print_r($temansaya);
    unset($temansaya[0]);
    print_r($temansaya);


    echo "<br><br><br>";
    $buah = ["L" => "Leci","P" => "Palapa","B" => "Blukutuk"];
    print_r($buah);
?>