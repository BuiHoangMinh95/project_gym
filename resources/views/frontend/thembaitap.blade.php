@extends('frontend.layout')
@section('content')
<div class="clearfix"></div>
<div class="col-md-12 " style="margin-top:100px;margin-bottom: 10px;">
<div class="col-md-9 col-xs-offset-2">

   
</div>
<div class="clearfix"></div>
    <div class="col-md-9 col-xs-offset-2" style="margin-top:5px;" >
       
        <div class="panel panel-primary">
        @if(isset($nguoidung))
            <div class="panel-heading">Lịch sử luyện tập của{{$nguoidung->name}}</div>
           
        @endif()
		            <div class="panel-body">
				   		 <form method="post" action="">
				         <table class="table table-bordered table-hover" id="table1"> 
						 <div>
				                   <span>Ngày</span>
				                    <input  type="date"  data-date-format="DD MMMM YYYY" name="ngay" class="form-control"  required="">
				                </div>
				                <div>
				                <span>Tên</span>
				                     <input type="text" name="nhomco" class="form-control"  required="">
				                </div>
						          <tr>
						                      <td style="width:100px;">Tên bài tập </td>
						                      <td style="width: 100px;">khối lượng(kg)</td>
						                      <td style="width: 100px;">set </td> 
						                      <td style="width: 100px;">số reps </td> 
						                 
						          </tr>
						        
						        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
									          <tr>
										          <td><input type="text" name="ten[]" class="form-control"></td>
										          <td><input type="text" name ="khoiluong[]" class="form-control"></td>
										          <td><input type="text" name ="so_lan[]" class="form-control"></td>
										          <td><input type="text" name ="so_hiep[]" class="form-control"></td>
							          		</tr>

				          </table>
				             <button type="button" id="btn_themcot" class="btn btn-primary">Thêm cột</button>
				            <button type="submit" class="btn btn-primary btn-sm">Thêm  </button>		  		
				          </form> 
				          			
		      	</div>
   		</div>
   </div> 
</div>     
 <div class="clearfix"></div>
    <script type="text/javascript">
         		$('#btn_themcot').click(function() {      
               $('#table1').editableTableWidget();
               $('#table1').append('<tr><td><input type="text" name="ten[]" class="form-control"></td><td><input type="text" name ="khoiluong[]" class="form-control"></td><td><input type="text" name ="so_lan[]" class="form-control"></td><td><input type="text" name ="so_hiep[]" class="form-control"></td></tr>');
                $('#table1').editableTableWidget();
                $('#btn_xoacot').click(function() {
				$('#table').find("tr:nth-child(2)").each(function(){$(this).remove()});
					});
     		 });

         </script>          
 @endsection