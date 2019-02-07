<?php
$db = new PDO("mysql:host=localhost;dbname=TestPHP","PVB","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
$queryStr = "CREATE TABLE Goods (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40), price INT, comment VARCHAR(150))";
$db->query($queryStr);
} catch (PDOException $e) {
echo $e->getMessage();
}