<?php
$usia= 1000;
    if ($usia >= 0 && $usia <= 12) {
       echo  "kategori Anak-anak";
    
    } else if ($usia >= 13 && $usia <= 17) {
       echo  "kategori Remaja";
    
    } else if ($usia >= 18 && $usia <= 59) {
       echo   "kategori Dewasa";
   
    } else {
       echo   "kategori Lansia";
    }