<?php
session_start();
include_once '../functions/f-user.php';
include_once '../functions/functions.php';
?>
<div class="col-md-2">
                <div class="admin-menu">
                    <ul>
                        <div class="userwel">
                            <?php
                            $session=$_SESSION['login_user'];
                            $user_info= select_user_with_session($session);
                            ?>
                            <img src="/img/user.png">
                            <p><a><?php echo $user_info->fullname;?>
                                </a></p>
                            <p>به آساموز خوش آمدید</p>
                        </div>

                        <li class="dash">
                            <a href="dashboard.php">
                                <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.932 2.724c-.243-.97-1.621-.97-1.864 0l-.072.286a.96.96 0 01-1.622.434l-.205-.211c-.695-.72-1.889-.03-1.614.932l.08.283a.96.96 0 01-1.187 1.188l-.283-.081c-.962-.275-1.651.919-.932 1.614l.211.205a.96.96 0 01-.434 1.622l-.286.072c-.97.243-.97 1.621 0 1.864l.286.072a.96.96 0 01.434 1.622l-.211.205c-.72.695-.03 1.889.932 1.614l.283-.08a.96.96 0 011.188 1.187l-.081.283c-.275.962.919 1.651 1.614.932l.205-.211a.96.96 0 011.622.434l.072.286c.243.97 1.621.97 1.864 0l.072-.286a.96.96 0 011.622-.434l.205.211c.695.72 1.889.03 1.614-.932l-.08-.283a.96.96 0 011.187-1.188l.283.081c.962.275 1.651-.919.932-1.614l-.211-.205a.96.96 0 01.434-1.622l.286-.072c.97-.243.97-1.621 0-1.864l-.286-.072a.96.96 0 01-.434-1.622l.211-.205c.72-.695.03-1.889-.932-1.614l-.283.08a.96.96 0 01-1.188-1.187l.081-.283c.275-.962-.919-1.651-1.614-.932l-.205.211a.96.96 0 01-1.622-.434l-.072-.286zM10 15a5 5 0 100-10 5 5 0 000 10z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M9.375 10L6.6 6.3l.8-.6 2.85 3.8H15v1h-4.75L7.4 14.3l-.8-.6L9.375 10z"
                                          clip-rule="evenodd"></path>
                                </svg>
پیشخوان
                            </a>

                        </li>


                        <li class="user">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
مدیریت کاربران
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-user">
                            <li><a href="dashboard.php?page=user-setting">تنظیمات کاربران</a></li>
                            <li><a href="dashboard.php?page=user-accses">پیکر بندی دسترسی ها</a></li>
                            <li><a href="dashboard.php?page=all user">مشاهده همه کاربران</a></li>
                            <li><a href="dashboard.php?page=user-Attendance">ثبت حضور و غیاب</a></li>
                            <li><a href="dashboard.php?page=report">گزارش آخرین وضعیت</a></li>
                            <li><a href="dashboard.php?page=log-login user">گزارش ورود کاربران</a></li>

                        </ul>


                        <li class="category">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
                                مدیریت دسته ها
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-category">
                            <li><a href="#">افزودن دسته جدید</a></li>
                            <li><a href="#">مشاهده دسته بندی</a></li>
                        </ul>





                        <li class="staff">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>مدیریت دسته ها
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-staff">
                            <li><a href="dashboard.php?page=new-category">افزودن دسته جدید</a></li>
                            <li><a href="dashboard.php?page=list-category">مشاهده دسته بندی</a></li>

                        </ul>

                        <li class="article">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
                                مدیریت نوشته ها
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-article">
                            <li><a href="#">مشاهده همه نظرات کاربران</a></li>
                            <li><a href="#">افزودن نوشته جدید</a></li>
                        </ul>




                        <li class="cost">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inboxes-fill" viewBox="0 0 16 16">
                                    <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"></path>
                                </svg>
