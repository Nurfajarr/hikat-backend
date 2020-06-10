<?php

namespace App\Http\Controllers;

use App\Model\PenerimaZakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerimaZakatController extends Controller
{
    public function index()
    {
        $penerimazakat = PenerimaZakat::all();
        return view('admin.penerimazakat', compact('penerimazakat'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'umur' => 'required|numeric',
        ]);

        PenerimaZakat::create($request->all());
        return redirect()->route('penerimazakat.index');
    }
    public function update(Request $request, $id)
    {
        PenerimaZakat::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'umur' => $request->umur,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);
        return redirect()->route('penerimazakat.index');
    }
    public function destroy($id)
    {
        PenerimaZakat::destroy($id);
        return redirect()->route('penerimazakat.index');
    }
}
