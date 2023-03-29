<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class ThongTinModels extends Model
{
    use HasFactory;
    protected $table = 'thongtin';

    public function getAllThongTin()
    {
        $thongtin = DB::table($this->table)->get();
        return $thongtin;
    }

    public function AddThongTin($data)
    {

        return DB::insert('INSERT INTO thongtin (tenthietbi, model, thongtinmota, trangthai ) values (?, ?, ?, ?)', $data );
    }

    public function getDetailThongTin($id){
        return DB::table($this->table)->where('id', [$id])->get();
    }

    public function postUpdateThongTin($data){
        return DB::update("UPDATE $this->table SET tenthietbi=?, model=?, thongtinmota=?, trangthai=? where id=?", $data);
    }

    public function DelThongTin($id){
        return DB::delete("DELETE FROM $this->table where id=?" ,[$id]);
    }
}

