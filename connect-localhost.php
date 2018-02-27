<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=sec01_bs;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "เกิดข้อผิดพลาด : " . $e->getMessage();
}
?>