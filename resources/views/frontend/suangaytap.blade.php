@extends('frontend.layout')
@section('content')
<div class="clearfix"></div>
<div class="col-md-12 " style="margin-top:100px;margin-bottom: 10px;">
<div class="col-md-9 col-xs-offset-2">

   
</div>
<div class="clearfix"></div>
    <div class="col-md-2 col-xs-offset-3" style="margin-top:5px;" >
       
        <div class="panel panel-primary">
        @if(isset($nguoidung))
            <div class="panel-heading">ngày tập của {{$nguoidung->name}}</div>
           
        @endif()
		            <div class="panel-body">
				   		 <form method="post" action="">
				   		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				         <table class="table table-bordered table-hover" id="table1"> 
						 <div>
				                   <div><i class="glyphicon glyphicon-calendar"></i> Ngày</div>
				                    <i ><input  type="date"  data-date-format="DD MMMM YYYY" name="ngay" class="form-control"  required="" value="{{$ngaytap->ngay}}"></i>
				                </div>
				                <div>
				                <div ><i class="glyphicon glyphicon-pencil"></i> Chi tiết ngày tập</div>
				                     <input type="text" name="nhomco" class="form-control"  required="" value="{{$ngaytap->nhomco}}">
				                </div>
				                <tr>
										          <td><input type="text" name="ten[]" class="form-control"></td>
										          <td><input type="text" name ="khoiluong[]" class="form-control"></td>
										          <td><input type="text" name ="so_lan[]" class="form-control"></td>
										          <td><input type="text" name ="so_hiep[]" class="form-control"></td>
							       </tr>
				          </table>
				            
				            <button type="submit" class="btn btn-primary btn-sm">Sửa  </button>		  		
				          </form> 
				          			
		      	</div>
   		</div>
   </div> 
</div>     
 <div class="clearfix"></div>
     
 @endsection