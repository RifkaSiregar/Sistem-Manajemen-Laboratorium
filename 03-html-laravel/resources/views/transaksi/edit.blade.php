@extends('layouts.master')

@section('content')
<title>Transaksi</title>
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
                <form action="/transaksi/{{$transaksi->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$transaksi->kode}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal" value="{{$transaksi->nama_transaksi}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input name="jumlah" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$transaksi->jumlah}}">
        </div>

        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Status</label>
            <select name="kondisi" class="form-control" id="exampleFormControlSelect1" > 
            <option value="Peminjaman" @if($transaksi->kondisi == 'Peminjaman') selected @endif>Peminjaman</option>
            <option value="Pengembalian" @if($transaksi->kondisi == 'Pengembalian') selected @endif>Pengembalian</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
