<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('portfolio/index');
    }
    public function index1(): string
    {
        return view('portfolio/gallery');
    }

    // view page

    public function index2(): string
    {
        return view('portfolio/single1');
    }
    public function index6(): string
    {
        return view('portfolio/single2');
    }
    public function index7(): string
    {
        return view('portfolio/single3');
    }
    
    public function index8(): string
    {
        return view('portfolio/single4');
    }
    
    public function index9(): string
    {
        return view('portfolio/single5');
    }
    public function index10(): string
    {
        return view('portfolio/single6');
    }
//->>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<-//


    public function index3(): string
    {
        return view('portfolio/pricing');
    }
    
    public function index4(): string
    {
        return view('portfolio/about');
    }
    public function index5(): string
    {
        return view('portfolio/contact');
    }
 
}


