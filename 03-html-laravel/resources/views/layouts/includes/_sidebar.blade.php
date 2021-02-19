<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/inventaris" class=""><i class="lnr lnr-layers"></i> <span>Inventaris</span></a></li>
						<li><a href="/transaksi" class=""><i class="lnr lnr-database"></i> <span>Transaksi</span></a></li>
						<li><a href="/pengguna" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
						@if(auth()->user()->role == 'koordinator') 
						<li><a href="/aktivitas" class=""><i class="fa fa-calendar"></i> <span>Aktivitas</span></a></li>
						@endif
						<li><a href="/chart" class=""><i class="fa fa-line-chart"></i> <span>Chart</span></a></li>
						<li><a href="/forum" class=""><i class="fa fa-envelope"></i> <span>Comment</span></a></li>
				</nav>
			</div>
		</div>
