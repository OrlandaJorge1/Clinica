<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcao;

class RecepController extends Controller
{
   private $Recepcao;
   
   public function __construct(Recepcao $recepcao){
        $this->recepcao = $recepcao;

   }
   
     public function index(Recepcao $recepcao)
        {
            $recepcaos = $recepcao->all();
            return view ('funcionarios.cadastrados', compact('recepcaos'));
        }

 
      
         public function create(Request $request)
         {
             $dataForm = $request->all();

             return view ('funcionarios.cadastro',compact('recepcaos'));
         }

         public function store(Request $request)
         {
           $dataForm = $request->except('_token'); 
          $insert = $this->recepcao->insert($dataForm);
          if ($insert)
          return view ('funcionarios.cadastro',compact('recepcaos'));
          else
          return redirect ()->back();

            
         }
         public function inicio()
         {
           

             return view ('index');
         }

}

