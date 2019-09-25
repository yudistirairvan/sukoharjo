<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mimin extends Model
{
    protected $table = 'mimins';
    protected $fillable = ['id','Nama','Email','Password','Ket'];
    
    
    public function saveDatavideo($data)
    {   
        $this->id = " ";
        $this->nama = $data['nama'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->ket =  "1";
        $this->save();
        return 1;
    }
}
