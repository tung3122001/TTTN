@extends('layouts.app')
@section('css')
<style>
  .Btn-4 {
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

.Btn-4:hover {
 filter: brightness(110%);
}

.Btn-4:hover .front {
 transform: translateY(-6px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.Btn-4:active .front {
 transform: translateY(-2px);
 transition: transform 34ms;
}

.Btn-4:hover .shadow {
 transform: translateY(4px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.Btn-4:active .shadow {
 transform: translateY(1px);
 transition: transform 34ms;
}

.Btn-4:focus:not(:focus-visible) {
 outline: none;
}
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thông tin mượn thiết bị</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('welcome')}}">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Nhân viên mượn thiết bị</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    {{-- <a href="{{route('getList')}}">Add</a> --}}
    <div style=" margin: 42px 0 -35px 0;">
      <a href="{{route('getAddMuon')}}">
        <button class="Btn-4" >
          <span class="shadow"></span>
          <span class="edge"></span>
          <span class="front text"> Thêm thông tin mượn thiết bị
          </span>
        </button> 
      </a>
      </div>
      <table id="thongtinmuon">
      <thead>
          <tr>
            <th>STT</th>
            <th>ID Thiết Bị</th>
            <th>ID Nhân Viên</th>
            <th>Ngày mượn</th>
            <th>Thông tin mô tả</th>
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
  <script src="{{asset('dist/js/muontb.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @endsection