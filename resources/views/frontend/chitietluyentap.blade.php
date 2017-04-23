@extends('frontend.layout')
@section('content')
<div class="clearfix"></div>
<div class="col-md-9 col-xs-offset-1" style="margin-top:100px;">
	<div style="margin-bottom:5px;">
		<a href="{{ url('/admin/user/add') }}" class="btn btn-primary">Add</a>
		<a href="{{url('/quanliluyentap/add') }}" class="btn btn-primary">Thêm ngày tập  </a>
	</div>
	<div class="panel panel-primary">
	@if(isset($nguoidung))
		<div class="panel-heading">Lịch sử luyện tập của {{$nguoidung->name}}</div>
	@endif()
		<div class="panel-body">
			<table class="table table-bordered table-hover" id="table">	
			
				<tr>
							<td style="width:100px;">Tên bài tập </td>
							<td style="width: 100px;">khối lượng(kg)</td>
							<td style="width: 100px;">set </td>	
							<td style="width: 100px;">số reps </td>	
							<td style="width:120px;">Manage</td>
				</tr>
				@foreach($qlbaitap as $ql)
					<tr>
						<td style="text-align:center">{{$ql->ten}}</td>
						<td>{{$ql->khoiluong}}</td>
						<td style="width: 100px;">{{$ql->so_hiep}} </td>
						<td style="width: 100px;">{{$ql->so_lan}} </td>				
						<td style="text-align:center">
							<a href="suabaitap/{{$ql->id}}" id="table1">Edit</a>&nbsp;|&nbsp;
							<a href="" onclick="return window.confirm('Ban co muon xoa khong?');">Delete</a>
						
						</td>
					</tr>	 	
					@endforeach()
          				</table>
				
 				 
		</div>
	</div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
	$('#table').editableTableWidget();
	$('#btn_themcot').click(function() {
			$('#table').editableTableWidget();
		$('#table').append('<tr><td placeholder="Tên bài tập" name ="ten"></td><td name ="khoiluong" >Tên bài tập </td><td name="so_hiep">Tên bài tập </td><td name="so_lan">Tên bài tập </td></tr> ');
			$('#table').editableTableWidget();
	});
	$('#btn_xoacot').click(function() {
		$('#table').find("tr:nth-child(2)").each(function(){$(this).remove()});
	});
</script>
@endsection		
@endsection