<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bimeh;


class BimehController extends Controller
{
    public function index()
    {
        $bimehs =  bimeh::paginate(20);
        return view("admin.bimeh" , compact('bimehs'));
    }

    public function store(Request $request ,bimeh $bimeh )
    {
        try {
            $bimeh->create($request->all());
            //$bimeh->save();
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('bimeh.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('bimeh.index'))->with('error', $msg);
        }
    }

    public function edit(string $id)
    {
        $bimehs =  bimeh::paginate(20);
        $bimeh = bimeh::where('id', $id)->first();
        return view('admin.bimeh', compact('bimeh','bimehs'));
    }

    public function update(Request $request, bimeh $bimeh)
    {
        try {
            $bimeh->update($request->all());
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('bimeh.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('bimeh.index'))->with('error', $msg);
        }
    }


    public function destroy(string $id)
    {
        bimeh::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('bimeh.index'))->with('success', $msg);
    }
}
