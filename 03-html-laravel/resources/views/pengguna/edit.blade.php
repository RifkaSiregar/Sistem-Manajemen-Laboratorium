@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Data Pengguna</h3>
				</div>
				<div class="panel-body">
                <form action="/pengguna/{{$pengguna->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Nama Lengkap</label> 
    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$pengguna->nama_lengkap}}">
    @if($errors->has('nama_lengkap'))
  <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$pengguna->email}}">
    @if($errors->has('email'))
  <span class="help-block">{{$errors->first('email')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
    @if($errors->has('jenis_kelamin'))
  <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('agama') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$pengguna->agama}}">
    @if($errors->has('agama'))
  <span class="help-block">{{$errors->first('agama')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @if($errors->has('nama_lengkap'))
  <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
  @endif
  </div>
  
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Avatar</label>
            <input type="file" name="avatar" class="form-control">
             </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            


@stop