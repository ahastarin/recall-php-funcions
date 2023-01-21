<?php

// di php kita bisa membuat variable dimanapun yang kita mau 
// Scope variable adalah dibagian mana saja variable bisa diakses

// PHP memiliki 3 jenis variable scope, yaitu : 

    //(1) global
    //(2) local
    //(3) static

// GLOBAL SCOPE 

    // variable yang dibuat diluar function memiliki scope global 
    // variable di scope global, hanya bisa diakses dari luar function
    // artinya didalam function kita tidak bisa mengakses global scope 

    // $GLOBAL variable
        
        // selain menggunakan global keyword, setiap variable yang dibuat di global scope akan disimpan di dalam array $GLOBAL oleh PHP

        // jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function jika kita ingin mengakses global variable 

        // $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

        $name ="ahas";

        function hello() {
            echo "hello " . $GLOBALS['name'];
        }

       hello();

// LOCAL SCOPE 
    
    // variable yang dibuat di dalam function memiliki scope local 
    // variable di scope local hanya bisa diakses dari dalam function itu sendiri 
    // artinya variable tersebut tidak dapat diakses dari luar function atau dari function lain

    // kita bisa mengakses variable global dari dalam function dengan menggunakan keyword global 

    // $name ="ahas";

    function sayHello() {
        global $name; // memanggil variable global $name
        echo "hello $name";

        var_dump($GLOBALS["name"]);
    }

    SayHello();
    // hasil "hello ahas";

// STATIC SCOPE

    // secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi 

    // jika sebuah function sudah selesai dieksekusi, maka siklus hidup local variable selesai 

    // PHP memiliki scope yang bernama static 

    // static scope hanya bisa di set ke local variable

    // saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika function selesai dieksekusi

    // artinya jika function tersebut dieksekusi lagi, maka static variable akan memiliki value dari sebelumnya 

    // contoh

    function increment() {
        static $counter = 1;

        echo "Counter : $counter"; 

        $counter++;
    }

    increment();
    increment();
    increment();

    // jika variable $counter diatas tidak diberikan keyword static maka hasinya adalah Counter : 1 Counter : 1 Counter : 1

    // kalau diberi keyword static hasilnya adalah Counter : 1 Counter : 2 Counter : 3
    
    


