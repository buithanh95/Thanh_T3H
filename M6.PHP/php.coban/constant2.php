
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        khi 1 biến trong php mà cộng , trừ , nhân ,chia , chia lấy dư với chính nó
        thì các bạn sẽ có cách viết rút gọn là chuyển toán tử lên trước dấu bằng
        $a = $a + 5; => $a += 5;
        $a = $a - 2; => $a -= 2;
        $a = $a * 3; => $a *= 3;
        $a = $a / 2; => $a /= 2;
        toàn tử ++ là toán tử tằng thêm 1 đơn vị
        toán tử -- là taons tử giảm đi 1 đơn vị
    </pre>
    <?php
    $a = 5;
    $a++;
    echo $a;
    ?>

</body>
</html>