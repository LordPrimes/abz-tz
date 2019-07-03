<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Adapter\EmployeesQuery;
use App\Model\Employees;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Exception;

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

    public function edit($id)
    {
       try { 

        $result = $this->items->items($id);

       $data = ['result' => $result];

       return view('edit')->with($data);

    }catch(Exception $e){

        return redirect()->route('admin')->with('error', 'при загрузке профиля возникла ошибка!');
    } 
      

         
    }

    public function update(UpdateRequest $request)
    {
        
 $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();

   $file = $request->file('image')->move(public_path('images'), $imageName);
    

        
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'salary' => $request->input('salary'),
            'photo' => $file
        ];
        
     $result = $this->items->update($request->input('id'), $data);




        // return redirect()->route('edit',['id' =>$request->input('id')]);
    }


}
