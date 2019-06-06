<?php
//Start the session
session_status();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// tạo ra 1 session trong php
$_SESSION['user_name'] = "admin";
$_SESSION['user_email'] = "admin@gmail.com";
$_SESSION['user_location'] = "hà nội";

// xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>
</html>