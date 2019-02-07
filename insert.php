<?php
$db = new PDO("mysql:host=localhost;dbname=TestPHP","PVB","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
$queryStr = "INSERT INTO Goods (name, price, comment) VALUES ('admin', 58555,'hello'), ('vladimir', 5855448,'bey'), ('anton', 54412,'hello'), ('serge', 584635,'hello'), ('vova', 6565544,'hello')";
$db->query($queryStr);
} catch (PDOException $e) {
echo $e->getMessage();
}
