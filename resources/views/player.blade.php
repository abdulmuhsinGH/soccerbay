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
			    <div role="tabpanel" class="tab-pane active" id="home">...</div>
			    <div role="tabpanel" class="tab-pane" id="profile">...</div>
			    <div role="tabpanel" class="tab-pane" id="messages">...</div>
			    <div role="tabpanel" class="tab-pane" id="settings">...</div>
			  </div>

			</div>

		</div>
	</div>
</div>


@endsection
