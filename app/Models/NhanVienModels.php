<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class NhanVienModels extends Model
{
    use HasFactory;

    //public $timestamps=false;
    
    protected $table = 'nhanvien';

    public function getAllNhanVien()
    {
        $nhanvien = DB::table($this->table)->get();
        return $nhanvien;
    }

    public function AddNhanVien($data)
    {

        return DB::insert('INSERT INTO nhanvien (tennhanvien, avata,  email, phone, diachi, manv, trangthainv) values (?, ?, ?, ? ,?, ?, ?)', $data);
    }

    public function getDetailNhanVien($id){
        return DB::table($this->table)->where('idnhanvien', [$id])->get();
    }

    public function postUpdateNhanVien($data){
        // dump($data);
        return DB::update("UPDATE $this->table SET  tennhanvien=?, avata=?, email=?, phone=?, diachi=?, manv=?, trangthainv=? where idnhanvien=?", $data);
    }

    public function DelNhanVien($id){
        return DB::delete("DELETE FROM $this->table where idnhanvien=?" ,[$id]);
    }
}

