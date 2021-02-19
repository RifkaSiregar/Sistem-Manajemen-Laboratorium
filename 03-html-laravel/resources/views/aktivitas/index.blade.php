@extends('layouts.master'))
@section('content')


<title>Aktivitas</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">


<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Aktivitas Pengguna</h3>
    <div class="right">
    <a href="/aktivitas/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/aktivitas/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
    </div>
    
    </div>  
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>User ID</th>
        <th>Aktivitas</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_aktivitas as $aktivitas)
    <tr>
    <td>{{$aktivitas->user_id}}</td>
    <td>{{$aktivitas->aktivitas}}</td>
    <td>{{$aktivitas->created_at}}</td>
    <td>{{$aktivitas->updated_at}}</td>
    <td><a href="/aktivitas/{{$aktivitas->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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

@stop