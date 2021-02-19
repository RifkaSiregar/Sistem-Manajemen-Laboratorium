<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktivitas;


class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pengguna = \App\Models\Pengguna::where('nama_lengkap','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_pengguna = \App\Models\Pengguna::all();
        }
        
        return view('pengguna.index',['data_pengguna' => $data_pengguna]);
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_lengkap' => 'required|min:5|max:35',
            'email'        => 'required|email|unique:pengguna,email',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'avatar' => 'mimes:jpg,png'
        ]);
        \App\Models\Pengguna::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $pengguna->avatar = $request->file('avatar')->getClientOriginalName();
            $pengguna->save();
        }
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Pengguna',
        ]);   
        return redirect('/pengguna')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        
        $pengguna = \App\Models\Pengguna::find($id);
        return view('pengguna/edit', ['pengguna' =>$pengguna]);
    }

    public function update(Request $request,$id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        $pengguna->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $pengguna->avatar = $request->file('avatar')->getClientOriginalName();
            $pengguna->save();
        }
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Mengubah Data Pengguna',
        ]);   
        return redirect('/pengguna')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        $pengguna->delete();
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menghapus Data Pengguna',
        ]);   
        return redirect('/pengguna')->with('sukses','Data berhasil dihapus');
    }
    public function profile($id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        return view('pengguna.profile', ['pengguna' =>$pengguna]);
    }
}
