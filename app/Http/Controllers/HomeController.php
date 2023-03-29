<?php

namespace App\Http\Controllers;
use App\Models\ThongTinModels;
use App\Models\NhanVienModels;
use App\Models\MuonModels;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        return view('welcome');
    }

    public function getList()
    {
        $thongtin = new ThongTinModels();
        $thongtinList = $thongtin->getAllThongTin();
        $dataRes = [
            'data' => $thongtinList,
            'error' => false,
            'message' => 'success'
        ];
        return response()->json($dataRes);
       
    }

    public function getListNhanVien()
    {
        $nhanvien = new NhanVienModels();
        $nhanvienList = $nhanvien->getAllNhanVien();
        $dataRes = [
            'data' => $nhanvienList,
            'error' => false,
            'message' => 'success'
        ];
        return response()->json($dataRes);
    }

   
}


