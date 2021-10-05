<?php
include_once '../functions/f-user.php';
include_once '../functions/functions.php';

if(isset($_POST['send_access'])){
$page = $_POST['page'];
$new_permition=implode(',',$_POST['page']);
$title = $_POST['title'];
$status = $_POST['status'];
insert_permition($title,$status,$new_permition);

    header("location:http://localhost/asamooz/panel/front-panel/dashboard.php?page=user-accses");
}

?>

<!doctype html>
<html lang="fa_ir" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ایجادو ویرایش مجوز دسترسی</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../bootstrap/js/popper.min.js">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">

</head>
<body>

<div style="background-color: #b2bec3 ">
    <form class="my-form" style=";padding:4px;box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0 );" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10" style=" margin-right: -10px;">
                <div class="alert alert-success" role="alert" >
                    <h4 class="alert-heading">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16" id="tools"><path d="M1 0L0 1l2.2 3.081a1 1 0 00.815.419h.07a1 1 0 01.708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 000 13a3 3 0 105.878-.851l2.654-2.617.968.968-.305.914a1 1 0 00.242 1.023l3.356 3.356a1 1 0 001.414 0l1.586-1.586a1 1 0 000-1.414l-3.356-3.356a1 1 0 00-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0016 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 00-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 01-.293-.707v-.071a1 1 0 00-.419-.814L1 0zm9.646 10.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"></path></svg>
                        پیکربندی دسترسی ها !</h4><br>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> برای افزودن ابزارک جدید به سایت به دو ورودی نیاز است .<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> در بخش اول شما محتوی لازم برای نمایش ابزارک را مشخص می کنید .<br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"></path>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"></path>
                        </svg> در بخش دوم کد svg تصویر مربوط به ابزارک مورد نظر را قرار دهید.<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"></path>
                        </svg> لطفا در هنگام قرار دادن کد svg ، ویژگی طول (Height) و عرض (Width) آن را حذف نمایید. </p>
                    <hr>
                    <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"></path>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                        </svg> اگر نیاز به افزودن بیش از یک ابزارک دارید لطفا روی " + افزودن ابزارک " کلیک کنید. </p>
                </div>
                <hr>
                <div style="box-shadow: 0 0 20px 0 rgb(0 0 0), 0 5px 5px 0 rgb(0 0 0);background-color: rgb(0 123 255 10% );padding: 21px;">
                    <h5 style="color: white;"> ایجاد مجوز دسترسی </h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3" style="direction: ltr;">
                                <input type="text" class="form-control" name="title" style="direction: rtl;font-size: small;" placeholder="لطفا عنوان مجوز را وارد نمایید" aria-label="Recipient's username" aria-describedby="basic-addon2" value=""  required>
                                <span class="input-group-text" id="basic-addon2"style="width: 164px;font-size: smaller;">عنوان مجوز | سمت در سیستم</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3" style="direction: ltr;font-size: revert;">
                                <select class="form-control" aria-label="Default select example" style="direction: rtl; font-size: small;" name = "status" required>
                                    <option value="" >انتخاب وضعیت مجوز دسترسی</option>
                                    <option value="on">فعال | دسترسی تعیین مجوز کاربر</option>
                                    <option value="off">غیر فعال | ذخیره به عنوان مجوز پیش نویس</option>
                                </select>
                                <span class="input-group-text" id="basic-addon2"style="width:100px;font-size: 13px;">وضعیت مجوز</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-md-4" >
                            <h5 style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-inboxes" style="color: #6d6e6b;" viewBox="0 0 16 16">
                                    <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6zM3.809.563A1.5 1.5 0 0 1 4.981 0h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066z"></path>
                                </svg>
                                مدیریت کاربران</h5><br>
                            <?php
                            $dir_Category = 'users/';
                            $scan_dir_Category = scandir($dir_Category);
                            foreach ($scan_dir_Category as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title = page_title ("users/".$file).'';
                                    if ($title!='') :
                                        ?>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'users'.$key; ?>" value="<?php echo $file;?>">
                                            <label class="form-check-label" for="<?php echo 'users'.$key; ?>"><?php echo $title; ?></label>
                                        </div>

                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-4" style="display: grid;">
                            <h5 style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-easel" style="color: #6d6e6b;" viewBox="0 0 16 16">
                                    <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"></path>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                                </svg>
                                مدیریت پرسنل</h5><br>
                            <?php
                            $dir_slider = 'staff/';
                            $scan_dir_slider = scandir($dir_slider);
                            foreach ($scan_dir_slider as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title=page_title("staff/".$file).'';
                                    if ($title!='') :
                                        ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'staff'.$key; ?>" value="<?php echo $file;?>">
                                            <label class="form-check-label" for="<?php echo 'staff'.$key; ?>"><?php echo $title; ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>




                        <div class="col-md-4" style="display: grid;">
                            <h5 style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-easel" style="color: #6d6e6b;" viewBox="0 0 16 16">
                                    <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"></path>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                                </svg>
                               آموزش مجازی</h5><br>
                            <?php
                            $dir_slider = 'teach/';
                            $scan_dir_slider = scandir($dir_slider);
                            foreach ($scan_dir_slider as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title=page_title("teach/".$file).'';
                                    if ($title!='') :
                                        ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'teach'.$key; ?>" value="<?php echo $file;?>">
                                            <label class="form-check-label" for="<?php echo 'teach'.$key; ?>"><?php echo $title; ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4" style="display: grid;">
                            <h5 style="color: white;position: relative; top: 12px; left: 2px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-easel" style="color: #6d6e6b;" viewBox="0 0 16 16">
                                    <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"></path>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                                </svg>
                               آزمون آنلاین</h5><br>
                            <?php
                            $dir_slider = 'online test/';
                            $scan_dir_slider = scandir($dir_slider);
                            foreach ($scan_dir_slider as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title=page_title("online test/".$file).'';
                                    if ($title!='') :
                                        ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'online test'.$key; ?>" value="<?php echo $file;?>" >
                                            <label class="form-check-label" for="<?php echo 'online test'.$key; ?>"><?php echo $title; ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-md-4" style="display: grid;">
                            <h5 style="color: white;    position: relative; top: 11px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-easel" style="color: #6d6e6b;" viewBox="0 0 16 16">
                                    <path d="M8.5 6a.5.5 0 1 0-1 0h-2A1.5 1.5 0 0 0 4 7.5v2A1.5 1.5 0 0 0 5.5 11h.473l-.447 1.342a.5.5 0 1 0 .948.316L7.027 11H7.5v1a.5.5 0 0 0 1 0v-1h.473l.553 1.658a.5.5 0 1 0 .948-.316L10.027 11h.473A1.5 1.5 0 0 0 12 9.5v-2A1.5 1.5 0 0 0 10.5 6h-2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-2z"></path>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
                                </svg>
                                ثبت نام آنلاین</h5><br>
                            <?php
                            $dir_slider = 'online registration/';
                            $scan_dir_slider = scandir($dir_slider);
                            foreach ($scan_dir_slider as $key=>$file) :
                                $tempext=explode(".",$file);
                                if (end($tempext)=="php") :
                                    $title=page_title("online registration/".$file).'';
                                    if ($title!='') :
                                        ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name = page[] type="checkbox" id="<?php echo 'online registration'.$key; ?>" value="<?php echo $file;?>">
                                            <label class="form-check-label" for="<?php echo 'online registration'.$key; ?>"><?php echo $title; ?></label>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                   </div>

                    <hr>
                    <input type="submit" name="send_access" value="ایجاد مجوز"  class="btn btn-primary btn-addmenue" style="margin-left: 5px;     position: relative;
    left: -709px;">
                    <br>
                </div>
                </div>
        </div>
       <hr>
        <?php
        include_once 'list_access.php';
        ?>
    </form>

    </div>

</body>
</html>
