@extends('layout') 

@section('content')
	
	<div id="fh5co-author">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-8 col-md-offset-1 col-md-push-1 text-left fh5co-heading">
					<h2>{{ $data['name'] }}</h2>
					@if ($data['intro']!="")
						<p>{{ $data['intro'] }}</p>
					@else
						<p>暫無相關說明</p>
					@endif
					
					
					<div class="role">
						<h3>{{ $data['type'] }}</h3>
						<ul>
							@if (isset($data['address']) && $data['address']!="")
								<li>{{ $data['address'] }}</li>
							@endif
							@if (isset($data['openTime']) && $data['openTime']!="")
								<li>{{ $data['openTime'] }}</li>
							@endif
							@if (isset($data['closeDay']) && $data['closeDay']!="")
								<li>{{ $data['closeDay'] }}</li>
							@endif
							@if (isset($data['phone']) && $data['phone']!="")
								<li>{{ $data['phone'] }}</li>
							@endif
							@if (isset($data['email']) && $data['email']!="")
								<li>{{ $data['email'] }}</li>
							@endif
							@if (isset($data['arriveWay']) && $data['arriveWay']!="")
								<li>{{ $data['arriveWay'] }}</li>
							@endif
							@if (isset($data['masterUnit']) && $data['masterUnit']!="")
								<li>{{ $data['masterUnit'] }}</li>
							@endif
						</ul>
					</div>
					@if ($data['website']!="")
						<p><a href="{{ $data['website'] }}" class="btn btn-primary" target="_blank">Visit Website</a></p>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class="animate-box"><img src="{{ $data['representImage'] }}" class="img-responsive" style="margin: 0 auto;"></p>
				

					<div class="row row-pt-md portfolio-navigation">

						<div class="col-xs-4 text-left">
							@if (isset($data['prev']))
								<a href="portfolio_detail?keyword={{ $_GET['keyword'] }}&title={{ $data['prev'] }}" class="btn btn-primary btn-outline"><i class="icon-chevron-left"></i> Prev </a>
							@endif
						</div>
						
						<div class="col-xs-4 text-center">
							<a href="work?keyword={{ $_GET['keyword'] }}" class="btn btn-primary btn-outline"><i class="icon-grid2"></i> View All</a>
						</div>

						<div class="col-xs-4 text-right">
							@if (isset($data['next']))
								<a href="portfolio_detail?keyword={{ $_GET['keyword'] }}&title={{ $data['next'] }}" class="btn btn-primary btn-outline">Next <i class="icon-chevron-right"></i></a>	
							@endif
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
@stop

