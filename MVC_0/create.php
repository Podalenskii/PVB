<?php

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
move_uploaded_file($tmp_name,"./uploads/".$name);
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';

?>
<img src="./uploads/image.jpg" alt="">