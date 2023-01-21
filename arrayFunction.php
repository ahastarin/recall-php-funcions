<?php

// di php juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array

// https://www.w3schools.com/php/php_ref_string.asp

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// array_keys()
    // mengambil semua keys milik array 
    var_dump(array_keys($data));

// array_values()
    // mengambil semua value milik array
    var_dump(array_values($data));

// array_map()
    // mengubah semua data array dengan callback 
    // syntax array_map(callback, array-yang-dimap)
    var_dump(array_map(fn($data) => $data * 2, $data));
    // hasil [2,4,6,8,10,12,14,16,18,20]

// rsort()
    // mengurutkan array terbalik 
    rsort($data);
    var_dump($data);
    // hasil [10,9,8,7,6,5,4,3,2,1]

// sort()
    // mengurutkan array
    sort($data);
    var_dump($data);
    // [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

// shuffle()
    // mengubah posisi data array secara random    
    shuffle($data);
    var_dump($data);
    // hasil angka yang dirandom dari $data