مدیریت نوشته ها
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-cost">
                            <li><a href="dashboard.php?page=list-article">مشاهده همه نظرات کاربران</a></li>
                            <li><a href="dashboard.php?page=add-article">افزودن نوشته جدید</a></li>

                        </ul>





                        <li class="teach">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"></path>
                                </svg>
آموزش مجازی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-teach">
                            <li><a href="dashboard.php?page=teach.Request">ثبت درخواست</a></li>

                        </ul>





                        <li class="onlineregistration">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                </svg>
ثبت نام آنلاین
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-onlineregistration">
                            <li><a href="dashboard.php?page=form">فرم ثبت نام</a></li>

                        </ul>




                        <li class="onlinetest">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                                    <path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"></path>
                                </svg>
آزمون آنلاین
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-onlinetest">
                            <li><a href="dashboard.php?page=te-shabihsaz">ایجاد آزمون های شبیه ساز</a></li>
                            <li><a href="dashboard.php?page=te-gateway">درگاه پرداخت</a></li>

                        </ul>




                        <li class="time">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"></path>
                                </svg>
زمانبندی کلاس ها
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-time">
                            <li><a href="dashboard.php?page=t.time">ساعات برگزاری کلاس ها</a></li>
                            <li><a href="dashboard.php?page=t.time2"> برگزاری کلاس های جبرانی</a></li>

                        </ul>




                        <li class="onlinechat">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                                    <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"></path>
                                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
گفت و گو آنلاین
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-onlinechat">
                            <li><a href="dashboard.php?page=online-chat">ایجاد درخواست</a></li>

                        </ul>




                        <li class="dialogueforum">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                </svg>
انجمن گفت و گو
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-dialogueforum">
                            <li><a href="dashboard.php?page=f.forum">ثبت درخواست در فروم</a></li>
                            <li><a href="dashboard.php?page=Academic Conferences">ثبت درخواست در همایش های تحصیلی</a></li>

                        </ul>




                        <li class="book">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"></path>
                                </svg>
جزوات آموزشی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-book">
                            <li><a href="dashboard.php?page=b-book">بانک کتاب و جزوات</a></li>
                            <li><a href="dashboard.php?page=b-exam">نمونه سوال امتحانی</a></li>
                            <li><a href="dashboard.php?page=b-homework">فایل های تمرینات هر درس </a></li>
                        </ul>





                        <li class="certificate">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
                                    <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"></path>
                                    <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"></path>
                                </svg>
مدرک آموزشی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-certificate">
                            <li><a href="dashboard.php?page=c-grade">اعلام نمرات</a></li>
                            <li><a href="dashboard.php?page=c-Education">سنجش و ارزیابی تحصیلی </a></li>
                            <li><a href="dashboard.php?page=c-certificate"> مدرک آموزشی</a></li>
                        </ul>




                        <li class="advice">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                </svg>
مشاوره تحصیلی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-advice">
                            <li><a href="dashboard.php?page=a-advice">ثبت درخواست مشاوره</a></li>
                            <li><a href="dashboard.php?page=a-turn">سیستم نوبت دهی</a></li>
                        </ul>




                        <li class="sms">
                            <a href="javascript:;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                </svg>
سیستم پیامکی
<span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-sms">
                            <li><a href="dashboard.php?page=s-samane">پیکربندی سامانه پیامک</a></li>
                            <li><a href="dashboard.php?page=s-phone">ایجاد دفترچه تلفن متمرکز</a></li>
                            <li><a href="dashboard.php?page=s-sms">ثبت پیش نویس پیامک</a></li>
                            <li><a href="dashboard.php?page=SMS inventory">موجودی پیامک </a></li>
                            <li><a href="dashboard.php?page=s-Individual SMS">ارسال پیامک فردی</a></li>
                            <li><a href="dashboard.php?page=group SMS">ارسال پیامک گروهی</a></li>
                            <li><a href="dashboard.php?page=S-System support">ارتباط با پشتیبانی سیستم</a></li>
                        </ul>
                    </ul>
                </div>
            </div>






