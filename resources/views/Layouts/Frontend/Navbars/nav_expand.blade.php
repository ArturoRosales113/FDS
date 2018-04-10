<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="100">
	<div class="container">

		<div class="dropdown button-dropdown">
			<a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
				<span class="button-bar"></span>
				<span class="button-bar"></span>
				<span class="button-bar"></span>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-header">Dropdown header</a>
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">One more separated link</a>
			</div>
		</div>


		<div class="navbar-translate">
			<a class="navbar-brand" href="{{route ('front.index')}}" rel="tooltip" title="" data-placement="bottom" data-original-title="Designed by Invision. Coded by Creative Tim">
				Food Delivery System
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
		   		<span class="navbar-toggler-bar bar1"></span>
				<span class="navbar-toggler-bar bar2"></span>
				<span class="navbar-toggler-bar bar3"></span>
		 	</button>
		</div>

	    <div class="collapse navbar-collapse has-image" data-color="orange" style="background: url() 0% 0% / cover;">
			<ul class="navbar-nav ml-auto">


				<li class="nav-item">
					<a class="nav-link" href="../index.html">
						<i class="now-ui-icons design_app"></i>
						<p>Nosotros</p>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="">
						<p>Carta</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<p>Contacto</p>
					</a>
				</li>
		@if (Auth::check())
			<li class="nav-item">
<a class="nav-link" href="#"
onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
Cerrar Sesión
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</li>

	@else
		<li class="nav-item">
			<a class="nav-link" href="{{route('login')}}">
				<p>Iniciar Sesión</p>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{route('register')}}">
				<p>Registrarse</p>
			</a>
		</li>
		@endif




<!-- 	<li class="nav-item">
<a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim">
	<i class="fa fa-twitter"></i>
	<p class="hidden-lg-up">Twitter</p>
</a>
</li>
<li class="nav-item">
<a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim">
	<i class="fa fa-facebook-square"></i>
	<p class="hidden-lg-up">Facebook</p>
</a>
</li>
<li class="nav-item">
<a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial">
	<i class="fa fa-instagram"></i>
	<p class="hidden-lg-up">Instagram</p>
</a>
</li> -->

			</ul>
	    </div>
	</div>
</nav>
