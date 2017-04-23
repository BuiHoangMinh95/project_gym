@extends('admin.master')
@section('controller','BoMon')
@section('action','edit_bomon')
@section('content')

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
                                <input class="form-control" name="tenbomon"  value="{!! old('tenbomon',isset($loaibomon)? $loaibomon['tenbomon']:null)!!}"  />
                            </div>
                         
                            <button type="submit" class="btn btn-default">Sửa</button>
                        <form>
                    </div>
@endsection()            