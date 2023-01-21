<?php

// recursive function adalah kemampuan function memanggil function dirinya sendiri 

// kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial 

// kode menggunakan looping biasa

function factorialLoop(int $value): int {
    $total = 1;
     
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(6)); 

// menggunakan recursive function 

function factorialRecursive(int $value):int 
{
    if($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value-1);
    }
}

var_dump(factorialRecursive(5));

// problem recursive function

    // walaupun recursive function sangan menarik namun kita harus hati hatu

    // jika recursive terlalu dalam, maka aakan ada kemungkinan terjadi memory overflow. yaitu error dimana memory digunakan terlalu banyak digunakan di php 

    // kenapa problem ini bisa terjadi? karena ketika kita memanggil function PHP akan menyimpannya ke dalam stack, ketika function tersebut memanggil function lain, maka stack akan menumpuk terus dan jika terlalu banyak, maka akan membutuhkan konsumsi memory yang besar. jika sudah melewati batas, maka akan terjadi error memory