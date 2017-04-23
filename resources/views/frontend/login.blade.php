@extends('frontend.layout')
@section('content')
	
   <div class="contact w3l">
        <div class="map wow fadeInUpBig animated animated" data-wow-delay="0.4s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
        </div>
        <div class="map-grids w3-agile">
            <div class="col-md-8 map-middle wow fadeInRight animated animated" data-wow-delay="0.4s">
            <form method="post" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required="">
                                        <input type="password" name="password"  class="form-control" placeholder="password">
                                        <input type="submit" value="login" style="margin-top: 10px">
                                    </form>
            </div>
            <div class="col-md-4 map-left wow fadeInLeft animated animated" data-wow-delay="0.4s">
                <h4>Address</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
                    <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailto:info@example.com">info@example.com</a></a></li>
                    <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection