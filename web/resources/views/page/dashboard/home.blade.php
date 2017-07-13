@extends('layouts.dashboard.home')
@section('contents')

<div id="wrapper">
        @include('includes.dashboard.navbar')
		
		 <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui-elements.html" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> Produk</a>
                    </li>
                    <li>
                        <a href="chart.html" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i>Transaksi</a>
                    </li>
                    <li>
                        <a href="tab-panel.html" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Pesan</a>
                    </li>
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image red">
						<i class="fa fa-eye fa-5x"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
						<h3>6.150</h3> 
						</div>
						<div class="card-action">
						<strong>Pengunjung</strong>
						</div>
						</div>
						</div>
	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image orange">
						<i class="fa fa-shopping-cart fa-5x"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
						<h3>550</h3> 
						</div>
						<div class="card-action">
						<strong>Penjualan</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
							<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image blue">
						<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
						<h3>11</h3> 
						</div>
						<div class="card-action">
						<strong>Pesan</strong>
						</div>
						</div>
						</div> 
						 
                    </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

@endsection