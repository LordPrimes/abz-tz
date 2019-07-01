<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegAccount;
use App\Modules\Reposetory\RegReposetory;
use App\Model\Employees;
use Exception;



class RegController extends Controller
{
   
    protected $rep;

    public function __construct(Employees $items)
    {
        $this->rep = new RegReposetory($items);
    }
   
   
    public function  indexRegPages()
    {
        return view('reg');
    }

    public function reg(RequestRegAccount $request)
    {
       try{
 
        $account = $this->rep->reg([
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);
   
        return $account;
       }
       catch(Exception $e)
       {
        echo 'ошибка';
       }
    }
}
