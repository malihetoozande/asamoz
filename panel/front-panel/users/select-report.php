<?php
include_once "../functions/jdf.php";
?>
<!doctype html>
<html lang="fa_ir">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>انتخاب گزارش آخرین وضعیت</title>
</head>
<body>
<div>
    <form method="post" name="select">
        <div class="row" style="position: relative;
    left: -13px;">
            <div class="col-md-3mb-4">
                <a href="http://localhost/asamooz/panel/front-panel/dashburd.php?page=report" class="btn btn-dark">به روز رسانی گزارش</a>

            </div>

            <div class="col-md-3mb-4">
                <div class="input-group mb-3">
                    <select class="form-control btn btn-light" aria-label="Default select example" name ="status" style="position: relative;right: 2px;">
                        <option  selected disabled>انتخواب نمایش دسته بندی گزارش وضعیت </option>
                        <option value="" name="recent">گزارش ۱ ساعت اخیر آنلاین | آفلاین</option>
                        <option value="" name="user-off">گزارش وضعیت کاربر آفلاین | سیستم</option>
                        <option value="" name="users-off">گزارش وضعیت کاربران آفلاین | سیستم</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3mb-4">
                <button type="submit" class="btn btn-dark" name="show" style="position: relative;right: 4px;"> نمایش </button>
            </div>

            <div class="col-md-3mb-4">
                <button type="submit" class="btn btn-primary" name="print" onclick="window.print()" style="position: relative;right: 372px;width: 236%;"> چاپ </button>
            </div>
        </div>

        <div class="row">
            <div class="card text-dark  mb-3" style="max-width: 18rem; position: relative;right: 84%;">
                <div class="card-body">
                    <h5 class="card-title">تاریخ امروز:</h5>
                    <p class="card-text"><?php echo jdate('Y/n/j')?></p>
                    <hr>
                    <h5 class="card-title">ساعت امروز:</h5>
                    <h6 class="card-text"><?php echo jdate('H:i:s')?></h6>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
