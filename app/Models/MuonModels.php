<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class MuonModels extends Model
{
    use HasFactory;

    protected $table = 'muon';


//Ghép bảng
    public function getListMuon(){
        $muon = DB::table($this->table)
        ->leftJoin('thongtin', 'thongtin.id', '=' , 'muon.idthietbi')
        ->leftJoin('nhanvien','nhanvien.idnhanvien' , '=', 'muon.idnhanvien')
        ->select(
            $this->table.'.id',
            'thongtin.tenthietbi', 
            'nhanvien.tennhanvien',
            $this->table.'.ngaymuon', 
            $this->table.'.thongtinmota', 
            $this->table.'.trangthaimuon')
            ->get();
            return $muon;
    }
    public function joinby()
    {      
        $muon = DB::table('muon')
        ->join('thongtin', 'thongtin.id', '=', 'muon.idthietbi')
        ->join('nhanvien', 'nhanvien.idnhanvien', '=', 'muon.idnhanvien')
        ->select('thongtin.*', 'nhanvien.idnhanvien')
        ->get();
        return $muon;
    }

    public function AddMuon($data)
    {
        return DB::insert('INSERT INTO muon (idnhanvien, idthietbi, ngaymuon, thongtinmota, trangthaimuon) values (?, ?, ?, ?, ?)', $data);
    }

    public function getDetailMuon($id){
        return DB::table($this->table)->where('id', [$id])->get();
    }

    public function postMuon($data){
        return DB::update("UPDATE $this->table SET idnhanvien=?, idthietbi=?, ngaymuon=?, thongtinmota=?, trangthaimuon=? where id=?", $data);
    }

    public function delMuon($id){
        return DB::delete("DELETE FROM $this->table where id=?", [$id]);
    }

}