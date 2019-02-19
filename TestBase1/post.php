<?php

function uploadImage($image){
   
    $extention = pathinfo($image['name'], 4);
    $filename = uniqid().".".$extention;
    move_uploaded_file($image['tmp_name'], "./uploads/".$filename);
    return $filename;
}
function  addPost($title, $content, $filename){
$pdo = new PDO("mysql:host=localhost;dbname=example", "root", "");
$sql = "INSERT INTO posts (title, content, image) VALUES (:title, :content,"." :image)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $title);
$statement->bindParam(":content", $content);
$statement->bindParam(":image", $filename);
$statement->execute();
}
function getPosts(){
    $pdo = new PDO("mysql:host=localhost;dbname=example", "root", "");
$sql = "SELECT *FROM posts";
$statement = $pdo->prepare($sql);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
return $posts;
}