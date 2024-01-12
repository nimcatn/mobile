<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vpn;

class VpnController extends Controller
{
    public function index()
    {
        $vpns = vpn::paginate(20);
        return view("admin.vpn", compact('vpns'));
    }

    public function store(Request $request, vpn $vpn)
    {
        try {
            $vpn->create($request->all());
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('vpn.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('vpn.index'))->with('error', $msg);
        }
    }

    public function edit(string $id)
    {
        $vpns = vpn::paginate(20);
        $vpn = vpn::where('id', $id)->first();
        return view('admin.vpn', compact('vpn', 'vpns'));
    }

    public function update(Request $request, vpn $vpn)
    {
        try {
            $vpn->update($request->all());
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('vpn.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('vpn.index'))->with('error', $msg);
        }
    }

    public function destroy(string $id)
    {
        vpn::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('vpn.index'))->with('success', $msg);
    }
}
