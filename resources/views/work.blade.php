@extends('layout') 

@section('content')
	
	<div id="fh5co-work">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 text-left fh5co-heading">
					<div style="border: #d2d2d2;border-style: solid;border-radius:  10px 10px 10px 10px;border-width: unset;width:  350px;height:  200px;">
						<div style="margin:20px">
							<div class="row form-group" style="margin:0 auto;">
								<label for="title" style="margin-top:20px;">搜尋活動名稱：</label>
								<input type="text" id="title" class="form-control">
								<p class="text-center" style="margin-top:10px;"><a class="btn btn-primary btn-outline" onclick="getData('{{$_GET['keyword']}}')">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-left fh5co-heading">
					<h2>{{ $data['title'] }}</h2>
					<h3 style="color:#cccccc;margin-top: -15px;">{{ $data['e_title'] }}</h3>
					<p>{!! $data['introduce'] !!}</p>
				</div>
			</div>
			<div class="row">

				@if(count($data['infos'])==0)
					<div class="col-md-12 text-center">
						<h3>查無相關資料</h3>
					</div>
				@else
					@foreach( $data['infos'] as $index => $info)
						<div class="col-md-4 text-center animate-box">
							<a class="work" href="portfolio_detail?keyword={{$_GET['keyword']}}&title={{ $info['name'] }}">
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
				@endif
				
			</div>
		</div>
	</div>

	<script>
		function getData(keyword) {
			location.href="/work?keyword="+keyword+"&title="+$('#title').val();
		}
	</script>
	
	
@stop

