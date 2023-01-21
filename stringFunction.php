<?php 

// merupakan function bawaan php untuk manipulasi string 

// join() / implode()
    // menggabung array menjadi string
    var_dump(join(' & ', ["Saka", "Martineli", "Trossard"]));
    var_dump(implode(' & ', ["Saka", "Martineli", "Trossard"]));
    // hasil String(27) "Saka & Martineli & Trossard"

// explode()
    // memecah string menjadi array
    var_dump(explode("&", "Saka&Martineli&Trossard"));
    // hasil array(3) { [0]=> string(4) "Saka" [1]=> string(9) "Martineli" [2]=> string(8) "Trossard" }  

// strtolower()
    // mengubah string menjadi lowercase
    strtolower("MUDRYK");
    // hasil "mudryk"

// strtoupper()
    // mengubah string menjadi uppercase
    strtolower("mudryk");
    // hasil "MUDRYK"

// substr()
    //mengambil beberapa karakter dari string
    //mengambil karakter index 0 sampai 4 | hasil "irin";
    echo substr("irin ahastari",0, 4);
    // hasil "irin"

//trim()
    // Menghapus whitespaces yang ada di awal dan diakhir string
    echo trim("        irin ahastari             ");
    // hasil "irin ahastari"

// NOTE: masih banyak fungsi string lainnya di php untuk dokumentasinya kunjungi: https://www.w3schools.com/php/php_ref_string.asp

