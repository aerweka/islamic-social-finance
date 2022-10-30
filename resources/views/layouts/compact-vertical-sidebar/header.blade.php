<div class="main-header">
	<div class="logo">
		<img src="{{ asset('assets/images/logo.png') }}" alt="">
	</div>

	<div class="menu-toggle">
		<div></div>
		<div></div>
		<div></div>
	</div>

	<div class="d-flex align-items-center">

	</div>

	<div style="margin: auto"></div>

	<div class="header-part-right">
		<!-- Full screen toggle -->
		<i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>

		<!-- User avatar dropdown -->
		<div class="dropdown">
			<div class="user col align-self-end">
				<img src="{{ asset('assets\images\products\weather-2.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<div class="dropdown-header">
						<i class="i-Lock-User mr-1"></i> user
					</div>
					<form action="{{ route('logout') }}" method="post">
						@csrf
						<button class="dropdown-item" type="submit">Keluar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- header top menu end -->
