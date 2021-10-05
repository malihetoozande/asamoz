<!doctype html>
<html lang="fa_ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>گزارش آخرین وضعیت</title>
</head>
<body>
<div style="background: whitesmoke;">
<?php
include_once 'select-report.php';
?>
    <hr>
 <?php
 include_once 'user-report.php';
 ?>
    <hr>
 <?php
 include_once 'report-list.php';
 ?>

</div>

</body>
</html>
