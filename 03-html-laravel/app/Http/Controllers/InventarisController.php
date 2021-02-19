<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\InventarisExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; 
use App\Models\Aktivitas;

class InventarisController extends Controller
{
    public function index(Request $request) 
    {
        if($request->has('cari')){
            $data_inventaris = \App\Models\Inventaris::where('nama_inventaris','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_inventaris = \App\Models\Inventaris::all();
        }
	Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Akses menu Inventaris',
        ]);
        return view('inventaris.index',['data_inventaris' => $data_inventaris]);
    }


    
    public function create(Request $request)
    {
        \App\Models\Inventaris::create($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Inventaris',
        ]);
        return redirect('/inventaris')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $inventaris = \App\Models\Inventaris::find($id);
        return view('inventaris/edit', ['inventaris' =>$inventaris]);
    }
    public function update(Request $request,$id)
    {
        $inventaris = \App\Models\Inventaris::find($id);
        $inventaris->update($request->all());
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Inventaris',
        ]);
        return redirect('/inventaris')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $inventaris = \App\Models\Inventaris::find($id);
        $inventaris->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Inventaris',
        ]);
        return redirect('/inventaris')->with('sukses','Data berhasil dihapus');
    }
    public function exportExcel() 
    {
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export Excel Data Inventaris',
        ]);
        return Excel::download(new InventarisExport, 'Inventaris.xlsx');
    }
    public function exportPdf() 
    {
        $inventaris = \App\Models\Inventaris::all();
        $pdf = PDF::LoadView('export.inventarispdf',['inventaris' => $inventaris]);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Export PDF Data Inventaris',
        ]);
        return $pdf->download('inventaris.pdf');
    }
}
