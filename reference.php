<?php

// reference adalah mengakses variable yang sama dengan nama variable yang berbeda

// reference di php tidak sama dengan reference di bahasa pemrograman yang lainnya, misal di C / C++ Reference memiliki fitur pointer

// Analogi Reference itu seperti file, jika variable adalah sebuah file dan valuenya adalah isi dari file, maka reference adalah membuat shortcut terhadap file yang sama

// saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya akan berubah 

// untuk membuat reference, menggunakan keyword "&"

    //asign by referenc

        $name = "ahas";

        $otherName = &$name;

        $otherName ="ahastari";

        echo $name;

        // saat variable $otherName diganti maka variable dari $name akan berubah juga

    // pass by reference

        // mengirim data ke function menggunakan reference 

        function increment(&$value) {
            return $value++;
        }

        $counter = 1;
        echo increment($counter);
        echo increment($counter);
        echo increment($counter);

        // variable $counter juga ikut bertambah saat dilakukan increment pada $value karena $value merupakan reference dari $counter
    
    // returning reference 

        // PHP juga bisa mereturn reference 
        // namun hati - hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
    
        //contoh 

        function &getValue() {
            static $value = 100;
            return $value;
        }

        $a = &getValue();
        
        echo $a;

        // variable $value pada function akan mereference ke $a

