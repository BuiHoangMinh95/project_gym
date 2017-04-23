@extends('frontend.layout')
@section('content')

			<div class="trainers-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<div class="container">

				<section style="padding: 25px;">
				<ul class="lb-album">
				@foreach($giaoan as $rows)
					<li class="grid">
							<div class="lb-overlay" id="image-2">
									<img src="{{url($rows->hinhanh)}}" class="img-responsive" alt=""/>
									<div class="class-text  hvr-bounce-to-bottom">
										<h4><a href="giaoan/{{$rows->id}}" style="text-decoration: none;text-align: center;">{{$rows->ten}}</a> </h4>
										<h2 style="color: whilte">{{$rows->tacgia}}</h2>
										<p> Giảm cân , Tăng sức mạnh , rèn luyện thể chất</p>
									</div>
							</div>
					</li>
				@endforeach();	
				</ul>
</section>
</div>
		
@endsection		