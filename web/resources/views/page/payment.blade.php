@extends('layouts.payment')
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

<div class="container-fluid">
<div class="container page_info"> 
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                        <span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                        <span class="step_thankyou check-bc step_complete">Thank you</span>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="#">Edit Cart</a></small></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="/img/brosur.png" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">Brosur</div>
                                    <div class="col-xs-12"><small>Quantity:<span>2</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>Rp</span> 3000</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Subtotal</strong>
                                    <div class="pull-right"><span>Rp</span><span> 6000</span></div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Kode pembayaran</small>
                                    <div class="pull-right"><span>Rp</span><span> 634</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>Rp</span><span> 6634</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    
                    <!--CREDIT CART PAYMENT-->
                    <div class="panel panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span>Metode Pembayaran</div>
                        <div class="panel-body">
                            <div class="form-group">
                            <div class="col-md-12"><strong>metode pembayaran</strong></div>
                                <div class="col-md-12">
                                    <div class="radio">
                                  <label><input type="radio" name="optradio">E-wallet</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="optradio">Bank Transfer</label>
                                </div>
                                <div class="radio disabled">
                                  <label><input type="radio" name="optradio">Credit Card</label>
                                </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Transfer</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">Mandiri</option>
                                        <option value="6">BCA</option>
                                        <option value="7">BNI</option>
                                        <option value="8">BRI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card Type:</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="CreditCardType" class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Card CVV:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Expiration Date</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                        <li class="amex hand">Amex</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--CREDIT CART PAYMENT END-->
                </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
</div>
</div>
</div>
@endsection