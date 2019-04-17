<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Paciente;

class CadastroPacienteController extends Controller
{
    private $paciente;
    
        public function __construct(Paciente $paciente)
        {
            $this->paciente = $paciente;
        }

        public function index(){
            
             $pacientes = $this->paciente->all();
              return view ('usuario.cadastrados', compact('pacientes'));
         }

         public function store(Request $request){
            
            
            $pacientes = $this->paciente->all();
            //leva dados do formulario
            $dataForm = $request->except('_token');   
    
            //valida dados
            $this->validate($request, $this->paciente->rules);
           
    
            //Cadastra
            $insert = $this->paciente->insert($dataForm);
           
            if ($insert)
            return view ('usuario.cadastrados', compact('pacientes'));
            else
            return redirect ()->back();
         }

         public function edit($id){
            //Recupera paciente pelo id
            $paciente  = $this->paciente->find($id);    
            return view ('usuario.cadastro-edit', compact('paciente'));
            
        }
        public function update(Request $request, $id){
        }
    
         
        public function cadastro(){
            return view ('usuario.cadastro-edit');
         }
        
       
}
