@extends('layouts.DetailProduk')
@section('contents')

<div class="bg_parallax" id="inb">
<!--navigation swipe-->
	<div class="menu-btn">&#9776;</div>
		<nav class="pushy pushy-left">
		<div class="profile">
			<div class="avatar"><img src="img/avatar/ava_16.jpg" alt="#"><span>5</span></div>
			<h3><a href="03.html">Bambang Supriadi</a></h3>
			<a href="#" class="log_btn">Log in</a>
		</div>
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
		
		<div class="container page_info">
		<div class="container">
			<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Brosur</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Brosur merupakan publikasi resmi perusahaan berbentuk lembaran cetakan, yang berisi informasi mengenai suatu produk, layanan, atau program, yang ditunjukan kepada pasar sasaran (Target Audiens). Guna membantu upaya pemasaran atau marketing maupun Public Relations.</p>
						<h4 class="price">Harga: <span>1.500 / lembar</span></h4>
						<h5 class="sizes">Quantity:</h5>
							<div class="input-group input-group-sm" style="margin-right: 300px;">
							  <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-print"></i></span>
							  <input type="text" class="form-control" aria-describedby="sizing-addon3" value="1">
							</div>
						
						<h5 class="sizes">sizes:
							<select class="selectpicker">
							  <option>A4</option>
							  <option>A5</option>
							</select>
						</h5>
						<h5 class="colors">
							<label class="control-label">Select File</label>
							<input id="input-4" name="input4[]" type="file" multiple class="file-loading">
						</h5>
						<div class="action">
							<a href="/payment" title=""><button class="add-to-cart btn btn-default" type="button">Pesan Sekarang</button></a>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
</div>

@endsection