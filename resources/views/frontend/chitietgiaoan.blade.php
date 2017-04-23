@extends('frontend.layout')
@section('content')
<div class="clearfix"></div>
<div style="padding-top:5%;padding-left:5%;border: 1px ">
			<div  >
			<span><i>Tác giả :{{$giaoan->tacgia}}</i></span></br>
			<span><i>Bộ môn :{{$giaoan->ten}}</i></span>		
			</div>
        	<div>
				{!! $giaoan->noidung !!}
			</div>
</div>			
</div>
@endsection