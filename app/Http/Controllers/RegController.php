<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRegAccount;
use App\Modules\Reposetory\RegReposetory;
use App\Model\Employees;
use App\Modules\Adapter\AuthAdapter;
use Exception;



class RegController extends Controller
{
   
    protected $rep;

    private $adapter;

    public function __construct(Employees $items)
    {
        $this->rep = new RegReposetory($items);
        $this->adapter = new AuthAdapter($items);
    }
   
   
    public function  indexRegPages()
    {
       
        return view('reg');
        
    }

    public function reg(RequestRegAccount $request)
    {
        $items = $this->adapter->original($request->input('email'));

        if($items->isEmpty()){

        try {

        $account = $this->rep->reg([
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

            return redirect()->route('newaccount')->with('success', 'Регистрация прошла успешна!');   

        }catch(Exception $e){

            return redirect()->route('newaccount')->with('error', 'При регистрации возникла ошибка, попробуйте еще раз!' );
        }
    }else {
        return redirect()->route('newaccount')->with('error', 'Данный email уже зарегистрирован!' );
    }
      
   
    }
}
