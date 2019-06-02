<?php
$arr = arr(1,80,25,64,89,100,24);
// sắp xếp lại mảng theo thứ tự giảm dần
// sử dụng hàm rsort();

echo "<pre>";
print_r($arr);
echo "</pre>";
rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>