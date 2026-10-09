<?php
// File: test_name.php
require_once "Validator.php";

// Test Case 1: Nama valid (Nama Lengkap Anda)
try {
    $result = validateName("Yessinta Dwi Rahayu");
    echo "PASS: Nama valid diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama valid ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama mengandung angka (Misal: 1212)
try {
    $result = validateName("1212");
    echo "FAIL: Nama angka seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama angka ditolak. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: Data kosong
try {
    $result = validateName("");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}