<?php
    $jawabanIsset = "Isset adalah = Fungsi yang digunakan untuk memeriksa apakah variabel disetel dengan nilai atau tidak. Fungsi isset akan menghasilkan nilai true jika sebuah variabel telah didefenisikan, dan false jika variabel tersebut belum dibuat. <br><br>";
    $jawabanEmpty = "Empty adalah = Fungsi empty digunakan untuk memeriksa apakah sebuah objek form telah diisi atau tidak, kita bisa menggunakan fungsi: empty. Fungsi empty akan menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>