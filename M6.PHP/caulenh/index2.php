<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>câu lệnh điều kiện trong php</h1>
<?php
$age = 19;
if($age < 18){
    echo "<br> trẻ em";
}else if ($age < 30 ){
    echo "<br> thanh nien";
}else if($age < 50){
    echo "<br> trung nien";
}else{
    echo "<br> gia";
}
?>
</body>
</html>