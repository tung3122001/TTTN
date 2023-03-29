@section('css')
<style>
  /* #InputName-error, #InputModel-error, #InputThongTinMoTa-error,
  #InputTrangThai-error{
    color : red;
  } */
  .error{
    color: red;
  }
</style>
@endsection
@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sửa thông tin thiết bị</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('Infindex')}}">Thông tin thiết bị</a></li>
              <li class="breadcrumb-item active">Nhập thông tin thiết bị</li>
              <li class="breadcrumb-item active">Sửa thông tin thiết bị</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin thiết bị</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="" class="form-horizontal" id="formInf" >
                <div class="card-body">
                    <div class="form-group">
                      <label for="InputName">Tên Thiết Bị</label>
                      <input type="text" name="tenthietbi" class="form-control" id="InputName" placeholder="" value="{{old('tenthietbi')?? $userDetailThongTin->tenthietbi}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="InputModel">Model</label>
                        <input type="text" name="model" class="form-control" id="InputModel" placeholder="" value="{{old('model')?? $userDetailThongTin->model}}"  required>
                      </div>
                    <div class="form-group">
                        <label for="InputThongTinMoTa">Thông tin mô tả</label>
                        <input type="text" name="thongtinmota" class="form-control" id="InputThongTinMoTa" placeholder="" value="{{old('thongtinmota')?? $userDetailThongTin->thongtinmota}}" required>
                    </div>
                    <div class="form-group">
                        <label for="InputTrangThai">Status</label>
                        <select name="trangthai" class="form-select" aria-label="Default select example">
                          <option value="">Chọn trạng thái thiết bị</option>
                          <option value="Hoạt động bình thường">Hoạt động bình thường</option>
                          <option value="Bị hỏng">Bị hỏng</option>
                        </select>
                        {{-- <input type="text" name="trangthai" class="form-control" id="InputTrangThai" placeholder="" value="{{old('trangthai')?? $userDetailThongTin->trangthai}}" required> --}}
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default float-right"><a href="{{route('Infindex')}}">Quay lại </a></button>    
                </div>
                @csrf
                <!-- /.card-footer -->
              </form>
            </div>
</div>
<!-- /.content-wrapper -->

@endsection
@section('js')
<script src="{{asset('dist/js/jquery.validate.js')}}"></script>
<script src="{{asset('dist/js/thongtintb.js')}}"></script>
@endsection