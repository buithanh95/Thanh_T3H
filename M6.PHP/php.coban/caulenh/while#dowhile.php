<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    sự khác biệt vòng lặp while và do...while :
    - vòng lặp while chỉ chạy khi điều kiện == true
    - vòng lặp do...while sẽ chạy lần đầu tiên ngay cả khi điều kiện == false
    từ lần thứ 2 trở đi vòng lặp do..while  chỉ chạy khi diều kiện == true
</pre>
<?php
$n = 20;
while ($n <10){
    echo "<br>" .$n;
    $n++;
}

$n = 20;
do{
    echo "<br>" .$n;
    $n++;
}while($n<10);
?>
</body>
</html>