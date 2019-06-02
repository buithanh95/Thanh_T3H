<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nạp 1 hay nhiều file php vào 1 file khác</h1>
<pre>
    để nạp file vào 1 file khác thì sử dụng :
    cách 1: include "đường dẫn của file.php"
    cách 2: include_once "đường dẫn của file.php"
    cách 3: require "đường dẫn của file.php"
    cách 4: require_once "đường dẫn của file.php"

    hàm var_dump($bien) trả về kiểu dữ liệu của biến và
    giá trị của biến hàm này đc sử dụng để debug

</pre>

<?php
//nap file functions.php vào trong file hiện tại
    require_once "functions.php";
    $r = 5;
    $ketqua = tinhchuvihinhtron($r);
    echo "tính chu vi hình tròn";
    var_dump("$ketqua");
    /*
 * Xuất hiện lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() ............
 * Do không tìm thầy hàm tính chu vi hình tròn
 */
?>
</body>
</html>