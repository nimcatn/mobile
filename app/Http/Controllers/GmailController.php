<?php

namespace App\Http\Controllers;

use App\Models\gmail;
use Illuminate\Http\Request;

class GmailController extends Controller
{
    public function index()
    {
        $gmails = gmail::paginate(20);
        return view("admin.gmail", compact('gmails'));
    }

    public function store(Request $request, gmail $gmail)
    {
        try {
            $gmail->create($request->all());
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('gmail.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('gmail.index'))->with('error', $msg);
        }
    }

    public function edit(string $id)
    {
        $gmails = gmail::paginate(20);
        $gmail = gmail::where('id', $id)->first();
        return view('admin.gmail', compact('gmail', 'gmails'));
    }

    public function update(Request $request, gmail $gmail)
    {
        try {
            $gmail->update($request->all());
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('gmail.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('gmail.index'))->with('error', $msg);
        }
    }

    public function destroy(string $id)
    {
        gmail::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('gmail.index'))->with('success', $msg);
    }
}
