@extends('layouts.maps')
@section('contents')

<!--navigation swipe-->
<div class="menu-btn">&#9776;</div>
<nav class="pushy pushy-left">
<div class="profile">
@if(session('token'))
<div class="avatar"><img src="img/pp_user/pp.jpg" alt="#"><span>5</span></div>

	<h3>
		<a id="profil" href="#" title=""></a>
	</h3>	
<form method="POST" action="/logout" >
	<a style="margin-top: 50px;" href="#" class="log_btn">
		<button style="background-color: transparent;background-repeat:no-repeat;border: none;
                       cursor:pointer;overflow: hidden;" type="submit">Logout
        </button>
	</a>
</form>
@endif
@if(!session('token'))
<a style="margin-top: 50px;" href="#" class="log_btn">Log in</a>
@endif
</div>
</nav>


<!--autorization-->
@include('includes.authorization')

<!-- Site Overlay -->
<div class="site-overlay"></div>
<div id="container">
<!--Header-->
<div class="container-fluid header inner_head">
	<div class="fixed_w">
		<div class="row">
			<div class="col-md-12">
				<a href="/" class="logo"><img src="img/marketprint3.png" width="160px" height="20px" alt="Marketprint"/></a>
					
				<form action="/maps" method="post" class="navbar-form navbar-right">
					{{ csrf_field() }}
			        <div class="form-group">
			          <input name="kota" type="text" class="form-control" placeholder="Temukan Kota.." required>
			        </div>
			        <button type="submit" class="btn btn-default">Cari Kota</button>
			    </form>
			    @if(isset($data))
			    	<div style="margin: 4px 350px 4px 350px;" class="alert alert-danger alert-dismissable" role="alert" id="success-alert"> 
            		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span 				aria-hidden="true">&times;</span>
            		</button>
            			<h4 class="text-center">{{ $data }}</h4>
          			</div>	
          		@endif
			</div>
		</div>
	</div>
</div>

<!--categori menu-->
<div class="container-fluid menu mobile">
<div class="row">
<div class="col-md-12">

<span>Categori menu</span>
<i class="fa fa-times" id="close_menu"></i>
<ul>
<li><a href="javascript:toggleMarkers('Showplace');" class="showplace"><i class="fa fa-eye"></i></a></li>
<li><a href="javascript:toggleMarkers('Park');" class="park"><i class="fa fa-leaf"></i></a></li>
<li class="mobile_menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<!--map-->
<div id="map" class="map"></div>

<!--/map-->
@endsection

<script type="text/javascript" src="js/map.js"></script>