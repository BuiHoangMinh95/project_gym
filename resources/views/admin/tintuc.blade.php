
@extends('admin.master')
@section('controller','Tin Tuc')
@section('action','list Tin tuc')
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
                                <th>Thể loại</th>
                                <th>Xóa </th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php
                            $stt = 0;
                          foreach($tintuc as $rows)
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
                                         $loaibomon = DB::table("tbl_theloaitintuc")->where('id','=',$rows->idtheloai)->first();
                                            echo $loaibomon->ten;
                                        ?>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="chitietbomon/xoa/{{$rows->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="chitietbomon/sua/{{$rows->id}}">Edit</a></td>
                            </tr>
                            
                        </tbody>  
                           <?php } ?>

                    </table>
    
                           {!! str_replace('/?', '?', $tintuc->render()) !!}
        <!-- /#page-wrapper -->
@endsection()