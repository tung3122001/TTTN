@section('css')
<style>
  /* #InputName-error, #InputModel-error, #InputThongTinMoTa-error,
  #InputTrangThai-error{
    color : red;
  } */
  .error{
    color: red;
  }
  .main {
 display: flex;
 align-items: center;
 justify-content: center;
 height: 100vh;
}

.btn1 {
 width: 170px;
 height: 60px;
 font-size: 18px;
 background: #fff;
 border: none;
 border-radius: 50px;
 color: #000;
 outline: none;
 cursor: pointer;
 transition: all 0.4s;
}

.btn1:hover {
 box-shadow: inset 0 0 0 4px #ef476f, 
              inset 0 0 0 8px #ffd166, 
              inset 0 0 0 12px #06d6a0,
              inset 0 0 0 16px #118ab2;
 background: #073b4c;
 color: #fff;
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
            <h1 class="m-0">Nhập thông tin nhân viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('Empindex')}}">Thông tin nhân viên</a></li>
              <li class="breadcrumb-item active">Nhập thông tin nhân viên</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin nhân viên</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="{{route('postAddNhanVien')}}"class="form-horizontal" id="formnhanvien" enctype="multipart/form-data">
               
                <div class="card-body">
                  <div class="form-group">
                      <label for="InputTenNhanVien">Tên nhân viên</label>
                      <input type="text" name="tennhanvien" class="form-control" id="InputTenNhanVien" placeholder=""  required>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" placeholder=""  required>
                      </div>
                    <div class="form-group">
                        <label for="InputSDT">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" id="InputSDT" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="InputDiaChi">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" id="InputDiaChi" placeholder="" required>
                    </div>
                    <div class="form-group">
                      <label for="InputMaNV">Mã nhân viên</label>
                      <input type="text" name="manv" class="form-control" id="InputMaNV" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="TrangThaiNV">Trạng thái nhân viên</label>
                  <!-- Example single danger button -->
                  <select name="trangthainv" class="form-select" aria-label="Default select example" required>         
                    <option value="">Chọn trạng thái nhân viên</option>
                    <option value="Đang đi làm">Đang đi làm</option>
                    <option value="Đã nghỉ việc">Đã nghỉ việc</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="avata" class="custom-file-input" name="avatas[]" multiple id="InputAvata" placeholder="" >
                      <label class="custom-file-label" for="avata">Chọn hình ảnh</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn1 btn-info">Thêm</button>
                  <button type="button" class="btn1 btn-default float-right"><a href="{{route('Empindex')}}">Quay lại </a></button>    
                </div>
                @csrf
                <!-- /.card-footer -->
              </form>
            </div>
</div>
<!-- /.content-wrapper -->


@endsection
@section('js')
<script src="{{asset('dist/js/nhanvientb.js')}}"></script>
@endsection