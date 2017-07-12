@extends('layouts.home')
@section('contents')


@include('includes.authorization')
  
  <!-- Site Overlay -->
  <div class="site-overlay"></div>
  <div id="container">
    <div class="top_promo_block" id="promo_head">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header_promo">
              <img src="img/marketprint3.png" width="200px" height="30px" alt="#"> 
              @if(!session('token'))
                <a data-target="#autorized" class="log_btn ">Login</a>
              @endif
              @if(session('token'))
                <form method="POST" action="/logout" >
                {{-- {!! Form::open(['method' => 'POST', 'route' => '/logout'])!!} --}}
                  <a data-target="#autorized" class="log_btn">
                    <button style="
                            background-color: transparent;background-repeat:no-repeat;border: none;
                            cursor:pointer;overflow: hidden;" type="submit">Logout
                    </button>
                  </a>
                </form>
                {{-- {!! Form::close()!!} --}}
              @endif
            </div>
          </div>
        </div>
      </div>

      <div style="margin: 10px 450px 0px 450px;">
        @yield('notification');
        @if(session('message_notif'))
          <div class="alert alert-success alert-dismissable" role="alert" id="success-alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="text-center">{{session('message_notif')}}</h4>
          </div>
        @endif
        @if(session('message_notif_fail'))
        <div class="alert alert-danger alert-dismissable" role="alert" id="success-alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="text-center">{{session('message_notif_fal')}}</h4>
          </div>
        @endif  
      </div>
      
      
      <div class="start_descrition">
        <h1>Temukan Jasa Print Terdekat !<span></span></h1>
        <div class="search_promo">
        <form action="/maps" method="post" accept-charset="utf-8">
          <div class="input-group">
              <input type="text" name="kota" class="form-control" placeholder="Lokasi Kota Anda .." aria-label="..." required>
                <div class="input-group-btn btn_promo_search">
                  <button type="submit" class="btn btn-success">Temukan</button>
                </div>
          </div>
          </form>
        </div>
      </div>
      <div class="scroll_block">
        <img src="img/scroll.png" class="animated infinite bounce" alt="#">
      </div>
    </div>

    <!--Features block-->
    <div class="fea_block container-fluid">
      <div class="fixed_w">
        <h2 style="text-align: center;">Tentang Kami</h2>
        <div class="borderAccent"></div>
        <h2></h2>
        <div class="row">
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-arrows-h"></i>Consumer to Consumer (C2C)</h3>
            <span>penghubung antara consumer dengan consumer sehingga siapapun bisa memberikan jasa percetakan print dan bisa melayani konsumen</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-bolt"></i>Realtime cloud printing automatically</h3>
            <span>pelaku usaha percetakan tidak perlu melakukan pengoperasian print terhadap orderan konsumen. karena sistem kami dapat melakukan print secara otomatis.</span>
          </div>
          <div class="col-md-4 fea_item wow bounceInUp">
            <h3><i class="fa fa-check"></i>Push Notification</h3>
            <span>Print dapat dimonitoring berdasarkan banyaknya antrian dan dapat notifikasi ketika print sedang diproses.</span>
          </div>
        </div>
      </div>
    </div>

<!--
#################################
- Slider revolution -
#################################
-->
@include('includes.slider_revolution')

<!-- SLIDE  -->
<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
  <!-- MAIN IMAGE -->
  <img src="img/start/sl1/sl_bg.png"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
  <!-- LAYERS -->
  <!-- LAYER NR. 1 -->
  <div class="tp-caption lfb fadeout rs-parallaxlevel-1"
  data-x="60"
  data-y="200"
  data-speed="1000"
  data-start="400"
  data-easing="Power4.easeOut">
  <img src="img/start/sl2/imac.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lft fadeout rs-parallaxlevel-3"
data-x="170"
data-y="350"
data-speed="500"
data-start="1200"
data-easing="Power4.easeOut">
<img src="img/start/sl2/macbok.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lft fadeout rs-parallaxlevel-7"
data-x="-10"
data-y="340"
data-speed="700"
data-start="1500"
data-easing="Power4.easeOut">
<img src="img/start/sl2/ipad.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lft fadeout rs-parallaxlevel-1"
data-x="500"
data-y="center"
data-speed="1000"
data-start="2000"
data-easing="Power4.easeOut">
<div class="sl_descrition right">
  <h1>Available Mobile Platform<span></span></h1>
  <div class="row">
  	<div class="col-md-4">
  		<img src="img/app-store.png" width="200px" height="50px" alt="#">
  	</div>
  	<div class="col-md-4">
  		<img src="img/Get_it_on_Google_play.png" width="200px" height="50px">
  	</div>
  	<div class="col-md-4"></div>
  </div>
</div>
</div>
</li>

