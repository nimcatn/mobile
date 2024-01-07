<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repairs;

class RepairsController extends Controller
{

    public function index()
    {
        $Repairs =  Repairs::paginate(20);
        return view("admin.repairs" , compact('Repairs'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            Repairs::create([
                'name' => $request->get('name'),
                'tell' => $request->get('tell'),
                'model' => $request->get('model'),
                'imei' => $request->get('emei'),
                'price' => $request->get('price'),
                'facestatus' => $request->get('facestatus'),
                'card' => $request->get('card'),
                'imei' => $request->get('imei'),
                'lock' => $request->get('lock'),
            ]);
            $msg = " با موفقیت ذخیره شد";
            return redirect(route('repairs.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('repairs.index'))->with('error', $msg);
        }
    }


    public function show(string $id)
    {
        //
    }

 
    public function edit(string $id)
    {
        $Repairs =  Repairs::paginate(20);
        $repair = repairs::where('id', $id)->first();
        return view('admin.repairs', compact('repair','Repairs'));
    }

    public function update(Request $request, string $id)
    {
        try {
            repairs::find($id)->update(
                [
                    'name' => $request->get('name'),
                    'tell' => $request->get('tell'),
                    'model' => $request->get('model'),
                    'imei' => $request->get('emei'),
                    'price' => $request->get('price'),
                    'facestatus' => $request->get('facestatus'),
                    'card' => $request->get('card'),
                    'imei' => $request->get('imei'),
                    'lock' => $request->get('lock'),
                ]
            );
            $msg = " با موفقیت ویرایش شد";
            return redirect(route('repairs.index'))->with('success', $msg);
        } catch (\Throwable $th) {
            $msg = "خطایی در عملیات ذخیره سازی به وجود آمد";
            return redirect(route('repairs.index'))->with('error', $msg);
        }
    }


    public function destroy(string $id)
    {
        Repairs::where('id', $id)->delete();
        $msg = " با موفقیت حذف شد";
        return redirect(route('repairs.index'))->with('success', $msg);
    }
}
