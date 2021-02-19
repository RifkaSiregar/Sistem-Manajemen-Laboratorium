@extends('layouts.master')

@section('content')
<title>Dashboard</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

        <div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Selamat Datang di Sistem Manajemen Laboratorium Komputer</h3>
    <div class="center">
    </div>
                </div>
								</div>
                </div>
                </div>
								</div>
               
    <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-user"></i></span>
										<p>
											<span class="number">{{totalPengguna()}}</span>
											<span class="title">Total Pengguna</span>
										</p>
									</div>
								</div>

                <div class="col-md-3">
                <div class="metric">
										<span class="icon"><i class="lnr lnr-database"></i></span>
										<p>
											<span class="number">{{totalInventaris()}}</span>
											<span class="title">Total Jenis Inventaris</span>
										</p>
									</div>
								</div>
              </div>
								</div>
@stop