<!-- SLIDE  -->
<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
  <!-- MAIN IMAGE -->
  <img src="img/start/sl1/sl_bg.png"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
  <!-- LAYERS -->
  <!-- LAYER NR. 1 -->
  <div class="tp-caption lfb fadeout rs-parallaxlevel-5"
  data-x="center" 
  data-y="320" 
  data-speed="1000"
  data-start="400"
  data-easing="Power4.easeOut">
  <img src="img/start/sl3/h1.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lfb fadeout rs-parallaxlevel-1"
data-x="center" 
data-y="340" 
data-speed="1500"
data-start="700"
data-easing="Power4.easeOut">
<img src="img/start/sl3/h2.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lfb fadeout rs-parallaxlevel-10"
data-x="center" 
data-y="560" 
data-speed="2000"
data-start="1000"
data-easing="Power4.easeOut">
<img src="img/start/sl3/h3.png" alt="#">
</div>
<!-- LAYER NR. 1 -->
<div class="tp-caption lft fadeout rs-parallaxlevel-1"
data-x="center"
data-y="top"
data-speed="2500"
data-start="1200"
data-easing="Power4.easeOut">
<div class="sl_descrition top">
  <h1><b>1000+</b> Jasa Print<span></span></h1>
  <span>Temukan jasa print tersebar di berbagai kota</span>
  <div class="btns"><a href="#container" class="btn btn-success">Cari Sekarang</a></div>
</div>
</div>
</li>
</ul>
</div>
</div>

<!--Categori blocks-->
<div class="categori_block container-fluid">
  <div class="fixed_w">
    <div class="row">
    	<div class="col-md-3">
    		<img src="/img/security.eps.png" width="65px" height="75px" class="img-responsive center-block">
    		<h4 class="text-center"><strong>Jaminan 100% aman</strong></h4>
    		<p class="text-center">Payment system Marketprint menjamin keamanan uang Anda dalam bertransaksi. Pelajari amannya Marketprint</p>
    	</div>
    	<div class="col-md-3">
    		<img src="/img/wallet.eps.png" width="65px" height="75px" class="img-responsive center-block">
    		<h4 class="text-center"><strong>Kemudahan Pembayaran</strong></h4>
    		<p class="text-center">Marketprint menyediakan berbagai metode pembayaran untuk bertransaksi</p>
    	</div>
    	<div class="col-md-3">
    		<img src="/img/support.eps.png" width="65px" height="75px" class="img-responsive center-block">
    		<h4 class="text-center"><strong>Fast Customer Support</strong></h4>
    		<p class="text-center">CS Marketprint siap membantu Anda melalui e-mail, media sosial dan call center </p>
    	</div>
    	<div class="col-md-3">
    		<img src="/img/app.eps.png" width="65px" height="75px" class="img-responsive center-block">
    		<h4 style="text-align: center;"><strong>Kemudahan Akses Mobile</strong></h4>
    		<p style="text-align: center;">Download aplikasi Marketprint di Android dan iOS. Nikmati kemudahan bertransaksi dari gadget Anda</p>
    	</div>
    </div>
  </div>
</div>

<!--promo block-->
<div class="container-fluid">
  <div class="fixed_w promka">
    <div class="row m_list">
    	<div class="col-md-3">
    		<ul>
	    		<li><h3><strong>Marketprint</strong></h3></li>
	    		<li>Tentang Marketprint</li>
	    		<li>Aturan Penggunaan</li>
	    		<li>Kebijakan Privasi</li>
	    		<li>Berita & Pengumuman</li>
    		</ul>
    	</div>
    	<div class="col-md-3">
    		<ul>
	    		<li><h3><strong>Pembeli</strong></h3></li>
	    		<li>Cara Print</li>
	    		<li>Pembayaran</li>
	    		<li>Jaminan Aman</li>
	    		<li>Tips Print</li>
    		</ul>
    	</div>
    	<div class="col-md-3">
    		<ul>
	    		<li><h3><strong>Penyedia Print</strong></h3></li>
	    		<li>Cara Berjualan</li>
	    		<li>Keuntungan Jualan</li>
	    		<li>Tips Berjualan</li>
    		</ul>
    	</div>
    	<div class="col-md-3">
	    	<ul>
	    		<li><h3><strong>Temukan Kami</strong></h3></li>
	    		<li>
	    			<div class="col-md-4">
    					<img src="/img/facebook.eps.png" width="40px" height="40px">
    				</div>
    				<div class="col-md-4">
    					<img src="/img/twitter.eps.png">
    				</div>
    				<div class="col-md-4"></div>			
	    		</li>
	    	</ul>	
    	</div>
    </div>
    <div class="row" style="margin-left: 30px;">
    	<h5 style="color: #fff;">&copy 2017 Hak Cipta Terpelihara Marketprint.com.</h5>
    </div>
  </div>
  <div class="anim_bg"></div>
</div>

@endsection