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
                <p class="box__title">لیست تعمیرات</p>
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
                                @foreach ($Repairs as $item)
                                    <tr role="row" class="">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tell }}</td>
                                        <td>
                                            {{ number_format($item->price) }} تومان
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <form action="{{ route('repairs.destroy', [$item->id]) }}"
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
                                                        <a href="{{ route('repairs.edit', $item->id) }}"><span
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


            @if ($name == 'repairs.index')
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد فرم تعمیر جدید</p>
                <form action="{{ route('repairs.store') }}" method="post" class="padding-30">
                    @csrf
                    <input type="text" placeholder="نام کامل مشتری" class="text" name="name">
                    <input type="text" placeholder="تلفن تماس" class="text" name="tell">
                    <input type="text" placeholder="مدل دستگاه" class="text" name="model">
                    <input type="text" placeholder="سریال دستگاه" class="text" name="imei">
                    <input type="text" placeholder="هزینه اعلامی" class="text" name="price">
                    <input type="text" placeholder="وضعیت ظاهری" class="text" name="facestatus">
                    <input type="text" placeholder="لوازم دریافتی" class="text" name="card">
                    <input type="text" placeholder="کد قفل" class="text" name="lock">
                    <button class="btn btn-netcopy_net">اضافه کردن</button>
                </form>
            </div>

            @else
            <div class="col-4 bg-white">
                <p class="box__title">ویرایش اطلاعات</p>
                <form action="{{ route('repairs.update',$repair->id) }}" method="post" class="padding-30">
                    @csrf
                    @method('put')
                    <input type="text" placeholder="نام کامل مشتری" class="text" name="name" value="{{$repair->name}}">
                    <input type="text" placeholder="تلفن تماس" class="text" name="tell" value="{{$repair->tell}}">
                    <input type="text" placeholder="مدل دستگاه" class="text" name="model" value="{{$repair->model}}">
                    <input type="text" placeholder="سریال دستگاه" class="text" name="imei" value="{{$repair->imei}}">
                    <input type="text" placeholder="هزینه اعلامی" class="text" name="price" value="{{$repair->price}}">
                    <input type="text" placeholder="وضعیت ظاهری" class="text" name="facestatus" value="{{$repair->facestatus}}">
                    <input type="text" placeholder="لوازم دریافتی" class="text" name="card" value="{{$repair->card}}">
                    <input type="text" placeholder="کد قفل" class="text" name="lock" value="{{$repair->lock}}">
                    <button class="btn btn-netcopy_net"> ویرایش</button>
                    <a class="btn btn-netcopy_net" href="{{route('repairs.index')}}"> بازگشت</a>
                </form>
            </div>
            @endif


        </div>
    </div>
@endsection
