@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background:#f1f1f1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trang Chủ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" >
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Trang chủ</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content" style="background: #f1f1f1">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" style="background: #f1f1f1">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><span class="total_sinhvien">6</span></h3>
                <p>Chi tiết thiết bị</p>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="thongtin" class="small-box-footer">Chi tiết<i  class="fas fa-arrow-circle-right"></i></a>
            </div>
            <table class="listhome">
              <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Thiết Bị</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>3</h3>
                <p>Nhân Viên</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="nhanvien" class="small-box-footer">Chi tiết<i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <table class="listnhanvien">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Nhân Viên</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
          </div>
          <!-- ./col -->
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
  @section('js')
  <script src="{{asset('dist/js/home.js')}}"></script>
  {{-- <script src="{{asset('dist/js/nhanvien.js')}}"></script> --}}
  {{-- <script src="{{asset('dist/js/nhanvienmuon.js')}}"></script> --}}
  @endsection