<?php

namespace App\Models;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class McdModel extends Model
{
    protected $table      = 'pesanan_makanan';
    protected $allowedFields    = ['food','price','quantity'];

    public function getMcd($id = false)
    {
       if ($id == false){
     return $this->findAll();
       }
       return $this-> where(['id'=> $id])->first();
     }

    
}