<?php
// File: Validator.php

function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function validateName($name) {
    // Memeriksa apakah inputan kosong atau hanya berisi spasi
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    // Memeriksa apakah inputan hanya mengandung huruf dan spasi
    if (!ctype_alpha(str_replace(' ', '', $name))) {
        throw new InvalidArgumentException("Nama harus huruf");
    }
    return true;
}