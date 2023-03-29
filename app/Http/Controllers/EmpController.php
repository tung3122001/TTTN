<?php

namespace App\Http\Controllers;
use App\Models\NhanVienModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;

class EmpController extends Controller
{
    public function Empindex()
    {  
        return view('main.nv');
    }

    // public function save(Request $request)
    // {
    //     $avata = array();
    //     if($files = $request->file('images')){
    //         foreach ($files as $file){
    //             $avata_name = md5(rand(1000, 10000));
    //             $ext = strtolower($file->getAddNhanVien());
    //             $avata_full_name = $avata_name.'.'.$ext;
    //             // $upload_path='public/images/';
    //             $upload_path= URL::asset('/images');
    //             $avata_url= $upload_path.$avata_full_name;
    //             $file->move($upload_path, $avata_full_name);
    //             $images[] = $avata_url;

            
    //         }
    //         NhanVienModels::insert([
    //             'image' => implode('|', $avata),
    //             'title' => $request->title,
    //         ]);
    //         return back();
    //     }

    // }

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

    public function getAddNhanVien()
    {
        return view('getAdd.nhanvien');
    }
    
    public function postAddNhanVien(Request $request)
    {
        $nhanvien = new NhanVienModels();
        $avatar = $request->avata ? $request->avata : 'avatar.webp';
        $dataInsert = [
            $request->tennhanvien,
            // $request->avata,
            $avatar,
            $request->email,
            $request->phone,
            $request->diachi,
            $request->manv,
            $request->trangthainv
        ];
        $result = $nhanvien->AddNhanVien($dataInsert);
        return redirect(route('Empindex'));

    }

    public function editNhanVien($id=0){
        $nhanvien = new NhanVienModels();
        if(!empty($id)){
            $userDetailNhanVien = $nhanvien->getDetailNhanVien($id);
            if(!empty($userDetailNhanVien[0])){
                $userDetailNhanVien = $userDetailNhanVien[0];
            }
            else{
                return redirect()->route('Empindex');
            }
        }
        else{
           return redirect()->route(''); 
        }

        return view('edit.editNhanVien', compact('userDetailNhanVien'));

    }

    public function postNhanVien(Request $request, $id=0){
        $nhanvien = new NhanVienModels();
        $dataUpdate = [
            $request->tennhanvien,
            $request->email,
            $request->phone,
            $request->diachi,
            $request->manv,
            $request->trangthainv,
            $request->avata,
            $request->idnhanvien,
        ];
        $nhanvien->postUpdateNhanVien($dataUpdate);
        return redirect()->route('Empindex');
    }

    public function DelNhanVien($id=0){
        $nhanvien = new NhanVienModels();

        if(!empty($id)){
            if(!empty($userDetailNhanVien)){
                return  response()->json([
                    'message' => 'co data',
                    'error' => true
                ]);
            
             
             }else{
                $deleteNhanVien = $nhanvien->DelNhanVien($id);
                return  response()->json([
                'message' => 'kh data',
                'error' => false
               ]);
            }

       }  
        // console.log($id);
    }

};