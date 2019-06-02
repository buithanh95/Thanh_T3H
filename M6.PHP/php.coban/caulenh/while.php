<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Vòng lặp while
    Cú pháp :
    điểm khởi đầu cảu vòng lặp
    while(điều kiện chạy của vòng lặp){
        //code thực thi bên trong vòng lặp

        //cuối vòng lặp
        sự thay đổi của biến đếm sau mỗi lần chạy
    }
</pre>

<?php
echo "<br> in ra các số từ 0 đến 19";
$i = 0;
while($i){
    echo "<br>" . $i;
    $i++;
}

echo "in ra các số chẵn từ 0 đến 19";
$i = 0;
while ($i){
    echo "<br>" .$i;
    $i+= 2;
}

echo "in ra các số chẵn từ 0 đến 19";
while ($i){
    if($i % 2 == 0){
        echo "<br>" . $i;
    }
    $i++;
}
?>
</body>
</html>