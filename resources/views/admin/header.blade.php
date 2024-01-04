<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
   
 <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive_991.css" media="(max-width:991px)">
    <link rel="stylesheet" href="css/responsive_768.css" media="(max-width:768px)">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://netcopy.ir"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="img/pro.jpg" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : نت کپی</span>
    </div>

    <ul>
        <li class="item-li i-dashboard is-active"><a href="index.html">پیشخوان</a></li>
        <li class="item-li i-courses "><a href="courses.html">تعمیرات</a></li>
        <li class="item-li i-users"><a href="users.html"> فاکتور</a></li>
        <li class="item-li i-users"><a href="users.html"> vpn</a></li>
    </ul>

</div>


@section('top')
<div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
    <div class="header__right d-flex flex-grow-1 item-center">
        <span class="bars"></span>
        <a class="header__logo" href="https://netcopy.ir"></a>
    </div>
    <div class="header__left d-flex flex-end item-center margin-top-2">
        <span class="account-balance font-size-12">موجودی : 2500,000 تومان</span>
        <div class="notification margin-15">
            <a class="notification__icon"></a>
            <div class="dropdown__notification">
                <div class="content__notification">
                    <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                </div>
            </div>
        </div>
        <a href="{{route('login.logout')}}" class="logout" title="خروج"></a>
    </div>
</div>
@endsection