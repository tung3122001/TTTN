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
            <h1 class="m-0">Sửa thông tin nhân viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('Empindex')}}">Thông tin nhân viên</a></li>
              <li class="breadcrumb-item active">Nhập thông tin nhân viên</li>
              <li class="breadcrumb-item active">Sửa thông tin nhân viên</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin Nhân Viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="" class="form-horizontal" id="formnhanvien" >
                <div class="card-body">
                    <div class="form-group">
                      <label for="InputTenNhanVien">Tên Nhân Viên</label>
                      <input type="text" name="tennhanvien" class="form-control" id="InputTenNhanVien" placeholder="" value="{{old('tennhanvien')?? $userDetailNhanVien->tennhanvien}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" placeholder="" value="{{old('email')?? $userDetailNhanVien->email}}"  required>
                      </div>
                    <div class="form-group">
                        <label for="InputSDT">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" id="InputSDT" placeholder="" value="{{old('phone')?? $userDetailNhanVien->phone}}" required>
                    </div>
                    <div class="form-group">
                        <label for="InputDiaChi">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" id="InputDiaChi" placeholder="" value="{{old('diachi')?? $userDetailNhanVien->diachi}}" required>
                    </div>
                    <div class="form-group">
                        <label for="InputMaNV">Mã Nhân Viên</label>
                        <input type="text" name="manv" class="form-control" id="InputMaNV" placeholder="" value="{{old('manv')?? $userDetailNhanVien->manv}}" required>
                    </div>
                    <div class="form-group">
                      <label for="InputTrangThai">Status</label>
                      <select name="trangthainv" class="form-select" aria-label="Default select example" required>
                        <option value="">Chọn trạng thái nhân viên</option>
                        <option value="Đang đi làm">Đang đi làm</option>
                        <option value="Đã nghỉ việc">Đã nghỉ việc</option>
                      </select>
                      {{-- <input type="text" name="trangthai" class="form-control" id="InputTrangThai" placeholder="" value="{{old('trangthai')?? $userDetailThongTin->trangthai}}" required> --}}
                  </div>
                  <input type="text" name="idnhanvien" value="{{old('idnhanvien')?? $userDetailNhanVien->idnhanvien}}" hidden>
                  <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input type="file" name="avata" class="form-control" id="InputAvata" placeholder="" value="{{old('avata')?? $userDetailNhanVien->avata}}"  required>
                </div>

                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default float-right"><a href="{{route('Empindex')}}">Quay lại </a></button>    
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
<script src="{{asset('dist/js/nhanvientb.js')}}"></script>
@endsection