<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Aktivitas;

class ForumController extends Controller
{
    public function index(){
        $forum = Forum::paginate(10);
        return view('forum.index', compact('forum'));
    }
    public function create(Request $request)
    {
        Forum::create([
            'judul'=> request('judul'),
            'slug' => request('slug'),
            'konten'=> request('konten'),
            'user_id'=>auth()->user()->id
        ]);
        Aktivitas::create([
            'user_id'=> auth()->user()->id,
            'aktivitas' => 'Menambah Data Inventaris',
        ]);
        return redirect('/forum')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $forum = \App\Models\Forum::find($id);
        return view('forum/add', ['forum' =>$forum]);
    }
    public function update(Request $request,$id)
    {
        $forum = \App\Models\Forum::find($id);
        $forum->update($request->all());
        return redirect('/forum')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $forum = \App\Models\Forum::find($id);
        $forum->delete();
        return redirect('/forum')->with('sukses','Data berhasil dihapus');
    }

}
