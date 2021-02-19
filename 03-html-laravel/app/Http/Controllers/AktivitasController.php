<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AktivitasExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; 


class AktivitasController extends Controller
{
    public function index(Request $request)
    {   
    $data_aktivitas = \App\Models\Aktivitas::all();
    
        return view('aktivitas.index',compact('data_aktivitas'));
    }

    public function delete($id){
        $data_aktivitas = \App\Models\Aktivitas::find($id);
        $data_aktivitas->delete();
        return redirect('/aktivitas')->with('sukses','Data berhasil dihapus');
    }

    public function exportExcel() 
    {
        return Excel::download(new AktivitasExport, 'Aktivitas.xlsx');
    }
    public function exportPdf() 
    {
        $aktivitas = \App\Models\Aktivitas::all();
        $pdf = PDF::LoadView('export.Aktivitaspdf',['aktivitas' => $aktivitas]);
        return $pdf->download('aktivitas.pdf');
    }
}
