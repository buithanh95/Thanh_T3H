<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>hàm trong php</h1>
<pre>
    hàm là một tập hợp các dòng code để thực hiện 1 chức năng
    ví dụ như hàm tính chu vi hình tròn , hàm tính diện tích hình chữ nhật
    hàm xuất file PDF...
    - thây vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng
    nhiều lần người ta sử dụng hàm . để khi cần dùng chỉ cần gọi tên hàm và sử dụng
    Hàm khai báo bằng từ khóa function
    function tên_hàm(tham_số_1,tham_số_2 ...){
        // code chạy trong hàm

        // return có thể có hoặc không
        // và sẽ kết thúc tại câu lệnh return
        return giá _trị;
    }
</pre>

<?php
// khai báo hàm với $r là tham số cần truyền vào

function tinhchuvihinhtron($r){
    $chuvi = 3.14*$r*2;
    return $chuvi;
}

// gọi hàm
$ketqua =tinhchuvihinhtron(5);
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