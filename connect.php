<?php
try {
$pdo = new PDO("mysql:host=localhost;dbname=sec01_bs;charset=utf8", "Sec01_BS", "S4b31St6");
} catch (PDOException $e) {
echo "เกิดข้อผิดพลาด : " . $e->getMessage();
}
?>