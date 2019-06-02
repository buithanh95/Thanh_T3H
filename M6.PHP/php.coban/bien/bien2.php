<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>phạm vi của biến</h1>
<pre>
    - biến cục bộ : chỉ có ảnh hưởng và sử dụng đc trong 1 không gian nhất định
    - biến troàn cục : có ảnh hưởng và sử dụng ở mọi nơi
    - nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì php sẽ lấy giá trị của biến toàn cục
    ***
    tham số khi khao báo hàm là biến cục bộ và chỉ tác dụng trong hàm
    ví dụ là biến $r là biến cục bộ
</pre>
<?php
// biến cục bộ
$r = 100;


// khai báo hàm với $r là tham số cần truyền vào

function  tinhchuvihinhtron($r){
    // $chuvi là biến cục bộ
    $chuvi = 3.14 * $r * 2;
    return $chuvi;
}

// gọi hàm
// Biến $ketqua bên ngoài hàm là biến toàn cục
$ketqua = tinhchuvihinhtron(15);
echo "<br> Chu vi hinh tron là : " . $ketqua;
echo '<br>Test thử biến $r : ' . $r
?>
</body>
</html>