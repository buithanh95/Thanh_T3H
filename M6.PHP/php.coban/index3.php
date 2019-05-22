<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>in ra 1 chuỗi có ký tự nhày đơn '' hay nháy kép ""</h1>
<h1>in ra chuỗi chào 'hà nội' thì mình dùng nháy kép bao nháy đơn</h1>
<?php echo "chào 'hà nội'"  ;   ?>
<h1>in ra chuỗi chào "hà nội " thì mình dùng nhày đơn bao nháy kép </h1>
<?php echo 'chào "hà nội"'; ?>
<h1>tại sao lại phải dùng quy tắc này</h1>
<div>bởi php n cần phân biệt đâu là nháy để bao chuỗi và đâu là nháy cần xuất ra màn hình</div>
<h1>nháy bên ngoài cùng là nháy để bao chuỗi trong php</h1>
<h1>nháy bên trong thực sự xuất ra màn hình</h1>
<h1>để php phân biệt 2 nahys này thì mình càn dung quy tắc</h1>
<ol>
    <li>trong chuỗi có nahyf đơn thì dùng nháy kép để bao chuỗi</li>
    <li>trong chuỗi có nháy kép thì dùng nháy đơn để bao chuỗi</li>
</ol>
<h1>in ra chuỗi có nahys đơn chào 'hà nội'</h1>
<h1>nếu copy chuỗi có '' vào trong echo ''; thì phpstorm sẽ để ra ký tự escape \
để giúp php phân biệt đâu là nháy đơn bao chuỗi đâu là nháy đơn xuất ra màn hình</h1>
<h1>nháy đơn có escape \ trước \' thì php sẽ hiểu đây là cái chuỗi cần xuất ra màn hình</h1>
<?php echo 'chào \'hà nội \''; ?>
<h1>áp dụng tương tự với ""</h1>
<?php echo "chào \"hà nội\"" ?>
</body>
</html>