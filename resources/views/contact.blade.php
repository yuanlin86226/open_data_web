@extends('layout') 

@section('content')
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2>Say Hello</h2>
					<h3>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-5 col-md-pull-1 animate-box">
						<div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
								<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
								<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
								<li class="url"><a href="http://freehtml5.co">FreeHTML5.co</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 animate-box">
						<h3>Get In Touch</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="fname">Your Name</label>
									<input type="text" id="fname" class="form-control">
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop

