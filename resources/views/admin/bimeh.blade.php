@extends('admin.theme')
@section('main')
@php
$name = Route::currentRouteName();
@endphp
    <div class="breadcrumb">
        <ul>
            <li><a href="index.html">پیشخوان</a></li>
            <li><a href="discounts.html" class="is-active">تخفیف ها</a></li>
        </ul>
    </div>
    <div class="main-content padding-0 discounts">

        @include('admin.message')

        <div class="row no-gutters  ">
            <div class="col-8 margin-left-10 margin-bottom-15 border-radius-3">
                <p class="box__title">لیست بیمه ها</p>
                <div class="table__box">
                    <div class="table-box">
                        <table class="table">
                            <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>شناسه</th>
                                    <th>نام مشتری</th>
                                    <th> شماره همراه</th>
                                    <th>مبلغ</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bimehs as $item)
                                    <tr role="row" class="">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} {{ $item->family }}</td>
                                        <td>{{ $item->irancode }}</td>
                                        <td>
                                            {{ number_format($item->price) }} تومان
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <form action="{{ route('bimeh.destroy', [$item->id]) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button style="border: 0ch;background-color:transparent"
                                                                class="item-delete mlg-15"
                                                                onclick="return confirm('برای حذف مطمئن هستید؟')"
                                                                type="submit"><a></a></button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('bimeh.edit', $item->id) }}"><span
                                                                class="item-edit"></span></a>
                                                    </td>
                                                    <td>
                                                        <a href="" target="_blank" class="item-eye mlg-15" title="پرینت"></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            @if ($name == 'bimeh.index')
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد فرم بیمه جدید</p>
                <form action="{{ route('bimeh.store') }}" method="post" class="padding-30">
                    @csrf
                    <input type="text" placeholder=" سریال بیمه" class="text" name="serial">
                    <input type="text" placeholder="نام" class="text" name="name">
                    <input type="text" placeholder=" نام خانوادگی" class="text" name="family">
                    <input type="text" placeholder=" تاریخ تولد" class="text" name="birthday">
                    <input type="text" placeholder="آدرس " class="text" name="address">
                    <input type="text" placeholder="کد پستی " class="text" name="postsalcode">
                    <input type="text" placeholder=" کد ملی" class="text" name="irancode">
                    <input type="text" placeholder=" کد گواهی بیمه" class="text" name="bimehcode">
                    <input type="text" placeholder="IEMI " class="text" name="imei">
                    <input type="text" placeholder="قیمت کالا " class="text" name="price">
                    <input type="text" placeholder="مدل گوشی " class="text" name="model">
                    <input type="text" placeholder="نوع بیمه " class="text" name="startday">
                    <input type="text" placeholder="تاریخ شروع " class="text" name="endday">
                    <input type="text" placeholder="تاریخ پایان " class="text" name="bimehmode">
                    <button class="btn btn-netcopy_net">اضافه کردن</button>
                </form>
            </div>

            @else
            <div class="col-4 bg-white">
                <p class="box__title">ویرایش اطلاعات</p>
                <form action="{{ route('bimeh.update',$bimeh->id) }}" method="post" class="padding-30">
                    @csrf
                    @method('put')
                    <input type="text" placeholder=" سریال بیمه" class="text" name="serial" value="{{$bimeh->serial }}">
                    <input type="text" placeholder="نام" class="text" name="name" value="{{$bimeh->name }}">
                    <input type="text" placeholder=" نام خانوادگی" class="text" name="family" value="{{ $bimeh->family}}">
                    <input type="text" placeholder=" تاریخ تولد" class="text" name="birthday" value="{{$bimeh->birthday }}">
                    <input type="text" placeholder="آدرس " class="text" name="address" value="{{$bimeh->address}}">
                    <input type="text" placeholder="کد پستی " class="text" name="postsalcode" value="{{$bimeh->postsalcode }}">
                    <input type="text" placeholder=" کد ملی" class="text" name="irancode" value="{{$bimeh->irancode }}">
                    <input type="text" placeholder=" کد گواهی بیمه" class="text" name="bimehcode" value="{{$bimeh->bimehcode }}">
                    <input type="text" placeholder="IEMI " class="text" name="imei" value="{{$bimeh->imei }}">
                    <input type="text" placeholder="قیمت کالا " class="text" name="price" value="{{$bimeh->price }}">
                    <input type="text" placeholder="مدل گوشی " class="text" name="model" value="{{$bimeh->model }}">
                    <input type="text" placeholder="نوع بیمه " class="text" name="startday" value="{{$bimeh->startday }}">
                    <input type="text" placeholder="تاریخ شروع " class="text" name="endday" value="{{$bimeh->endday }}">
                    <input type="text" placeholder="تاریخ پایان " class="text" name="bimehmode" value="{{$bimeh->bimehmode }}">
                    <button class="btn btn-netcopy_net"> ویرایش</button>
                    <a class="btn btn-netcopy_net" href="{{route('bimeh.index')}}"> بازگشت</a>
                </form>
            </div>
            @endif


        </div>
    </div>
@endsection
