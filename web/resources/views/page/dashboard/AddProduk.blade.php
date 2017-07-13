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
					<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Produk</a></li>
					  <li class="active">Tambah</li>
					</ol>

				</div>
		
           <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
                        
                        <div class="card-content">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Nama Produk</label>
        </div>
      </div>
      <div class="row">
								<div class="input-field col s12">
								  <textarea id="textarea1" class="materialize-textarea"></textarea>
								  <label for="textarea1">Deskripsi</label>
								</div>
							  </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="quantity" type="number" value="1" class="validate">
          <label for="quantity">Quantity</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="quantity" type="number" value="1" class="validate">
          <label for="quantity">Harga</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <p>Size

   			<div class="col-md-2">
   				 <input type="checkbox" id="test5" />
      			<label for="test5">A4</label>
   			</div>
   			<div class="col-md-2">
   				<input type="checkbox" id="test5" style="margin-left: 40px;" />
     			<label for="test5">A3</label>
   			</div>
   			<div class="col-md-2">
   				<input type="checkbox" id="test5" style="margin-left: 40px;" />
     			<label for="test5">A2</label>
   			</div>
         
      </p>
        </div>
      </div>
      <div class="row">
         <div class="file-field input-field">
      <div class="btn">
        <span>Gambar</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Foto maksimal 5">
      </div>
    </div>
      </div>

      <button type="button" class="btn btn-primary">Tambah</button>
    </form>
	<div class="clearBoth"></div>
  </div>
    </div>
 </div>	
	 </div>		

	    </div>

@endsection