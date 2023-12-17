<?php

// Start session
session_start();

// Set session variable
$_SESSION['user'] = [
    'name' => 'yanti',
    'nim' => '121140137S',
    'checkbox' => true,
    'radio' => 'UAS',
    'browser' => getBrowser(),
    'ip_address' => getIPAddress(),
];

// Retrieve session variable
$user = $_SESSION['user'];

echo "Hello, $user[name]!";
?>

<?php
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