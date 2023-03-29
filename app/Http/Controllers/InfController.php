<?php

namespace App\Http\Controllers;
use App\Models\ThongTinModels;
use Illuminate\Http\Request;
use DB;

class InfController extends Controller
{
    public function Infindex()
    {
        return view('main.inf');
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

    public function getAdd()
    {
        return view('getAdd.Inf');
    }
    public function postInf(Request $request)
    {
        $thongtin = new ThongTinModels();
        $dataInsert = [
            $request->tenthietbi,
            $request->model,
            $request->thongtinmota,
            $request->trangthai
        ];
        $result = $thongtin->AddThongTin($dataInsert);
        return redirect(route('Infindex'));
    }

    public function editThongTin($id=0){
        $thongtin = new ThongTinModels();
        if(!empty($id)){
            $userDetailThongTin = $thongtin->getDetailThongTin($id);
            if(!empty($userDetailThongTin[0])){
                $userDetailThongTin = $userDetailThongTin[0];
            }
            else{
                return redirect()->route('Infindex');
            }
        }
        else{
           return redirect()->route(''); 
        }

        return view('edit.editThongTin', compact('userDetailThongTin'));

    }

    public function postThongTin(Request $request, $id=0){
        $thongtin = new ThongTinModels();
        $dataUpdate = [
            $request->tenthietbi,
            $request->model,
            $request->thongtinmota,
            $request->trangthai,
            $request->id
        ];
        $thongtin->postUpdateThongTin($dataUpdate);
        return redirect()->route('Infindex');
    }

    public function DelThongTin($id=0){
        $thongtin = new ThongTinModels();
        $userDetailThongTin = $thongtin->getDetailThongTin($id);
        if(!empty($id)){
            if(!empty($userDetailThongTin)){
                return  response()->json([
                    'message' => 'co data',
                    'error' => true
                ]);
            }else{
                $deleteThongTin = $thongtin->DelThongTin($id);
                return  response()->json([
                    'message' => 'kh data',
                    'error' => false
                ]);
            }

        }
    }

};