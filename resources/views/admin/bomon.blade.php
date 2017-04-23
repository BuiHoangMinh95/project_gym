
@extends('admin.master')
@section('controller','BoMon')
@section('action','listbomon')
@section('content')

        <!-- Page Content -->
        
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT </th>
                                <th>Tên </th>
                                <th>Xóa </th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php
                            $stt = 0;
                          foreach($loaibomon as $rows)
                            {
                                 $stt++;
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt;?></td>
                                   <td><?php echo $rows->tenbomon;?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="bomon/xoa/{{$rows->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="bomon/sua/{{$rows->id}}">Edit</a></td>
                            </tr>
                            
                        </tbody>  
                           <?php } ?>

                    </table>
    
                           {!! str_replace('/?', '?', $loaibomon->render()) !!}
        <!-- /#page-wrapper -->
@endsection()