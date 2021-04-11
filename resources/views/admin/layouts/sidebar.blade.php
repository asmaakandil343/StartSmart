<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

        <div class="logo">
            <main  class="welcome" id="photo">
                <a href="{{asset('admin/image/large.png')}}" data-lightbox="image-1" class="simple-text logo-normal">
                    <img src="{{asset('admin/image/large.png')}}" class="img-responsive"style="border-radius: 50px;" width="80px" height="80px"alte="text">
                    smartschool
                </a>
            </main>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            {{--           ADMIN     --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>المسؤؤل</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="far fa-file"></i>
                        <p>رفع جدول حصص للطلبة</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-tape"></i>
                        <p>رفع جدول حصص للمدرسين</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="far fa-file"></i>
                        <p>رفع جدول حصص الامتحانات</p>
                    </a>
                </li>
            {{--        EndADMIN              --}}
            {{--        MANAGER SCHOOL        --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>مدير المدرسة</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/report.php">
                        <i class="far fa-file"></i>
                        <p>تقارير</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-tape"></i>
                        <p>الاطلاع علي كل شئ</p>
                    </a>
                </li>
            {{--        END MANAGER SCHOOL    --}}
            {{--        STAFFAIRS       --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>شئون الطلاب</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/addnewst.php">
                        <i class="far fa-file"></i>
                        <p>اضافة طالب جديد</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/not.php">
                        <i class="fas fa-tape"></i>
                        <p>الاطلاع علي الغياب</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/sendnot.php">
                        <i class="far fa-file"></i>
                        <p>ارسال انذارات للاهل</p>
                    </a>
                </li>
            {{--        END STAFFAIRS        --}}
            {{--        STORES        --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>المخازن والمشتريات</p>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-cog"></i>
                        <p>تسجيل بيانات الصادر والوارد</p>
                    </a>
                    <div class="dropdown-menu w-100" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="pages/get.php">تسجيل بيانات الصادر</a>
                        <a class="dropdown-item" href="pages/send.php">تسجيل بيانات الوارد</a>
                    </div>
                </li>
            {{--        END STORES        --}}
            {{--        STUDENT        --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>محمد احمد</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="far fa-file"></i>
                        <p>بيانات شخصية</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-tape"></i>
                        <p>مقررات</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="far fa-file"></i>
                        <p>واجبات</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-comments"></i>
                        <p>واجبات</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-comments"></i>
                        <p>جدول حصص</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-comments"></i>
                        <p>جدول امتحانات</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-comments"></i>
                        <p>النتائج الدراسية</p>
                    </a>
                </li>
            {{--        END STUDENT        --}}
            {{--        STAFF TEACHER        --}}
                <li class="nav-item active  ">
                    <a class="nav-link" href="">
                        <i class="material-icons">dashboard</i>
                        <p>شؤون المعلمين</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/addnewtc.php">
                        <i class="far fa-file"></i>
                        <p>اضاقة مدرس جديد </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/teacher.php">
                        <i class="fas fa-tape"></i>
                        <p>بيانات كل المعلومين</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="pages/meetteacher.php">
                        <i class="far fa-file"></i>
                        <p>تسجيل حضور وانصراف المعلم</p>
                    </a>
                </li>
            {{--         END STAFF TEACHER       --}}
                <li class="nav-item ">
                    <a class="nav-link" href="pages/massanger.php">
                        <i class="fas fa-comments"></i>
                        <p>شات</p>
                    </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>تسجيل الخروج</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
