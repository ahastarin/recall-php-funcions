<?php

// dalam php anonymous function (function tanpa nama) disebut dengan closure

// anonymous function biasanya digunakan sebagai argument atau sebagai value pada variable

$sayHello = function (string $name) {
    echo "hello $name";
};

$sayHello("ahas");

// anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya 

function sayGoodBye (string $name, $filters) {
    $finalName = $filters($name);
    return "Good Bye $finalName";
}

echo sayGoodBye("Ahas", function($name): string{
    return strtoupper($name);
});

// menggunakan variable function sebagai parameter $filter

$filterFunction = function ($name): string {
    return strtoupper($name);
};

echo sayGoodBye("Ahas", $filterFunction);



