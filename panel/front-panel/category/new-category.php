<?php
include_once '../functions/f-category.php';
include_once '../functions/functions.php';
    if(isset($_POST['send'])){
        $info=$_POST['info'];
        add_category($info);
        header("location:dashboard.php?pages=list-category");
    }
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>افزودن دسته جدید</title>
        <link rel="stylesheet" href="../../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/style.css">


    </head>
    <body>
    <p class="title-form">افزودن دسته جدید</p>
    <form class="my-form" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-9">

                <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید" required>
                <br>
                <input class="form-control inputbig" type="text" name="info[sort]" placeholder="ترتیب نمایش را بصورت عددی ایجاد کنید" required>
                <br>
                <select class="form-control" aria-label="Default select example" name="info[parrent]" required>
                    <option value="0">انتخاب به عنوان سرگروه منو</option>
                    <?php
                    $res = list_category();
                    foreach ($res as $val) :?>
                        <option value="<?php echo $val->id;?>>"><?php echo $val->title;?></option>
                    <?php endforeach;?>
                </select><br>
                <div class="custom-control custom-switch">
                    <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" checked >
                    <label class="custom-control-label" for="customSwitch1">فعال|غیرفعال</label>
                </div><br> <hr>
                <a class="btn btn-dark btn-addmenue" style="color: #FFFFFF" href="dashboard.php?page=setting-slider">بازگشت</a>
                <input type="submit" name="send" value=" ایجاد منو" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
            </div>

        </div>
    </form>
    </body>
    </html>
