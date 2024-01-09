<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apple;

class AppleController extends Controller
{
    public function index()
    {
        $apples =  apple::paginate(20);
        return view("admin.apple" , compact('apples'));
    }

    public function store(Request $request ,apple $apple )
    {
        try {
            $apple->create($request->all());
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('apple.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('apple.index'))->with('error', $msg);
        }
    }

    public function edit(string $id)
    {
        $apples =  apple::paginate(20);
        $apple = apple::where('id', $id)->first();
        return view('admin.apple', compact('apple','apples'));
    }

    public function update(Request $request, apple $apple)
    {
        try {
            $apple->update($request->all());
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('apple.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('apple.index'))->with('error', $msg);
        }
    }


    public function destroy(string $id)
    {
        apple::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('apple.index'))->with('success', $msg);
    }
}
