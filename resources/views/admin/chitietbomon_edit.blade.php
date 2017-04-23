@extends('admin.master')
@section('controller','ChitietBoMon')
@section('action','edit_ChiTietBoMon')
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
                                <label>loại bộ môn </label>
                                <select class="form-control" name="idmabomon">
                                @foreach($loaibomon as $rows)
                                    <option value="{{$rows->id}}">{{$rows->tenbomon}}</option>
                                @endforeach 
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tên </label>
                                <input class="form-control" name="ten" placeholder="Nhập tên bộ môn " value="{!! old('ten',isset($chitietbomon)? $chitietbomon['ten']:null)!!}" />
                            </div>
                             <div class="form-group">
                                <label>Tác giả </label>
                                <input class="form-control" name="tacgia" placeholder="Nhập tên tác giả " value="{!! old('tacgia',isset($chitietbomon)? $chitietbomon['tacgia']:null)!!}" />
                            </div>
                            <div class="form-group">
                                <label>Chi tiết </label>
                                <textarea name="chitiet" class="form-control" style="height:300px;" value="{!! old('chitiet',isset($chitietbomon)? $chitietbomon['chitiet']:null)!!}">   
                                </textarea>
                                    <script language="javascript">
                                    CKEDITOR.replace("chitiet");
                                    </script>
                            </div>
                             <div class="form-group">
                                <label>hình ảnh </label>
                                <input  type="file" name="hinhanh"  />
                            </div>
                             
                         
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
@endsection()            