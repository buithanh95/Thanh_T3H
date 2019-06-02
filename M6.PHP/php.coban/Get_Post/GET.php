<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<h1>$_POST tong PHP sẽ lấy giá trị đi từ from có method = "get"</h1>
<h1>khi post data từ from có method = "get" thì data sẽ hiện trên URL</h1>
<?php
// hàm isset() check xem giá trị hc biến có tồn tại không
if (isset($_GET) && isset($_GET["email"]) && isset($_GET["password"])) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form name="login" method="get" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html
