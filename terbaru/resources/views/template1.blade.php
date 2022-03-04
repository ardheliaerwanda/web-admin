<!doctype html>
<html lang="en">

<head>
	<title>Aturtoko</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}"></script>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}"></script>
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}"></script>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}"></script>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/logo1.png')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{asset('admin/assets/img/logo1.png')}}"alt="Aturtoko Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Contoh</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('dashboard')}}" class="{{Request::is('dashboard')?'active':''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					
						<li><a href="{{url('adminn')}}" class="{{Request::is('adminn')?'active':''}}"><i class="lnr lnr-user"></i> <span>Admin</span></a></li>
						<li><a href="{{url('product')}}" class="{{Request::is('product')?'active':''}}"><i class="lnr lnr-file-add"></i> <span>Produk</span></a></li>
						<li><a href="{{url('customer')}}" class="{{Request::is('customer')?'active':''}}"><i class="lnr lnr-users"></i> <span>Customer</span></a></li>
						<li class="sidebar-dropdown ">
							<a href="#" class=" {{Request::is(['invoice','pesanan','pengiriman'])?'active':''}}">
							<i class="lnr lnr-cart"></i>
							<span>Invoice</span>
							</a>
							<div class="sidebar-submenu">
								<ul class="nav">
									<li class="lnr {{Request::is('invoice')?'active':''}}">
										<a href="{{ route('invoice.index') }}" class="nav-link">Daftar Invoice</a>
									</li>
									<li class="lnr {{Request::is('pesanan')?'active':''}}">
										<a href="{{ route('pesanan.index') }}" class="nav-link">Daftar Pesanan</a>
									</li>
									<li class="lnr">
										<a href="{{url('pengiriman')}}" class="sub">Daftar Pengiriman</a>
									</li>
								</ul>
							</div>
						</li>
				
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					
                        @yield('content')
                    
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
        @yield('footer')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/dropdown.js')}}"></script>
	
	</body>

</html>