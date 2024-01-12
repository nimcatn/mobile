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
                <p class="box__title">لیست فاکتور ها</p>
                <div class="table__box">
                    <div class="table-box">
                        <table class="table">
                            <thead role="rowgroup">
                                <tr role="row" class="title-row">
                                    <th>شناسه</th>
                                    <th>نام مشتری</th>
                                    <th> شماره همراه</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($factors as $item)
                                    <tr role="row" class="">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tell }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <form action="{{ route('factor.destroy', [$item->id]) }}"
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
                                                        <a href="{{ route('factor.edit', $item->id) }}"><span
                                                                class="item-edit"></span></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('factor.create', $item->id) }}" class="item-eye mlg-15" title="مشخصات"></a>
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


            @if ($name == 'factor.index')
            <div class="col-4 bg-white">
                <p class="box__title">ایجاد فاکتور جدید</p>
                <form action="{{ route('factor.store') }}" method="post" class="padding-30">
                    @csrf
                    <input type="text" placeholder="نام کامل مشتری" class="text" name="name">
                    <input type="text" placeholder="تلفن تماس" class="text" name="tell">
                    <button class="btn btn-netcopy_net">اضافه کردن</button>
                </form>
            </div>


            @elseif ($name == 'factor.create')
            <div class="col-4 bg-white">
                <p class="box__title">درج اطلاعات فاکتور</p>
                <form action="{{ route('factor.update',$factor->id) }}" method="post" class="padding-30">
                    @csrf
                    <input type="text" placeholder="عنوان محصول" class="text" name="name" value="{{$factor->name}}">
                    <input type="text" placeholder=" تعداد" class="text" name="tell" >
                    <input type="text" placeholder=" قیمت هر عدد" class="text" name="tell" >
                    <button class="btn btn-netcopy_net"> ویرایش</button>
                    <a class="btn btn-netcopy_net" href="{{route('factor.index')}}"> بازگشت</a>
                </form>
            </div>
            @else
            <div class="col-4 bg-white">
                <p class="box__title">ویرایش  فاکتور</p>
                <form action="{{ route('factor.update',$factor->id) }}" method="post" class="padding-30">
                    @csrf
                    @method('put')
                    <input type="text" placeholder="نام کامل مشتری" class="text" name="name" value="{{$factor->name}}">
                    <input type="text" placeholder="تلفن تماس" class="text" name="tell" value="{{$factor->tell}}">

                    <button class="btn btn-netcopy_net"> ویرایش</button>
                    <a class="btn btn-netcopy_net" href="{{route('factor.index')}}"> بازگشت</a>
                </form>
            </div>
            @endif


        </div>
    </div>
@endsection
