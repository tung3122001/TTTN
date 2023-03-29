<?php

namespace App\Http\Controllers;
use App\Models\ThongTinModels;
use App\Models\NhanVienModels;
use App\Models\MuonModels;
use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;

class BorController extends Controller
{
    public function getListMuon(){
        return view('main.borrow');
    }


    public function getAddMuon(){
        $nhanvien = new NhanVienModels();
        $thongtin = new ThongTinModels();
        $muon = new MuonModels();
        $nhanvienList = $nhanvien->getAllNhanVien();
        $thongtinList = $thongtin->getAllThongTin();
        $muonList = $muon->getListMuon();
        $muonListId = $muon->joinby();
        return view('getAdd.muon' ,compact('thongtinList', 'nhanvienList', 'muonList', 'muonListId'));
    }

    public function getListMuonThietBi()
    {
        $muon = new MuonModels();
        $muonList = $muon->getListMuon();
     
        return response()->json(['data' => $muonList]);
    }
    public function postAddMuon(Request $request)
    {
        $muon = new MuonModels();
        $dataInsert = [
            $request->idnhanvien,
            $request->idthietbi,
            Carbon::parse($request->NgayMuon),
            $request->thongtinmota,
            $request->TrangThaiMuon
        ];
        //dd($dataInsert);
        $result = $muon->AddMuon($dataInsert);
          return redirect(route('getListMuon'));

    }

    public function editMuon($id=0){
        $muon = new MuonModels();
        $nhanvien = new NhanVienModels();
        $thongtin = new ThongTinModels();
        $nhanvienList = $nhanvien->getAllNhanVien();
        $thongtinList = $thongtin->getAllThongTin();
        $muonList = $muon->getListMuon();
        $muonListId = $muon->joinby();
        if(!empty($id)){
            $userDetailMuon = $muon->getDetailMuon($id);
            if(!empty($userDetailMuon[0])){
                $userDetailMuon = $userDetailMuon[0];
            }
            else{
                return redirect()->route('');
            }
        }

        return view('edit.editMuon' ,compact('thongtinList', 'nhanvienList', 'muonList', 'muonListId','userDetailMuon'));
    }

    public function postMuon(Request $request, $id=0){
        $muon = new MuonModels();
        // $nhanvien = new NhanVienModels();
        // $thongtin = new ThongTinModels();
        // $nhanvienList = $nhanvien->getAllNhanVien();
        // $thongtinList = $thongtin->getAllThongTin();
        // $muonList = $muon->getListMuon();
        // $muonListId = $muon->joinby();
        $dataUpdate = [
            $request->idnhanvien,
            $request->idthietbi,
            $request->NgayMuon,
            $request->thongtinmota,
            $request->TrangThaiMuon,
            $request->id,
        ];
        $muon->postMuon($dataUpdate);
        return redirect()->route('getListMuon');

    }

    public function delMuon($id=0){
        $muon = new MuonModels();
        if(!empty($id)){
            if(!empty($userDetailMuon)){
                return response()->json([
                    'message' => 'co data',
                    'error' => true
                ]);
            }else{
                $deleteMuon = $muon->delMuon($id);
                return response()->json([
                    'message' => 'kh data',
                    'error' => false
                ]);
            }
        }
    }
   
  
};

