<?php
function  uploadTmage($image){
$name = $image['name'];
$tmp_name = $image['tmp_name'];
move_uploaded_file($tmp_name,"/uploads/".$name);
}
uploadTmage($_FILES['image']);
?>
<img src="./uploads/image.jpg" alt=""
