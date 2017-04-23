
@extends('admin.master')
@section('content')
        <!-- Page Content -->
       
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Đăng Nhập</th>
                                 <th>email</th>
                                <th>Mật khẩu</th>
                                 <th>Chức danh</th>
                                <th>Xóa </th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php
                            $stt = 0;
                          foreach($arr as $rows)
                            {
                                 $stt++;
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt;?></td>
                                 <td><?php echo $rows->name;?></td>
                                <td><?php echo $rows->email;?></td>
                                <td><?php echo $rows->password;?></td>
                                <td>
                                <?php 
                                if($rows->level == 2){ echo "superadmin"; }
                                elseif($rows->level == 1){echo "admin ";}
                                else { echo "thành viên";}
                                    
                                ?>
                                    
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            
                        </tbody>
                            
                           <?php } ?>
                    </table>
                           {!! str_replace('/?', '?', $arr->render()) !!}
             
                <!-- /.row -->
           
@endsection()