<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    vòng lặp do while
    Có pháp :
    sự khởi đầu của vòng lặp
    do{
        // các câu lệnh thực thi tong vòng lặp

        //sự thay đổi của biến đếm sau mỗi lần chạy
    }while (điều kiện chạy của vòng lặp);
</pre>

<?php
echo "<br> in ra các số từ 0 đến 19";
$i = 0;
do{
    echo "<br>" / $i;
    $i++;
}while($i<20);

echo "<br> in ra các số từ 0 đến 19 chỉ in số chẵn cách 1";
$i = 0;
do{
    echo "<br>" / $i;
    $i +=2 ;
}while($i<20);

echo "<br> in ra các số từ 0 đến 19 chỉ in số chẵn cách 2";
$i = 0;
do{
    if(($i % 2 ) ==0 ){
        echo "<br>" . $i;
        $i++ ;
    }
}while($i < 20);
?>

</body>
</html>