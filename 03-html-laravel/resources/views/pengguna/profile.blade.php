@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
<div class="panel panel-profile">
	<div class="clearfix">
		<!-- LEFT COLUMN -->
		<div class="profile-left">

			<!-- PROFILE HEADER -->
			<div class="profile-header">
				<div class="overlay"></div>
				<div class="profile-main">
					<img src="{{$pengguna->getAvatar()}}" class="img-circle" alt="Avatar">
					<h3 class="name">{{{$pengguna->nama_lengkap}}}</h3>
					<span class="online-status status-available">Available</span>
				</div>
				<div class="profile-stat">
					<div class="row">
						<div class="col-md-4 stat-item">
							
						</div>
					</div>
				</div>
			</div>
			<!-- END PROFILE HEADER -->

			<!-- PROFILE DETAIL -->
			<div class="profile-detail">
				<div class="profile-info">
					<h4 class="heading">Data Diri</h4>
					<ul class="list-unstyled list-justify">
						<li>Email <span>{{$pengguna->email}}</span></li>
						<li>Jenis Kelamin <span>{{$pengguna->jenis_kelamin}}</span></li>
						<li>Agama <span>{{$pengguna->agama}}</span></li>
						<li>Alamat <span>{{$pengguna->alamat}}</span></li>
						
					</ul>
				</div>
				<div class ="margin-top-30 text-center">
				<a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning text-center">Edit Profile</a>
				<a href="/pengguna/{{$pengguna->id}}/delete" class="btn btn-danger text-center">Delete Profile</a>
			
				</div>
			</div>
			<!-- END PROFILE DETAIL -->
		</div>
		<!-- END LEFT COLUMN -->

		<!-- RIGHT COLUMN -->
		<div class="profile-right">
			
			

			<!-- TABBED CONTENT -->
			<div class="custom-tabs-line tabs-line-bottom left-aligned">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Aktivitas Terakhir</a></li>
					
				</ul>
			</div>

			</div>
			<!-- END TABBED CONTENT -->
		</div>
		<!-- END RIGHT COLUMN -->
	</div>
</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
        </div>
        @stop