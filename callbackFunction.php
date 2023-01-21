<?php

// callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai yang diberikan di argument 

// halll ini sebenarnya sudah dilakukan pada materi variable function dan anonymous function 

// Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable 

// dan untuk memanggil callback function tsb, kita bisa menggunakan function call_user_func(callable, arguments)

// jika kita memberikan tipe data callable, maka variable tersebut bisa diisi dengan anonymous function, arrow function
function sayHello(string $name, callable $filters) {
    //format penulisan call_user_func 
        // call_user_funct(nama-variable-callable, parameter)
    $finalName = call_user_func($filters, $name);

    echo "Hello $finalName";
}

sayHello("ahas", function($name):string { 
    return strtoupper($name);
});

SayHello("ahas", "strtoupper");

SayHello("ahas", fn($name) => strtoupper($name));

