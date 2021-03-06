@extends('frontend.layout')
@section('content')
	 <!---banner--->
	<div class="banner-section">
		<div class="container">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						 <li>	 
							<div class="caption">
							<div class="col-md-6 cap-left wow fadeInDownBig animated animated" data-wow-delay="0.4s">
								<p>Lorem ipsum dolor sit amet, consectetuer adipig elit. Praesent vestibulummolestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta Fusce</p>
					
							</div>
							<div class="col-md-6 cap-right wow fadeInUpBig animated animated" data-wow-delay="0.4s">
								<h3>Pain is temporary. quitting lasts forever.</h3>
							</div>
							<div class="clearfix"></div>
							</div>
						</li>
						 <li>	 
							<div class="caption">
							<div class="col-md-6 cap-left wow fadeInDownBig animated animated" data-wow-delay="0.4s">
								<p>Pain may last a minute, an hour, or a day, but it will eventually subside & something else will take its place. But quitting, however, lastsFusce porta porta</p>
								
							</div>
							<div class="col-md-6 cap-right wow fadeInUpBig animated animated" data-wow-delay="0.4s">
								<h3>Work hard everyday No guts no glory</h3>
							</div>
								<div class="clearfix"></div>
							</div>
							
						 </li>
						<li>	 
							<div class="caption">
							<div class="col-md-6 cap-left wow fadeInDownBig animated animated" data-wow-delay="0.4s">
								<p>Lorem ipsum dolor sit amet, consectetuer adipig elit. Praesent vestibulummolestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta</p>
								
							</div>
							<div class="col-md-6 cap-right wow fadeInUpBig animated animated" data-wow-delay="0.4s">
								<h3>Pain is temporary. quitting lasts forever.</h3>
							</div>
							<div class="clearfix"></div>
							</div>
							
						 </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!---banner--->
		<!---content--->
			<div class="content">
				<!-- <!---train---> -->
					<div class="train w3-agile">
						<div class="container">
							<h2>Các Loại Bộ Môn</h2>
							@foreach($loaibomon as $tl)
							<div class="train-grids">
								<div class="col-md-3 train-grid wow fadeInLeft animated animated" data-wow-delay="0.4s" style="margin-top: 5px">
									<div class="train-top hvr-bounce-to-right">
										<div class="train-img">
											<img src="images/e1.png"/>
										</div>
										<h4>{{$tl->tenbomon}}</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipig elit. Praesent vestibulummolestie lacus. Aenean nonummy</p>
									</div>
								</div>
							</div>
							@endforeach()
								<div class="clearfix"></div>
							</div>
							
							</div>
					
					</div>
				<!-- <!---train---> -->


				<div class="fit-section w3l-layouts">
					<div class="container">
					<h2 style="text-align: center;">TIN TỨC LUYỆN TẬP</h2>
						<div class="fit-grids">
							@foreach($tintucluyentap as $tl)
							<div class="col-md-3 fit-grid wow fadeInDownBig animated animated" data-wow-delay="0.4s">
								<div class="fit-left hvr-bounce-to-bottom">
									<h3>{{$tl->ten}}</h3>
									<p><img src="{{$tl->hinhanh}}" style="width: 150px;height: 150px " /></p>
									<ul>
									<li>Tác giả:{{$tl->tacgia}}</li>
									<li>SATURDAY : 09:30 - 15:30</li>
									<li>SUNDAY : Closed</li>
									</ul>
								</div>
							</div>
						@endforeach()
						</div>
							<div class="clearfix"></div>
						</div>	
				</div>
				<!---Benefits - Join Today!--->
					<div class="benefits w3l">
						<div class="container">
							<div class="benefits-grids">
								<div class="col-md-6 benefits-grid wow fadeInLeft animated animated" data-wow-delay="0.4s">
									<h3>benefits join today</h3>
									<div class="benefit-top">
										<div class="benefit-left">
											<h4>1</h4>
										</div>
										<div class="benefit-right">
											<p> porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci Neque velit.</p>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="benefit-top">
										<div class="benefit-left">
											<h4>2</h4>
										</div>
										<div class="benefit-right">
											<p> porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci Neque velit.</p>
										</div>
										<div class="clearfix"></div>
									</div><div class="benefit-top">
										<div class="benefit-left">
											<h4>3</h4>
										</div>
										<div class="benefit-right">
											<p> porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci Neque velit.</p>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="benefit-top">
										<div class="benefit-left">
											<h4>4</h4>
										</div>
										<div class="benefit-right">
											<p> porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci Neque velit.</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6 benefits-grid1 wow fadeInRight animated animated" data-wow-delay="0.4s">
									<form action="#" method="post">
										<input type="text" name="name" placeholder="Name *" required>
										<input type="text" name="email" class="email" placeholder="Email *" required>
										<input type="text" name="phone"  class="phone"placeholder="Phone Number *" required>
										<textarea name="text area" placeholder="Message *"></textarea>
										<input type="submit" value="Join Now">
									</form>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<!---Benefits - Join Today!--->
			</div>
			<div class="testimonials-section">
			<div class="container">
				<h3>Testimonials</h3>
				<div class="testimonials-grids">
					<div class="col-md-2 testimonials-grid1 test1 wow fadeInDownBig animated animated" data-wow-delay="0.4s">
						<img src="images/t1.png" class="img-responsive" alt=""/>
					</div>
					<div class="col-md-10 testimonials-grid wow fadeInRight animated animated" data-wow-delay="0.4s">
						<p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium.</p>
						<h5>Antonio Brightman</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="testimonials-grids">
					<div class="col-md-10 testimonials-grid wow fadeInUpBig animated animated" data-wow-delay="0.4s">
						<p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium.</p>
						<h5>Brightman</h5>
					</div>
					<div class="col-md-2 testimonials-grid1 test wow fadeInLeft animated animated" data-wow-delay="0.4s">
						<img src="images/t2.png" class="img-responsive" alt=""/>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---Testimonials--->

@endsection