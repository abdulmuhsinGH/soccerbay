@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
		  		<li class="list-group-item active">
		  			<img src="http://res.cloudinary.com/demo/image/upload/w_100,h_100,c_thumb,g_face,r_20,d_avatar.png/non_existing_id.png">
		  		</li>
		  		<li class="list-group-item">Player Name</li>
		  		<li class="list-group-item">Player Position</li>
		  		<li class="list-group-item">Age</li>
		  		<li class="list-group-item">Nationality</li>
		  		<li class="list-group-item">Player Number</li>
		  		<li class="list-group-item">Height</li>
		  		<li class="list-group-item">Weight</li>
		  		<li class="list-group-item">Country of Birth</li>
		  		<li class="list-group-item">Date of Birth</li>
		  		<li class="list-group-item">Follow/Like :</li>
			</ul>
		</div>
		<div class="col-md-9">
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Overview</a></li>
			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Performance and Awards</a></li>
			    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Video</a></li>
			    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Gallery</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	<p><b>Bio</b><br>
			    		<p><b>PLAYER</b>: [Name]</p>
						<p><b>SPORT</b>: Soccer</p>
						<p><b>POSITION</b>: [Your Position]</p>

						<p>
							<b>CONTACT</b>:
							[Home Address]
							[City, Province/ Territory/ State, Postal Code/ Zip Code]
							[Home Phone]
							[Fax; Other Phone number, if any]
							EMAIL: [Email]
						</p>
						<p>
							<b>OBJECTIVE</b>: (Example): To play high-level soccer in college, assisting on the field in any way that I can.
							SKILLS, TRAINING, AND PLAYING CHARACTERISTICS
							(Examples): Exposed to and trained in all positions of competitive play; currently specializing in defensive responsibilities, (i.e. defender and sweeper) requiring delaying, channelization, acting as 1st and 2nd defender, tackling, counter-attacking, and support of ranging goalkeeper. Skilled in defensive techniques, including delaying, heading, slide tackling, shielding, and stripping.

							Skilled with both right and left feet.

							High intensity, high concentration. Excellent timing and anticipation, positioning, reading the game. Knowledgeable in rules of the game, team and individual strategy. High pain threshold.

							Strong leadership skills on and off the field. Take-charge mentality. Loud game voice. 
						</p>


			    	</p>

			    </div>
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	<p><b>PERSONAL AWARDS, HONORS, ACHIEVEMENTS</b><br>
					(Examples): Top Defender Team Award, [Date; School]
					Co-Top Defender Team Award, [Date; School]
					All-League, First Team (elected by opponent coaches in high school league) [Dates]
					National Fitness Award, [Dates]</p>
					<p><b>TEAM/ GROUP AWARDS</b><br>
					(Examples): High School League champions, [Dates]
					High School League, second place, [Dates]
					Club teams with numerous tournament wins</p>
				</div>
			    <div role="tabpanel" class="tab-pane" id="messages"><img src="http://placehold.it/600x300"></div>
			    <div role="tabpanel" class="tab-pane" id="settings"><img src="http://placehold.it/600x300"></div>
			  </div>

			</div>

		</div>
	</div>
</div>


@endsection
