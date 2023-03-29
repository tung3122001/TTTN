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

.button {
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

.button:hover {
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
            <h1 class="m-0">Nhập thông tin thiết bị</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('Infindex')}}">Thông tin thiết bị</a></li>
              <li class="breadcrumb-item active">Nhập thông tin thiết bị</li>

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

              <form method="POST" action="{{route('postInf')}}"class="form-horizontal" id="formInf" >
               
                <div class="card-body">
                    <div class="form-group">
                      <label for="InputName">Tên Thiết Bị</label>
                      <input type="text" name="tenthietbi" class="form-control" id="InputName" placeholder=""  required>
                    </div>
                    <div class="form-group">
                        <label for="InputModel">Model</label>
                        <input type="text" name="model" class="form-control" id="InputModel" placeholder=""  required>
                      </div>
                    <div class="form-group">
                        <label for="InputThongTinMoTa">Thông tin mô tả</label>
                        <input type="text" name="thongtinmota" class="form-control" id="InputThongTinMoTa" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="InputTrangThai">Status</label>
                      <!-- Example single danger button -->
                      <select name="trangthai" class="form-select" aria-label="Default select example">
                        <option selected>Chọn trạng thái của máy</option>
                        <option value="Hoạt động bình thường">Hoạt động bình thường</option>
                        <option value="Bị hỏng">Bị hỏng</option>
                      </select>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  {{-- <button  typ e="submit" class="btn btn-info Button">Thêm</button> --}}
                  <button class="button btn-default float-left" type="submit">Thêm</button>
                  <button type="button" class="button btn-default float-right"><a href="{{route('Infindex')}}">Quay lại </a></button>    
                   
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