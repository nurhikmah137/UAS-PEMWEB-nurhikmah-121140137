<?php

// Start session
session_start();

// Include database configuration
require_once 'db_config.php';

// Include ManipulateData class
require_once 'manipulate.data.php';

// Handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
    die();
    $name = validateInput($_POST["name"]);
    $nim = validateInput($_POST["nim"]);
    $checkbox = isset($_POST["checkbox"]) ? 1 : 0;
    $radio = validateInput($_POST["radio"]);
    // Validasi input
    if (!empty($name) && !empty($nim) && !empty($radio)) {
        // Gunakan parameterized query untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO mytable (name, nim, checkbox, radio) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $name, $nim, $checkbox, $radio);

        if ($stmt->execute()) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Gagal menambahkan data. Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Data tidak valid. Harap isi semua kolom yang diperlukan.";
    }
}

function validateInput($data) {
    // Validasi dan bersihkan data input
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getBrowser() {
    // Mendapatkan informasi browser pengguna
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    return $userAgent;
}

function getIPAddress() {
    // Mendapatkan alamat IP pengguna
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    return $ipAddress;
}
?>