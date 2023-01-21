<?php

// variable function digunakan untuk menggunakan value dari variable sebagai nama function

//contoh pengunaan pada variable filters
function sayHello(string $name, $filters) 
{
    $finalName = $filters($name);
    return "Hello $finalName"; 
};

echo sayHello("ahas", "strtoupper");
echo sayHello("ahas", "strtolower");