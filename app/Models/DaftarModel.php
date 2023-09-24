<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table      = 'daftar_makanan';
    protected $allowedFields    = ['food','price'];

    public function getDaftar($i = false)
    {
       if ($i == false){
     return $this->findAll();
       }
       return $this-> where(['id'=> $i])->first();
     }

    
}