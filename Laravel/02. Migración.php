<?php

// IMPORTA LA CLASE 'Blueprint' DESDE LARAVEL.
use Illuminate\Database\Schema\Blueprint;

// IMPORTA  'Schema' PARA INTERACTUAR CON LAS OPERACIONES DE LA BASE DE DATOS.
use Illuminate\Support\Facades\Schema;

// SE REALIZA UNA MIGRACION PARA LA TABLE DE 'posts' EN LA BASE DE DATOS.
Schema::table('posts', function (Blueprint $table) {
    // AGREGA UNA COLUMNA 'user_id' DE TIPO UNSIGNED INTEGER GRANDE.
    $table -> unsignedBigInteger('user_id');

    // SE ESTABLECE UNA RELACION DE LLAVE FORANEA EXTERNA EN ('user_id')
    // REFERENCIANDO LA COLUMNA 'id' DE LA TABLA 'users'.
    $table -> foreign('user_id') -> references('id') -> on('users');
});
