@extends('frontend.layout')
@section('content')
<div class="clearfix"></div>
<div class="col-md-12 " style="margin-top:100px;margin-bottom: 10px;">
<div class="col-md-9 col-xs-offset-2">
    <button  class="btn btn-group" id="xem_tb">Xem kiểu table</button>
     <button  class="btn btn-group" id="xem_dt">Xem kiểu datetime</button>
      <button  class="btn btn-primary glyphicon-plus" data-toggle="modal" data-target="#myModal">Thêm ngày tập </button> 
        <a href="thembaitap">Thêm bài tập</a>
</div>
<div class="clearfix"></div>
    <div class="col-md-9 col-xs-offset-2" style="margin-top:5px;" id="table_ql">
        <div style="margin-bottom:5px;">
             
        </div>
        <div class="panel panel-primary">
        @if(isset($nguoidung))
            <div class="panel-heading">Lịch sử luyện tập của {{$nguoidung->name}}</div>
           
        @endif()
            <div class="panel-body">
            
                <table class="table table-bordered table-hover" id="table"> 
                
                    <tr>
                                <td style="width:100px;">Ngày</td>
                                <td style="width: 100px;">Chi tiết</td>
                                <td style="width:120px;">Manage</td>

                    </tr>
                    
                    @foreach($qlt_tl as $ql)
                    <tr>
                        <td style="display: none;" id="id_lich" >{{$ql->id}}</date-util></td>
                        <td id="ngay_start"><date-util  data-date-format="DD MMMM YYYY" >{{$ql->ngay}}</date-util></td>
                        <td id="hahah" id="chitiet">{{$ql->nhomco}}</td>            
                        <td style="text-align:center">
                                <a href="quanlibaitap/sua/{{$ql->id}}" data-toggle="modal_1" data-target="#myModal_1"><i class="glyphicon glyphicon-wrench"> Sửa</i></a>&nbsp;|&nbsp;
                             <a href="quanlibaitap/xoa/{{$ql->id}}" onclick="return window.confirm('Ban co muon xoa khong?');"> <i class=" glyphicon glyphicon-trash"> Xóa</i></a>&nbsp;|&nbsp;
                                 <a href="quanlibaitap/chitiet/{{$ql->id}}"><i class="glyphicon glyphicon-folder-open"> Chitiết</i></a>
                        </td>
                    <tr>
                  @endforeach() 
              </table>    
              
            </div>
        </div>
    </div>

    <div style="margin-top:5px;margin-bottom: 10px; border: 1px solid #dddddd" id="xemkieulich">
        <div>Lịch sử luyện tập</div>
        <div id="calendar"></div>
    </div>
	   
    </div>
  
<!-- form them -->
  @if(isset($nguoidung))
  <form action="themngaytap/{{$nguoidung->id}}" method="post" role="form">
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
     <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Thêm bài tập </h4>
            </div>
            <div class="modal-body">
                        <div>  
                          <span>Ngày</span>
                            <input  type="date"  data-date-format="DD MMMM YYYY" name="ngay" class="form-control"  required=""  >
                        <span>Chi tiết </span>
                             <input type="text" name="nhomco" class="form-control"  required="" placeholder=" bạn tập những gì ">
                        </div>
             <table class="table table-bordered table-hover" id="table1"> 
           
                      <tr>
                                  <td style="width:100px;">Tên bài tập </td>
                                  <td style="width: 100px;">khối lượng(kg)</td>
                                  <td style="width: 100px;">set </td> 
                                  <td style="width: 100px;">số reps </td> 
                             
                      </tr>
                    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <tr>
                              <td><input type="text" name="ten[]" class="form-control" placeholder="tenbaitap"></td>
                              <td><input type="number" name ="khoiluong[]" class="form-control" placeholder="khoiluong"></td>
                              <td><input type="number" name ="so_lan[]" class="form-control" placeholder="set"></td>
                              <td ><input type="number" name ="so_hiep[]" class="form-control" placeholder="reps"></td>
                            </tr>

                  </table>
                     <button type="button" id="btn_themcot" class="btn btn-primary glyphicon-plus"></button>
                      <button type="button" id="btn_xoacot" class="btn btn-primary glyphicon-minus"></button>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" >Thêm </button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
  </div>
</form>
  @endif() 
<!-- end form them -->



<!-- end -->
</div>

<div class="clearfix"></div>
<script type="text/javascript">
          $('#xemkieulich').hide();
           $('#xem_tb').hide();
          $('#xem_dt').click(function(event) {
            $('#table_ql').hide(2000);
             $('#xemkieulich').show(2000);
              $('#xem_dt').hide();
             $('#xem_tb').show();
                $('#formthem').hide(); 
          });

        $('#xem_tb').click(function(event) {
            $('#table_ql').show(2000);
            $('#xemkieulich').hide(2000);
            $('#xem_dt').show();
            $('#xem_tb').hide();
               $('#formthem').hide()

        });

        
  $(function() {
      var currentYear = new Date().getFullYear();
        //saveEvent();
  
	   $('#calendar').calendar({
         enableContextMenu: true,
      
             clickDay: function(e) { 
                 $('#formthem').show(); 
                 var i=e.date.toLocaleDateString();
            
                    $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: i
                });
                 
                
                 console.log(i);
                  $(e.element).popover('show');
                
                 $('#ngay').val(i);
            },

              dataSource: [
                {
                    id: 0,
                    name: 'Google I/O',
                    location: 'San Francisco, CA',
                    startDate: new Date(currentYear, 4, 28)
                   
                }  
                  ]
         });
     });  
</script>
 <script type="text/javascript">
            $('#btn_themcot').click(function() {      
               $('#table1').editableTableWidget();
               $('#table1').append('<tr><td><input type="text" name="ten[]" class="form-control"></td><td><input type="text" name ="khoiluong[]" class="form-control"></td><td><input type="text" name ="so_lan[]" class="form-control"></td><td id="keydown"><input type="text" name ="so_hiep[]" class="form-control"></td></tr>');
                });


               $('#btn_xoacot').click(function() {
                $('#table1').find("tr:nth-child(4)").each(function(){$(this).remove()});
              });
            
</script>     
@endsection