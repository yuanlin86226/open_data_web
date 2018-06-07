@extends('layout') 

@section('content')
	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2>{{ $data['title'] }}</h2>
					<h3 style="color:#cccccc;margin-top: -15px;">{{ $data['e_title'] }}</h3>
					<p>{!! $data['introduce'] !!}</p>
				</div>
			</div>
			<div class="row">

				@foreach( $data['infos'] as $index => $info)
					<div class="col-md-4 text-center animate-box">
						<a class="work" href="portfolio_detail">
							<div class="work-grid" style="background-image:url('{{ $info['representImage'] }}');">
								<div class="inner">
									<div class="desc">
									<h3>{{ $info['name'] }}</h3>
									<span class="cat">{{ $info['cityName'] }}</span>
								</div>
								</div>
							</div>
						</a>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
	
@stop

