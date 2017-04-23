@extends('admin.master')
@section('controller','giaoan')
@section('action','add_giaoan')
@section('content')       
 <script language="javascript" src="{{ url('public/admin/ckeditor/ckeditor.js') }}"></script> 
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger" >
                             @foreach($errors->all() as $error)
                                <li>{!!$error !!}</li>
                             @endforeach
                        </div>
                       
                    @endif
                        <form action="" method="POST" enctype= "multipart/form-data">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label>Tên </label>
                                <input class="form-control" name="ten" placeholder="Nhập tên  " required=""  />
                            </div>
                             <div class="form-group">
                                <label>Tác giả </label>
                                <input class="form-control" name="tacgia" placeholder="Nhập tên tác giả " required=""  />
                            </div>
                            <div class="form-group">
                                <label>Chi tiết </label>
                                <textarea name="noidung" class="form-control" style="height:300px;" >
                                    
                                </textarea>
                                    <script language="javascript">
                                    CKEDITOR.replace("noidung");
                                    </script>
                                </div>
                             <div class="form-group">
                                <label>hình ảnh </label>
                                <input  type="file" name="hinhanh"  />
                            </div>
                             
                         
                            <button type="submit" class="btn btn-default">Thêm mới</button>
                        <form>
                    </div>
@endsection()            