<?php 

// arrow function diperkenalkan pada php 7.4 

// secara garis besar sebenarnya arrow function dan anonymous function adalah 2 hal yang sama 

// hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan, tidak seperti anonymous function yang harus disebutkan secara manual menggunakan kata kunci "use"

// pembuatan arrow function tidak mengunakan kata kuncti function, melainkan fn

// arrow function di khususkan untuk membuat function yang sederhana 

$firstName = "Irin";
$lastName = "Ahastari";

// pada arrow function tidak perlu melakukan return, secara otomatis akan dilakukan
$sayHello = fn ($name) => "Hello $firstName $lastName $name";

echo $sayHello("ganteng");