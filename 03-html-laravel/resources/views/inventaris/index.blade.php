@extends('layouts.master')

@section('content')

<title>Inventaris</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">


<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Inventaris</h3>
    <div class="right">
    <a href="/inventaris/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/inventaris/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>  
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Kode</th>
        <th>Nama Inventaris</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_inventaris as $inventaris)
    <tr>
    <td>{{$inventaris->kode}}</td>
    <td>{{$inventaris->nama_inventaris}}</td>
    <td>{{$inventaris->jumlah}}</td>
    <td>{{$inventaris->kondisi}}</td>
    <td>{{$inventaris->status}}</td>
    
    <td>
    <a href="/inventaris/{{$inventaris->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/inventaris/{{$inventaris->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Inventaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/inventaris/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
    <label for="exampleInputEmail1">Kode</label>
    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama inventaris</label>
    <input name="nama_inventaris" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama inventaris">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah</label>
    <input name="jumlah" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Kondisi</label>
    <select name="kondisi" class="form-control" id="exampleFormControlSelect1">
      <option value="Baik">Baik</option>
      <option value="Rusak">Rusak</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status">
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