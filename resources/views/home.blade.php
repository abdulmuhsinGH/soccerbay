@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-1">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="http://placehold.it/600x400" alt="...">
			      <div class="carousel-caption">
			       
			         <a href="#">Join Us</a>
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/600x400" alt="...">
			      <div class="carousel-caption">
			         <a href="#">Sign In</a>
			      </div>
			    </div>
			     <div class="item">
			      <img src="http://placehold.it/600x400" alt="...">
			      <div class="carousel-caption">
			        <a href="#">Featured player</a>
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>

		<div class="col-md-5">
			<div class="list-group">
			  <a href="#" class="list-group-item active">
			    Football News 		
			  </a>

			  <a href="#" class="list-group-item">
			    Kotoko 'unfazed' by attack; players remian focused		
			  </a>
			  <a href="#" class="list-group-item">
			  	Gyimah makes Orlando Pirates debut in Soweto derby 		
			  </a>
			  <a href="#" class="list-group-item">
			  	Gideon Baah impresses for HJK despite 2-0 defeat 		
	          </a>
			  <a href="#" class="list-group-item">
			  	Deschamps taught me to be a winner - Kevin Osei		
	          </a>
			  <a href="#" class="list-group-item">
			  	André Ayew’s Roy of the Rovers moment showed off his rich talent 		
	          </a>
			  <a href="#" class="list-group-item">
				Kwame Bonsu's brilliant assist helps Gefle IF win
			  </a>
			  <a href="#" class="list-group-item">
			  	Ernest Asante scores for Stabaek in Norway
			  </a>
	          <a href="#" class="list-group-item">	Jordan's Aston Villa held by Nottingham Forest
	          </a>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-1" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		<div class="col-md-2" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		<div class="col-md-2" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		<div class="col-md-5">
			<div class="list-group">
			  <a href="#" class="list-group-item active">
			    Results 		
			  </a>

			  <a href="#" class="list-group-item">
			    Olympics 	2 - 1 	Medeama SC 		&nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span>		
			  </a>
			  <a href="#" class="list-group-item">
			  	Liberty Professionals 	1 - 0 	WAFA &nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span> 		
			  </a>
			  <a href="#" class="list-group-item">
			  	Asante Kotoko 	1 - 0 	AshantiGold FC &nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span> 		
	          </a>
			  <a href="#" class="list-group-item">
			  	Heart of Lions 	2 - 0 	Wa All Stars &nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span>		
	          </a>
			  <a href="#" class="list-group-item">
			  	Aduana Stars 	1 - 0 	Inter-Allies &nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span> 		
	          </a>
			  <a href="#" class="list-group-item">
				Hasaacas 	2 - 0 	BA Utd &nbsp;	<span class="glyphicon glyphicon-calendar">26-Jul-15 </span>
			  </a>
			  <a href="#" class="list-group-item">
			  	Edubiase FC 	2 - 1 	Hearts of Oak &nbsp;	<span class="glyphicon glyphicon-calendar">25-Jul-15 </span>
			  </a>
	          <a href="#" class="list-group-item">		
	          	Bechem United 	2 - 1 	Berekum Chelsea &nbsp;	<span class="glyphicon glyphicon-calendar">24-Jul-15 </span>
	          </a>
			</div>

		</div>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-2 col-md-offset-1" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		<div class="col-md-2" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		<div class="col-md-2" style="border-color:black;">
			<a href="player">
				<ul class="list-group">
			  		<li class="list-group-item active">
			  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
			  		</li>
			  		<li class="list-group-item">Player Name</li>
			  		<li class="list-group-item">Player Position</li>
			  		<li class="list-group-item">Current Club</li>
				</ul>
			</a>
		</div>
		

	</div>
</div>
@endsection
