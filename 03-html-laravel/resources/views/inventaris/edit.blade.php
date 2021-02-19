@extends('layouts.master')

@section('content')
<title>Inventaris</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
                <form action="/inventaris/{{$inventaris->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$inventaris->kode}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Inventaris</label>
            <input name="nama_inventaris" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Inventaris" value="{{$inventaris->nama_inventaris}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input name="jumlah" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$inventaris->jumlah}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kondisi</label>
            <select name="kondisi" class="form-control" id="exampleFormControlSelect1" > 
            <option value="Baik" @if($inventaris->kondisi == 'Baik') selected @endif>Baik</option>
            <option value="Rusak" @if($inventaris->kondisi == 'Rusak') selected @endif>Rusak</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" value="{{$inventaris->status}}">
  </div>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
