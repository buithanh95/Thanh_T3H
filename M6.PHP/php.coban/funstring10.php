<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>các hàm sử lý chuỗi trong php</h1>
<pre>
    - strlen() đếm số ký tự trong 1 chuỗi
    - str_word_count() đếm số chữ trong 1 chuỗi
    - strpos("chuỗi mẹ","chuỗi con") tìm kiếm sự có mặt của 1 chuỗi con trong 1 chuỗi mẹ
    sẽ trả về false nếu k tìm đc
    trả về vị trí bắt đầu của chuỗi con trong chuỗi mẹ
    - str_replace() thay thế chuỗi 1 bằng chuỗi 2 trong 1 chuỗi mẹ
    - var_dump($bien): hàm này đc dùng để bebug xem cấu trúc của biến thuộc kiểu
    dữ liệu gì và chứa giá trị nào
</pre>
<?php
$find1 = strpos("thanh pho ha noi chao mung qua khach","ha noi");
var_dump($find1);
echo "<br>";
$find1 = strpos("thanh pho ha noi chao mung qua khach","da nang");
var_dump($find1);
?>
</body>
</html>