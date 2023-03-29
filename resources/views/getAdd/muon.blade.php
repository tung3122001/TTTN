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

.btn2 {
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

.btn2:hover {
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
            <h1 class="m-0">Nhập thông tin nhân viên mượn thiết bị</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('getListMuon')}}">Thông tin nhân viên mượn thiết bị</a></li>
              <li class="breadcrumb-item active">Nhập thông tin nhân viên mượn thiết bị</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin nhân viên mượn thiết bị</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="{{route('postAddMuon')}}"class="form-horizontal" id="formmuon" enctype="images/">
               
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Thiết Bị</label>
                      <br>
                      <select name="idthietbi" required> 
                      <option value="">Thiết Bị</option>
                      @foreach ($thongtinList as $key => $item)
                      <option value="{{$item->id}}">{{$item->tenthietbi}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>ID Nhân Viên</label>
                    <br>
                    <select name="idnhanvien" required> 
                      <option value="">Nhân Viên</option>
                      @foreach ($nhanvienList as $key => $item)
                      <option value="{{$item->idnhanvien}}">{{$item->tennhanvien}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="NgayMuon">Ngày mượn</label>
                      <input type="date" name="NgayMuon" class="form-control" id="NgayMuon" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="InputThongTinMoTa">Thông tin mô tả</label>
                    <input type="text" name="thongtinmota" class="form-control" id="InputThongTinMoTa" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="TrangThaiMuon">Trạng thái mượn thiết bị</label>
                  <!-- Example single danger button -->
                    <select name="TrangThaiMuon" class="form-select" aria-label="Default select example" required>         
                      <option value="">Chọn trạng thái mượn thiết bị</option>
                      <option value="Đang mượn">Đang mượn</option>
                      <option value="Đã trả">Đã trả</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn2 btn-info">Thêm</button>
                    <button type="button" class="btn2 btn-default float-right"><a href="{{route('getListMuon')}}">Quay lại </a></button>    
                  </div>
                @csrf
                <!-- /.card-footer -->
              </form>
            </div>
</div>
<!-- /.content-wrapper -->


@endsection
@section('js')
<script src="{{asset('dist/js/muontb.js')}}"></script>
@endsection