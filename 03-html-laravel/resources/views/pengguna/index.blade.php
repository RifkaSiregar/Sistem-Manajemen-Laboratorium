@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pengguna</h3>
    <div class="right">
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_pengguna as $pengguna)
    <tr>
    <td><a href="/pengguna/{{$pengguna->id}}/profile" class="href">{{$pengguna->nama_lengkap}}</td></a>
    <td>{{$pengguna->jenis_kelamin}}</td>
    <td>{{$pengguna->agama}}</td>
    <td>{{$pengguna->alamat}}</td>
    <td>
    <a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
      </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END TABLE HOVER -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/pengguna/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="form-group{{$errors->has('nama_lengkap') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{old('nama_lengkap')}}">
    @if($errors->has('nama_lengkap'))
  <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
    @if($errors->has('email'))
  <span class="help-block">{{$errors->first('email')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
    @if($errors->has('jenis_kelamin'))
  <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('agama') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Agama</label>
    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{old('agama')}}">
    @if($errors->has('agama'))
  <span class="help-block">{{$errors->first('agama')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('alamat') ? ' has-error' : ''}}">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    @if($errors->has('agama'))
  <span class="help-block">{{$errors->first('agama')}}</span>
  @endif
  </div>
  
  <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
            <label for="exampleFormControlTextarea1">Avatar</label>
            <input type="file" name="avatar" class="form-control">
            @if($errors->has('avatar'))
  <span class="help-block">{{$errors->first('avatar')}}</span>
  @endif
   </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
            </div>
        </div>
@stop