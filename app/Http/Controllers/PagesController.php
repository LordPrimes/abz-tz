<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;


class PagesController extends AdminController 
{
    public function index()
    {
        return view('index');
    }

     public function adminpages(){

     }
}
