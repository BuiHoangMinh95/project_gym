@extends('admin.master')
@section('controller','Giaoan')
@section('action','listgiaoan')
@section('content')

        <!-- Page Content -->
        
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT </th>
                                <th>Tên </th>
                                  <th>Hinh anh </th>
                                <th>Xóa </th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php
                            $stt = 0;
                          foreach($giaoan as $rows)
                            {
                                 $stt++;
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt;?></td>
                                   <td><?php echo $rows->ten;?></td>
                                   <td style="text-align:center">
                                     @if($rows->hinhanh != "")
                                        <img src="{{ url($rows->hinhanh) }}" style="width:50px;">
                                     @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="bomon/xoa/{{$rows->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="bomon/sua/{{$rows->id}}">Edit</a></td>
                            </tr>
                            
                        </tbody>  
                           <?php } ?>

                    </table>
    
                           {!! str_replace('/?', '?', $giaoan->render()) !!}
        <!-- /#page-wrapper -->
@endsection()