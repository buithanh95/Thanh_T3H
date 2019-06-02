<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> gán giá trị mặc định cho tham số</h1>
<pre>
    nếu không truyền biến hoặc giá trị cho tham số của hàm thì sẽ bị lỗi
    ............
    để tránh điều này nếu trong một số trường hợp ngta sẽ ggans giá trị mặc định co tham số
</pre>

<?php
// khai báo hàm với $r là tham số cần truyền vào

function tinhchuvihinhtron($r = 10){
    $chuvi = 3.14*$r*2;
    return $chuvi;
}

// gọi hàm
$ketqua =tinhchuvihinhtron();
echo "<br> chu vi hình tròn :" . $ketqua;



function dientichhinhtron ($r){
    $dientich = $r*$r*3.14;
    return $dientich;
}

$ketqua2 = dientichhinhtron(5);
echo "<br> dien tich hình tròn :" . $ketqua2;
?>


</body>
</html>