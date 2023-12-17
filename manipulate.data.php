<?php
require_once 'db_config.php';

class ManipulateData
{
    private $conn;

    // Konstruktor kelas yang menerima koneksi database sebagai parameter
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Metode untuk menambahkan data baru ke dalam tabel
    public function addData($name, $nim, $checkbox, $radio, $browser, $ipAddress)
    {
        $sql = "INSERT INTO mytable (name, nim, checkbox, radio, browser, ip_address) 
                VALUES ('$name', '$nim', '$checkbox', '$radio', '$browser', '$ipAddress')";

        return $this->conn->query($sql);
    }

     // Metode untuk mengambil semua data dari tabel
    public function getAllData()
    {
        $sql = "SELECT * FROM mytable";
        $result = $this->conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    
    // Metode untuk memperbarui data dalam tabel berdasarkan ID
    public function updateData($id, $newName)
    {
        $sql = "UPDATE mytable SET name='$newName' WHERE id=$id";

        return $this->conn->query($sql);
    }

    // Add more methods as needed
}

$manipulator = new ManipulateData($conn);

// Menggunakan metode getAllData untuk mendapatkan semua data dari tabel dan menampilkannya
$data = $manipulator->getAllData();
foreach ($data as $row) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", NIM: " . $row['nim'] . "<br>";
}


?>