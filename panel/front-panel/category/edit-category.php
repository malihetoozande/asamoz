<?php
include_once '../functions/f-category.php';
$id=$_GET['id'];
if(isset($_POST['update'])){
    $info = $_POST['info'];
    update_category($id,$info);
    header("location: dashboard.php?pages=list-category");
}
if(isset($_POST['back'])){
    header("location: dashboard.php?pages=list-category");
}
$current_cat = edit_category($id);
foreach ($current_cat as $cat) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش دسته بندی</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<p class="title-form">افزودن دسته جدید</p>
<form class="my-form" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-9">

            <input class="form-control inputbig" type="text" name="info[title]" placeholder="عنوان را اینجا وارد کنید" value="<?php echo $cat->title ?>" >
            <br>
            <input class="form-control inputbig" type="text" name="info[sort]" placeholder="ترتیب نمایش را بصورت عددی ایجاد کنید" value="<?php echo $cat->sort ?>" >
            <br>
            <select class="form-control" aria-label="Default select example" name="info[parrent]">
                <option value="0">انتخاب به عنوان سرگروه منو</option>
                <?php
                $parrent = list_category();
                foreach ($parrent as $val) :?>
                    <option value="<?php echo $val->id;?>>"
                        <?php if($cat->parrent == $val->id){ echo " selected ";} ?>>
                        <?php echo $val->title;?></option>
                <?php endforeach;?>
            </select><br>
            <div class="custom-control custom-switch">
                <input name="info[status]" type="checkbox" class="custom-control-input" id="customSwitch1" <?php if($cat->status == 'on'){ echo " checked ";} ?> >
                <label class="custom-control-label" for="customSwitch1">فعال|غیرفعال</label>
            </div><br> <hr>
            <input type="submit" name="back" value="بازگشت" class="btn btn-dark btn-addmenue">
            <input type="submit" name="update" value="ویرایش منو" class="btn btn-primary btn-addmenue" style="margin-left: 5px;">
        </div>

    </div>
</form>
<?php endforeach;?>
</body>
</html>
