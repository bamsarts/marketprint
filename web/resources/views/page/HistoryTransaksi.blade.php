@extends('layouts.HistoryTransaksi')
@section('contents')

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

	<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="margin-top: 100px;">History Transaksi</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="margin-top: 80px;" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>
                                            <b>No Transaksi</b>
                                        </h4>
                                        <h5>MP13072017SFS</h5>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Nama Toko</b>
                                        </h4>
                                        <h5>Mampang print</h5>
                                    </td>
                                    <td>
                                        <img src="/img/banner.png" width="130">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Banner</b>
                                        </h4>
                                        <h5>Quantity : 1</h5>
                                    </td>
                                     <td>
                                        <h4>
                                            <b>Total Pembayaran</b>
                                        </h4>
                                        <h5>Rp. 30.763</h5>
                                    </td>
                                     <td>
                                        <h4>
                                            <b>Status</b>
                                        </h4>
                                        <h5>Menunggu Diproses</h5>
                                    </td>
                                    <td>
                                        
                                            <button class="btn btn-warning" value="left" type="button">
                                             Detail</button>
                       
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <h4>
                                            <b>No Transaksi</b>
                                        </h4>
                                        <h5>MP12062017GSS</h5>
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Nama Toko</b>
                                        </h4>
                                        <h5>Juanda print</h5>
                                    </td>
                                    <td>
                                        <img src="/img/brosur.png" width="130">
                                    </td>
                                    <td>
                                        <h4>
                                            <b>Brosur</b>
                                        </h4>
                                        <h5>Quantity : 4</h5>
                                    </td>
                                     <td>
                                        <h4>
                                            <b>Total Pembayaran</b>
                                        </h4>
                                        <h5>Rp. 20.163</h5>
                                    </td>
                                     <td>
                                        <h4>
                                            <b>Status</b>
                                        </h4>
                                        <h5>Diterima & Selesai</h5>
                                    </td>
                                    <td>
                                        
                                            <button class="btn btn-warning" value="left" type="button">
                                             Detail</button>
                       
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
@endsection