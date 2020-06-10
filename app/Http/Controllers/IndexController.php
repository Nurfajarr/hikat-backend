<?php

namespace App\Http\Controllers;

use App\Model\PenerimaZakat;
use App\Model\DonaturZakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $jpenerima = PenerimaZakat::count();
        $jdonatur = DonaturZakat::count();
        $donaturzakat = DonaturZakat::all();
        return view('admin.index', compact(['jpenerima', 'jdonatur', 'donaturzakat']));
    }
    // public function indexList()
    // {
    //     $donaturzakat = DonaturZakat::all();
    //     return view('admin.index', compact('donaturzakat'));
    // }
    public function destroy($id)
    {
        DonaturZakat::destroy($id);
        return redirect()->route('index.index');
    }
}
