<?php

// secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function

// jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable - variable yang ingin kita gunakan 

$firstName = "Irin"; 
$lastName = "Ahastari";

$sayHello = function () use ($firstName, $lastName) {
    return "Hello $firstName $lastName";
};

echo $sayHello();

