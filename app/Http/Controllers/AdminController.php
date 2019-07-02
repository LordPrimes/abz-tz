<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Adapter\EmployeesQuery;
use App\Model\Employees;

 class AdminController extends Controller
{
    
    private $items;
    
    public function __construct(Employees $Employees)
    {
        $this->items = new EmployeesQuery($Employees);
    }

    public function adminpages(Request $request){


        $result = $request->input('find');
        if($result == []){
                try {

                $query = $this->items->all();

                $data = ['query' => $query];

                return view('admin')->with($data);
                }
                    catch(Exception $e){
                        return redirect()->route('admin')->with('error', 'в базе нету данных!');
                    }
        }else {
           
            try {
            
               $query = $this->items->find($result);
                if($query->isEmpty()){

                    return redirect()->route('admin')->with('error', 'В базе ничего нету!');
                }else {
                    $data = ['query' => $query]; 
                    return view('admin')->with($data);
                }
        
            }
            catch(Exception $e){
                return redirect()->route('admin')->with('error', 'Во время поиска произашла ошибка!Попробуйте еще раз!');
            }


           
        }
    
    }

  


}
