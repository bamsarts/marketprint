@extends('layouts.JasaPrint')
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
<div class="col_md_12">
<img src="img/pp_user/logo_print.png" alt="">
<h1>Mampang Print</h1>
<ul>
<li><a href="#">Digital Printing</a></li>
</ul>
</div>
</div>
<div class="container contant">
<div class="row cont">
<!-- Left column-->
<div class="col-md-3 mobile_none sidebar">
<div>
<!--map place point-->

<div id="map_place" class="map_place"></div>
<!--Similar Place-->
<div class="similar">
<h4><i class="fa fa-thumbs-o-up"></i>Recomended Seller</h4>
<div>
<a href="#">Bergabung April 2016</a>
<a href="#">Login terakhir 2 jam lalu</a>
</div>
<button class="btn btn-warning">Kirim Pesan</button>
</div>
</div>
</div>
<!--content-->
<div class="col-md-9 basic">
<!--Header section-->
<div class="header_section">
</div>
<!--Phone info-->
<div class="phone_email m_list_none">
<span>Bagikan</span>
<ul> 
	<li>
		<img src="/img/facebook.eps.png" width="30px" height="30px">
		<img src="/img/twitter.eps.png" width="30px" height="30px">
	</li>
</ul>
</div>
	<div class="row">
    	<!-- BEGIN PRODUCTS -->
  		<div class="col-md-2 col-sm-6">
    		<span class="thumbnail">
      			<img src="/img/coverbook.png" alt="...">
      			<h4>Cover Book</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">Rp.1600</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<a href="/detailproduk" title=""><button class="btn btn-success right" > Detail</button></a>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="/img/idcard.png" alt="...">
      			<h4>ID Card</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">Rp.1500</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right"> Detail</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="/img/banner.png" alt="...">
      			<h4>Banner</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">Rp.15000</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > Detail</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="/img/brosur.png" alt="...">
      			<h4>Brosur</h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">Rp.3000</p>
      				</div>
      				<div class="col-md-6 col-sm-6">
      					<button class="btn btn-success right" > Detail</button>
      				</div>
      				
      			</div>
    		</span>
  		</div>
  		<!-- END PRODUCTS -->
	</div>

<div class="reviews">
<!--reviews-->
<h4>45 Reviews:</h4>
<!--review-->
<div class="rev">
<div class="user">
<!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_3.jpg" alt=""></a>
</div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson</div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user">
<!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_4.jpg" alt=""></a>
</div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson</div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_5.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...</div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_6.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson on possibly the world's most famous beverage</div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_7.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson</div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_8.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! </div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_9.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson on possibly the world's most famous beverage </div>
</div>
</div>
<!--review end-->
<!--review-->
<div class="rev">
<div class="user"> <!--user avatar-->
<a href="03.html" class="user_avatars">
<div class="user_go">
<i class="fa fa-link"></i>
</div>
<img src="img/avatar/ava_10.jpg" alt=""></a></div>
<div class="texts">
<div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
<div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...</div>
</div>
</div>
<!--review end-->
</div>
</div>
</div>
</div>
</div>
</div>

@endsection

<script type="text/javascript" src="js/map_place.js"></script>