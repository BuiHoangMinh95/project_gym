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
				                   @foreach($baitap as $bt)
				                <tr>
										          <td><input type="text" name="ten[]" class="form-control" value="{{$bt->ten}}"></td>
										          <td><input type="text" name ="khoiluong[]" class="form-control" value="{{$bt->khoiluong}}"></td>
										          <td><input type="text" name ="so_lan[]" class="form-control" value="{{$bt->so_lan}}"></td>
										          <td><input type="text" name ="so_hiep[]" class="form-control" value="{{$bt->so_hiep}}"></td>
							       </tr>
								@endforeach()
				          </table>
				            <button type="submit" class="btn btn-primary btn-sm">Sửa </button>	
				            <button type="button"  id="btn_themcot" class="btn btn-primary btn-sm">thêm  </button>	
				            <button type="button" id="btn_xoacot" class="btn btn-primary btn-sm">xóa  </button>		  		
				          </form> 
				          			
		      	</div>
   		</div>
   </div> 
</div>     
 <div class="clearfix"></div>
    <script type="text/javascript">
    	$('#btn_themcot').click(function() {
			$('#table1').editableTableWidget();
		 $('#table1').append('<tr><td><input type="text" name="ten[]" class="form-control"></td><td><input type="text" name ="khoiluong[]" class="form-control"></td><td><input type="text" name ="so_lan[]" class="form-control"></td><td id="keydown"><input type="text" name ="so_hiep[]" class="form-control"></td></tr>');
	});
	$('#btn_xoacot').click(function() {
		$('#table1').find("tr:nth-child(2)").each(function(){$(this).remove()});
	});

    </script>
 @endsection