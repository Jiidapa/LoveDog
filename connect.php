<?php
try {
$pdo = new PDO("mysql:host=localhost;dbname=lovedog;charset=utf8", "", "");
} catch (PDOException $e) {
echo "เกิดข้อผิดพลาด : " . $e->getMessage();
}
?>