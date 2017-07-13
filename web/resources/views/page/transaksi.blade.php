@extends('layouts.transaksi')
@section('contents')

<div class="bg_parallax" id="inb">
<!--navigation swipe-->
	<div class="menu-btn">&#9776;</div>
		<nav class="pushy pushy-left">
		<div class="profile">
			<div class="avatar"><img src="img/pp_user/pp.jpg" alt="#"><span>5</span></div>
			<h3><a href="03.html">BambangS</a></h3>
			<a href="#" class="log_btn">Logout</a>
		</div>
        <ul class="side_menu">
<li><a href="/notifikasi"><i class="fa fa-bell"></i>Pesan</a></li>
<li><a href="/transaksi"><i class="fa fa-mail-reply"></i>Transaksi</a></li>
<li><a href="01.html" class="animsition-link"><i class="fa fa-money"></i>Topup Saldo</a></li>
<li><a href="05.html"><i class="fa fa-edit"></i>Buat Toko</a></li>
</ul>
		</nav>

	<!--autorization-->
	<div class="add_place none" id="autorized">
		<div class="place_form login_form">
			<i class="fa fa-times close_window" id="closeau"></i>
			<h3>Autorization<span></span></h3>
			<form>
				<label>Login:<input type="text"></label>
				<label>Password:<input type="text"></label>
				<a href="#" class="btn btn-success">Log in</a>
				<a href="#" class="btn btn-primary"><i class="icon-facebook"></i>Log in with Facebook</a>
			</form>
		</div>
	</div>

	<div class="site-overlay"></div>
	<div id="container">
	<!--header-->
		<div class="container-fluid header inner_head">
			<div class="fixed_w">
				<div class="row">
					<div class="col-md-12"><a href="/" class="logo"><img src="img/marketprint3.png" width="160px" height="20px" alt="Marketprint"/></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	   <div class="container">
          <div class="page-header">
              <h2 id="timeline" style="margin-top: 100px;">Detail Transaksi</h2>
          </div>


    <div class="row">
        <div class="btn-group btn-breadcrumb">
            <a href="#" class="btn btn-default"><i class="fa fa-home"></i></a>
            <a href="#" class="btn btn-default">Transaksi</a>
            <a href="#" class="btn btn-default">MP12SFS</a>
        </div>
	</div>
    
          <ul class="timeline">
              <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <form role="form">
                    <div class="timeline-heading">
                      <div class="form-group">
                        <label for="title">No transaksi : MP12SFS</label>
                      </div>
                    </div>
                    <div class="timeline-body">
                      <div class="form-group">
                        <label for="Text">Nama Toko : Mampang Print</label>
                      </div>
                    </div>
                    <div class="timeline-body">
                    	<div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="/img/banner.png" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">Banner</div>
                                    <div class="col-xs-12"><small>Quantity:<span>1</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>Rp</span>30.724</h6>
                                </div>
                            </div>
                    </div>
                     
                  </form>                
                </div>
              </li>
              <li>
                <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Pembayaran telah diterima</h4>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Order telah diproses</h4>
                  </div> 
                </div>
              </li>
              <li>
                <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Orderan telah selesai, silahkan datang ke toko</h4>
                  </div>
                </div>
              </li>
          </ul>
      </div>

@endsection
