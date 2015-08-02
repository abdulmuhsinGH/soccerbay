@extends('app')



@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Contact</b> Us</div>

					<div class="panel-body">
						
							<div class="row">
								<div class="col-md-4">
									<img src="http://placehold.it/300x300">
									<b>Our Location</b>
								</div>
								<div class="col-md-8">
									<form class="form-horizontal" method="GET">
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-2 control-label">Your Email</label>
									    <div class="col-sm-10">
									      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
									    <div class="col-sm-10">
									      <textarea type="text" class="form-control" id="message" placeholder="Your Message"></textarea>
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <div class="pull-right">
									      <button type="submit" class="btn btn-default">Submit Mesage</button>
									    </div>
									  </div>
									</form>
									
								</div>


							</div>

					
						
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
