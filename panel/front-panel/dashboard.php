<?php
include_once '../functions/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="fa_ir">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="../../fr-html/index.php">نمایش سایت</a>
                <a class="btn btn-danger" href="#">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">

            <?php include_once 'dashboard-menu.php';
            ?>


        <div class="col-md-10">
            <div class="content-panel">
                <div class="container-fluid">
<?php
if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'user-setting':
            include_once 'users/user_setting.php';
            break;
        case 'user-accses' :
            include_once 'users/user-accses.php';
            break;
        case 'all user':
            include_once 'users/all user.php';
            break;
        case 'user-Attendance':
            include_once 'users/user-Attendance.php';
            break;

        case 'st-attendance':
            include_once 'staff/st-attendance.php';
            break;
        case 'st-salary':
            include_once 'staff/st-salary.php';
            break;
        case 'st-Leave':
            include_once 'staff/st-Leave.php';
            break;
        case 'st-Recruitment':
            include_once 'staff/st-Recruitment.php';
            break;
        case 'ac-Financial documents':
            include_once 'acconting/ac-Financial documents.php';
            break;
        case 'ac-payment system' :
            include_once 'acconting/ac-payment system.php';
            break;
        case 'ac-reports':
            include_once 'acconting/ac-reports.php';
            break;
        case 'teach.Request' :
            include_once 'teach/teach.Request';
            break;
        case 'form':
            include_once 'online registration/form.php';
            break;
        case 'te-shabihsaz':
            include_once 'online test/te-shabihsaz.php';
            break;
        case 'te-gateway':
            include_once 'online test/te-gateway';
            break;
        case 't.time':
            include_once 'time/t.time.php';
            break;
        case 't.time2':
            include_once 'time/t.time2.php';
            break;
        case 'online-chat':
            include_once 'online chat/online-chat.php';
            break;
        case 'f.forum':
            include_once 'Dialogue Forum/f.forum.php';
            break;
        case 'Academic Conferences':
            include_once 'Dialogue Forum/Academic Conferences.php';
            break;
        case 'b-book':
            include_once 'book/b-book.php';
            break;
        case 'b-exam':
            include_once 'book/b-exam.php';
            break;
        case 'b-homework';
            include_once 'book/b-homework.php';
            break;
        case'c-grade':
            include_once 'certificate/c-grade.php';
            break;
        case 'c-Education' :
            include_once 'certificate/c-Education.php';
            break;
        case'c-certificate' :
            include_once 'certificate/c-certificate.php';
            break;
        case'a-advice':
            include_once 'advice/a-advice.php';
            break;
        case'a-turn' :
            include_once 'advice/a-turn.php';
            break;
        case's-samane':
            include_once 'sms/s-samane.php';
            break;
        case 's-phone':
            include_once 'sms/s-phone.php';
            break;
        case 's-sms':
            include_once 'sms/s-sms.php';
            break;
        case'SMS inventory' :
            include_once 'sms/SMS inventory.php';
            break;
        case 's-Individual SMS' :
            include_once 'sms/s-Individual SMS.php';
            break;
        case 'group SMS' :
            include_once 'sms/s-group SMS.php';
            break;
        case 'S-System support':
            include_once 'sms/S-System support.php';
            break;
        case 'report':
            include_once 'users/report.php';
            break;
        case 'log-login user':
            include_once 'users/log-login user.php';
            break;
        case 'new-category':
            include_once 'category/new-category.php';
            break;
        case 'list-category':
            include_once 'category/list-category.php';
            break;
        case 'edit-category':
            include_once 'category/edit-category.php';
            break;


    }
}
else{
    include_once 'counter.php';
}
?>
                </div>
            </div>
        </div>
        </div>
</div>
</div>

<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/main.js"></script>
</body>
</html>