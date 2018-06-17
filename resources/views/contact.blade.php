@extends('layout') 

@section('content')
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2>聯絡我們</h2>
					<h3>有什麼要跟我說的嗎？</h3>
					<p>如果你有什麼想跟我說的？雖然我不會看信箱但或許我改天會看到。<br>如果你很急，那別找我比較好＾＿＾</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-5 col-md-pull-1 animate-box">
						<div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="address">不告訴你</li>
								<li class="phone">還是不告訴你</li>
								<li class="email">就是不告訴你</li>
								<li class="url">沒有</li>
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

