<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\factor;

class FactorController extends Controller
{

    public function index()
    {
        $factors = factor::paginate(20);
        return view("admin.factor", compact('factors'));
    }

    public function store(Request $request, factor $factor)
    {
        try {
            $factor->create($request->all());
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('factor.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('factor.index'))->with('error', $msg);
        }
    }

    public function edit(string $id)
    {
        $factors = factor::paginate(20);
        $factor = factor::where('id', $id)->first();
        return view('admin.factor', compact('factor', 'factors'));
    }

    public function update(Request $request, factor $factor)
    {
        try {
            $factor->update($request->all());
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('factor.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('factor.index'))->with('error', $msg);
        }
    }

    public function destroy(string $id)
    {
        factor::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('factor.index'))->with('success', $msg);
    }

    public function create(string $id)
    {
        $factors = factor::paginate(20);
        $factor = factor::where('id', $id)->first();
        return view('admin.factor', compact('factor', 'factors'));
    }



}
