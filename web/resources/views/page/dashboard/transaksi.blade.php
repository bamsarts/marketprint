@extends('layouts.dashboard.home')
@section('contents')

<div id="wrapper">
        @include('includes.dashboard.navbar')

         <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="waves-effect waves-dark" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui-elements.html" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> Produk</a>
                    </li>
                    <li>
                        <a href="chart.html" class="active-menu waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i>Transaksi</a>
                    </li>
                    <li>
                        <a href="tab-panel.html" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i>Pesan</a>
                    </li>
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Transaksi
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Transaksi</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No Transaksi</th>
                                            <th>Nama Pembeli</th>
                                            <th>Produk</th>
                                            <th>Quantity</th>
                                            <th>File</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeU">
                                            <td>MP14062017ANT</td>
                                            <td>Yulianti</td>
                                            <td><a href="#" title=""><img src="/img/brosur.png" width="80px" height="50px"></a></td>
                                            <td>10</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Belum diproses</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>MP12062017KHI</td>
                                            <td>Nurul Hidayati</td>
                                            <td><a href="#" title=""><img src="/img/idcard.png" width="80px" height="50px"></a></td>
                                            <td>40</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Belum Diproses</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>MP01062017KUD</td>
                                            <td>Angger pursan</td>
                                            <td><a href="#" title=""><img src="/img/idcard.png" width="80px" height="50px"></a></td>
                                            <td>20</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Diproses</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                       <tr class="gradeU">
                                            <td>MP11062017KUD</td>
                                            <td>Bambang Supriadi</td>
                                            <td><a href="#" title=""><img src="/img/banner.png" width="80px" height="50px"></a></td>
                                            <td>2</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Diproses</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>MP09062017DAG</td>
                                            <td>Ramadika Bagaswara</td>
                                            <td><a href="#" title=""><img src="/img/brosur.png" width="80px" height="50px"></a></td>
                                            <td>8</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Selesai</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                      <tr class="gradeU">
                                            <td>MP05062017SIA</td>
                                            <td>Jabal Tursina</td>
                                            <td><a href="#" title=""><img src="/img/banner.png" width="80px" height="50px"></a></td>
                                            <td>1</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Selesai</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>MP01062017KUD</td>
                                            <td>Fikri Aliardi</td>
                                            <td><a href="#" title=""><img src="/img/banner.png" width="80px" height="50px"></a></td>
                                            <td>3</td>
                                            <td class="center"><a href="#" title="">Download</a></td>
                                            <td class="center">Selesai</td>
                                            <td><a href="javascript:;" class="btn btn-small btn-primary">
												<i class="fa fa-wrench"></i></a>
												<a href="javascript:;" class="btn btn-small">
												<i class="fa fa-check"></i>										
												</a>
											</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>        
    </div>
             <!-- /. PAGE INNER  -->
            </div>


@endsection