@extends('frontend.layout')
@section('content')
	
   <div class="contact w3l">
        <div class="map wow fadeInUpBig animated animated" data-wow-delay="0.4s" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"
            ></iframe>
        </div>
                    

        <div class="map-grids w3-agile">
           <div class="col-md-6 benefits-grid1 wow fadeInRight animated animated" data-wow-delay="0.4s">
            @if(count($errors)>0)
                        <div class="alert alert-danger" >
                             @foreach($errors->all() as $error)
                                <li>{!!$error !!}</li>
                             @endforeach
                        </div>
                       
             @endif
            <h2 style="text-align: center;color: black">ĐĂNG KÍ</h2>
            <form method="post" action="">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div>
              	<div>Email</div>
               <input type="text" name="email" class="email" placeholder="Email *" required>
              </div>
               <div>
              	<div>Tên</div>
                   <input type="text" name="name" placeholder="Name *" required>
              </div>
               <div>
              	<div>Mật khẩu</div>
                 <input type="password"  name="password"  placeholder="password *" style="border: none;height:30px">
              </div>
               <div>
              	<div>Nhập Lại Mật khẩu</div>
                <input type="password" name="passwordAgain"  placeholder="password *" style="border: none;height:30px">
             	 </div>
               <div style="margin-top: 10px;">
              		    <input type="submit" value="Đăng kí">	
              </div>			                         
            </div>
            <div class="col-lg-10" style="margin-top: 5px;">
            	@if(Session::has('thongbao'))
                            <div class="alert alert-danger">
                                    {!!Session::get('thongbao')!!}
                            </div>
                @endif
            </div>
              
            <div class="clearfix"></div>
        </div>
    </div>

@endsection

 