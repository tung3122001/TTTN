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
            <h1 class="m-0">Sửa thông tin nhân viên mượn thiết bị</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('getListMuon')}}">Thông tin nhân viên mượn thiết bị</a></li>
              <li class="breadcrumb-item active">Nhập thông tin nhân viên mượn thiết bị</li>
              <li class="breadcrumb-item active">Sửa thông tin nhân viên mượn thiết bị</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Thông tin Nhân Viên mượn thiết bị</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="" class="form-horizontal" id="formmuon" >
               
                <div class="card-body">
                  <div class="form-group">
                    <label>ID Thiết Bị</label>
                      <br>
                      <select name="idthietbi" required> 
                      <option value="">ID Thiết Bị</option>
                      @foreach ($thongtinList as $key => $item)
                      <option value="{{$item->id}}">{{$item->tenthietbi}}</option>
                      @endforeach
                    </select>
                  </div>
                    <div class="form-group">
                      <label>ID Nhân Viên</label>
                      <br>
                      <select name="idnhanvien" required> 
                        <option value="">ID Nhân Viên</option>
                        @foreach ($nhanvienList as $key => $item)
                        <option value="{{$item->idnhanvien}}">{{$item->tennhanvien}}</option>
                        @endforeach
                      </select>
                      </div>
                    <div class="form-group">
                        <label for="NgayMuon">Ngày mượn</label>
                        <input type="date" name="NgayMuon" class="form-control" id="NgayMuon" placeholder="" value="{{old('ngaymuon')?? $userDetailMuon->ngaymuon}}" required>
                    </div>
                    <div class="form-group">
                        <label for="InputDiaChi">Thông tin mô tả</label>
                        <input type="text" name="thongtinmota" class="form-control" id="InputThongTinMoTa" placeholder="" value="{{old('thongtinmota')?? $userDetailMuon->thongtinmota}}" required>
                    </div>
                    <div class="form-group">
                      <label for="TrangThaiMuon">Trạng thái mượn thiết bị</label>
                    <!-- Example single danger button -->
                      <select name="TrangThaiMuon" class="form-select" aria-label="Default select example" value="{{old('trangthaimuon')?? $userDetailMuon->trangthaimuon}}" required>         
                        <option value="">Chọn trạng thái mượn thiết bị</option>
                        <option value="Đang mượn">Đang mượn</option>
                        <option value="Đã trả">Đã trả</option>
                      </select>
                    </div>
                      {{-- <input type="text" name="trangthai" class="form-control" id="InputTrangThai" placeholder="" value="{{old('trangthai')?? $userDetailThongTin->trangthai}}" required> --}}
                  </div>

                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                    <button type="button" class="btn btn-default float-right"><a href="{{route('getListMuon')}}">Quay lại </a></button>    
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
<script src="{{asset('dist/js/muon.js')}}"></script>
@endsection