@extends('layouts.app')
@section('content')
@section('css')
<style>
  .Btn-3 {
 position: relative;
 border: none;
 background: transparent;
 padding: 0;
 cursor: pointer;
 outline-offset: 4px;
 transition: filter 250ms;
 user-select: none;
 touch-action: manipulation;
}

.shadow {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 border-radius: 12px;
 background: hsl(0deg 0% 0% / 0.25);
 will-change: transform;
 transform: translateY(2px);
 transition: transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

.edge {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 border-radius: 12px;
 background: linear-gradient(
    to left,
    hsl(340deg 100% 16%) 0%,
    hsl(340deg 100% 32%) 8%,
    hsl(340deg 100% 32%) 92%,
    hsl(340deg 100% 16%) 100%
  );
}

.front {
 display: block;
 position: relative;
 padding: 12px 27px;
 border-radius: 12px;
 font-size: 1.1rem;
 color: white;
 background: hsl(345deg 100% 47%);
 will-change: transform;
 transform: translateY(-4px);
 transition: transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

.Btn-3:hover {
 filter: brightness(110%);
}

.Btn-3:hover .front {
 transform: translateY(-6px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.Btn-3:active .front {
 transform: translateY(-2px);
 transition: transform 34ms;
}

.Btn-3:hover .shadow {
 transform: translateY(4px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.Btn-3:active .shadow {
 transform: translateY(1px);
 transition: transform 34ms;
}

.Btn-3:focus:not(:focus-visible) {
 outline: none;
}
</style>
@endsection
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thông tin nhân viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('welcome')}}">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Thông tin nhân viên</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <a href="{{route('getList')}}">Add</a> --}}
    <div style=" margin: 42px 0 -35px 0;">
      <a href="{{route('getAddNhanVien')}}">
      <button class="Btn-3" >
        <span class="shadow"></span>
        <span class="edge"></span>
        <span class="front text"> Thêm thông tin nhân viên
        </span>
      </button> 
    </a>
    </div>
    <table id="thongtinnhanvien">
      <thead>
          <tr>
            <th>STT</th>
            <th>Avata</th>
            <th>Tên Nhân Viên</th>
            <th>Email</th>
            <th>Số Điện Thoại</th>
            <th>Địa chỉ</th>
            <th>Mã nhân viên</th>
            <th>Trạng Thái</th>
            <th>Chỉnh Sửa</th>
          </tr>
      </thead>
      <tbody>
      </tbody>
  </table>
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('js')
  <script src="{{asset('dist/js/nhanvientb.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @endsection
