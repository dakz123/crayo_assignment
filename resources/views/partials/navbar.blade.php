
@extends('layouts.frontend')
@section('navbar')
  <nav class="navbar navbar-expand-lg menuBar">
			<div class="container">  
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav menu">
                        @foreach ($menus as $menu)
                         <li class="nav-item active">
							<a class="nav-link" href="#">{{$menu->menu_name}}</a>
						</li>   
                        @endforeach
						
						
					</ul>
				</div>
				<ul class="navbar-nav language">
					<li class="nav-item active">
						<a class="nav-link" href="#">AR</a>
					</li>
				</ul>
			</div>
		</nav>  
@endsection
