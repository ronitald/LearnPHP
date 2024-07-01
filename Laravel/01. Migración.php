<?php

// IMPORTA LA CLASE 'BLUEPRINT' DESDE LARAVEL.
use Illuminate\Database\Schema\Blueprint;

// IMPORTA 'Schema' PARA INTERACTUAR CON LAS OPERACIONES DE LA BASE DE DATOS.
use Illuminate\Support\Facades\Schema;

// SE REALIZA UNA MIGRACION PARA LA TABLE DE 'users' EN LA BASE DE DATOS.
Schema::table('users', function (Blueprint $table) {
    // AGREGA UNA COLUMNA 'email' DE TIPO STRING 
    // SE LLAMA OTRO METODO QUE PERMITE A LA COLUMNA SER NULA. 
    $table -> string('email') -> nullable();
});
