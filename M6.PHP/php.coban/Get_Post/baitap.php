<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<pre>
    Áp dụng kiến thức $_POST và $_GET xây dựng 1 form nhập
    chiều cao theo mét và cân năng theo kg để tính ra chỉ số BMI và
    tính toán xếp loại theo các chỉ số gầy béo bệnh tật theo link sau
    https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
    đọc lại bài viết nếu cần thiết
    https://toidicode.com/phuong-thuc-get-va-post-trong-php-64.html
</pre>
<?php
if (isset($_POST) && isset($_POST['chieucao']) && isset($_POST['cannang'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $_chieucao = $_POST['chieucao'];
    $_cannang = $_POST['cannang'];

    echo "<br> Chiều cao :" . $_chieucao;
    echo "<br> cân nặng" . $_cannang;

    $_Bmi = $_cannang / ($_chieucao * $_chieucao);
    echo " <br> BMI : " .$_Bmi;
    if($_Bmi < 18.5){
        echo "<br> Phân loại gầy" ;
        echo "<br> Nguy cơ phát triển thấp" ;
    }
    else if(($_Bmi > 18.5) && ($_Bmi < 24.9)){
        echo " <br> Phân loại : Bình thường";
    }
    else if(($_Bmi > 25.0) && ($_Bmi < 29.9)){
        echo " <br>Phân loại : hơi béo";
    }
    else if(($_Bmi > 30.0) && ($_Bmi < 34.9)){
        echo " <br>Phân loại : béo cấp 1";
    }
    else if(($_Bmi > 35.0) && ($_Bmi < 39.9)){
        echo " <br>Phân loại : béo cấp 2";
    }
    else {
        echo " <br> béo cấp 3";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form name="" action="" method="post">
                <div class="form-group">
                    <label for="chieucao">Chiều cao : </label>
                    <input type="text" name="chieucao" id="chieucao" placeholder="Nhập chiều cao" value="<?php echo $_chieucao; ?>" >
                </div>
                <div class="form-group">
                    <label for="cannang">Cân nặng</label>
                    <input type="text" name="cannang" id="cannang"  placeholder="Nhập cân nặng" value="<?php echo $_cannang; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>