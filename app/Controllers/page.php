<?php

namespace App\Controllers;
use App\Models\McdModel;
use CodeIgniter\RESTful\ResourcePresenter;

class page extends BaseController
{
    
    public function index()
    {
        return view('/layout/template');
    }
//modelnya buy 
    protected $McdModel ='App\Models\McdModel' ;

    public function __construct()
    {
        $this-> McdModel = new McdModel();
    }
     public function index1()
    {
        $mcd= $this-> McdModel->findAll();

        $data = [
        'title' => 'daftar makanan',
        'mcd'=>$mcd
        ];
       echo view('page_buy/buy', $data);
    }

    public function create ()
    {
        $data = [
            'title' => 'pesanan makanan',
            ];
           echo view('/page_buy/create', $data);
    }
    
    public function save ()
    {
        $this->McdModel->save([
            'food'=>$this->request->getVar('food'),
            'price'=>$this->request->getVar('price'),
            'quantity'=>$this->request->getVar('quantity'),

        ]);
        return redirect()->to('/page/index1');
    }
      //delete
    public function delete($id)
    {
        $this->McdModel->delete($id);
        return redirect()->to('/page/index1');
    }

    //update
    public function edit($id)
    {
        $data = [
            'title' => 'edit',
            'mcd'=> $this-> McdModel->getMcd ($id)

            ];
       
           return view('update/edit',$data);

    }
    public function update($id)
    {
        $this->McdModel->save([
            'id'=> $id,
            'food'=> $this->request->getVar('food'),
            'price'=> $this->request->getVar('price'),
            'quantity'=> $this->request->getVar('quantity'),

        ]);
        return redirect()->to('/page/index1');

    }


///////////////
    public function index2()
    {
        echo view('page_buy/buy1');
    }
    public function index3()
    {
        echo view('page_buy/buy2');
    }
    public function index4()
    {
        echo view('page_buy/buy3');
    }
    public function index5()
    {
        echo view('page_buy/buy4');
    }
    public function index6()
    {
        echo view('page_buy/buy5');
    }
    public function index7()
    {
        echo view('page_buy/buy6');
    }
    public function index8()
    {
        echo view('page_buy/buy7');
    }
}
