
@extends('admin.master')
@section('controller','ChiTietBoMon')
@section('action','list chi tiết bộ môn')
@section('content')

        <!-- Page Content -->
        
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT </th>
                                <th>Tên </th>
                                <th>Tác giả</th>
                                <th>Hình ảnh</th>
                                <th>Loại bộ môn </th>
                                <th>Xóa </th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php
                            $stt = 0;
                          foreach($chitietbomon as $rows)
                            {
                                 $stt++;
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt;?></td>
                                <td><?php echo $rows->ten;?></td>
                                <td><?php echo $rows->tacgia;?></td>
                               <td style="text-align:center">
                                     @if($rows->hinhanh != "")
                                        <img src="{{ url($rows->hinhanh) }}" style="width:50px;">
                                     @endif
                                </td>
                                <td>
                                      <?php
                                         $loaibomon = DB::table("tbl_loaibomon")->where('id','=',$rows->idmabomon)->first();
                                            echo $loaibomon->tenbomon;
                                        ?>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="chitietbomon/xoa/{{$rows->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="chitietbomon/sua/{{$rows->id}}">Edit</a></td>
                            </tr>
                            
                        </tbody>  
                           <?php } ?>

                    </table>
    
                           {!! str_replace('/?', '?', $chitietbomon->render()) !!}
        <!-- /#page-wrapper -->
@endsection()