<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF; 
use App\Models\Aktivitas;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = \App\Models\Transaksi::where('kode','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_transaksi = \App\Models\Transaksi::all();
        }
        
        return view('transaksi.index',['data_transaksi' => $data_transaksi]);
    }
    public function create(Request $request)
    {
        \App\Models\Transaksi::create($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        
        $transaksi = \App\Models\Transaksi::find($id);
        return view('transaksi/edit', ['transaksi' =>$transaksi]);
    }
    public function update(Request $request,$id)
    {
        $transaksi = \App\Models\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $transaksi = \App\Models\Transaksi::find($id);
        $transaksi->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Transaksi',
        ]);
        return redirect('/transaksi')->with('sukses','Data berhasil dihapus');
    }
    public function exportExcel() 
    {
        return Excel::download(new TransaksiExport, 'Transaksi.xlsx');
    }
    public function exportPdf() 
    {
        $transaksi = \App\Models\Transaksi::all();
        $pdf = PDF::LoadView('export.transaksipdf',['transaksi' => $transaksi]);
        return $pdf->download('transaksi.pdf');
    }
}
