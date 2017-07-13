@extends('layouts.dashboard.home')
@section('contents')

@include('includes.dashboard.navbar')

         <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="waves-effect waves-dark" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui-elements.html" class="active-menu waves-effect waves-dark"><i class="fa fa-desktop"></i> Produk</a>
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

        <div id="page-wrapper" >
			  <div class="header"> 
                        <h1 class="page-header">
                            Produk
                        </h1>
                     <button style="margin-right: 30px;" type="button" class="btn btn-success pull-right">Tambah Produk</button> 	
					<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Produk</a></li>
					  <li class="active">Data</li>
					</ol>

				</div>
		
            <div id="page-inner"> 
                                 
            	 <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../img/banner.png">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Banner<i class="material-icons right">more_vert</i></span>
						  	<p><a href="#">Detail</a>
						  	<span style="float: right;"><a href="#" title="">Edit</a></span>
						  	</p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Banner<i class="material-icons right">close</i></span>
						  <p> Banner merupakan bentuk promosi iklan di luar ruang (outdoor) dan memiliki ukuran yang cukup besar. Dalam arti yang sebenarnya billboard adalah bentuk poster dengan ukuran yang cukup besar dan diletakkan tinggi di tempat tertentu yang ramai dilalui orang. Billboard termasuk model reklame media luar ruang yang paling banyak digunakan.</p>
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                     <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../img/idcard.png">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">ID Card<i class="material-icons right">more_vert</i></span>
						  <p><a href="#">Detail</a>
						  	<span style="float: right;"><a href="#" title="">Edit</a></span>
						  	</p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">ID Card<i class="material-icons right">close</i></span>
						  <p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					  </div>
                </div>
                <div class="col-md-4 col-sm-4">
                        <div class="card">
						<div class="card-image waves-effect waves-block waves-light">
						  <img class="activator" src="../img/brosur.png">
						</div>
						<div class="card-content">
						  <span class="card-title activator grey-text text-darken-4">Brosur<i class="material-icons right">more_vert</i></span>
						  <p><a href="#">Detail</a>
						  	<span style="float: right;"><a href="#" title="">Edit</a></span>
						  	</p>
						</div>
						<div class="card-reveal">
						  <span class="card-title grey-text text-darken-4">Brosur<i class="material-icons right">close</i></span>
						  <p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					  </div>
                </div>
            </div>
         </div>
         </div>


@endsection