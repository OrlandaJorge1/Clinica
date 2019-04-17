<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = ['nome','nome_pai', 'nome_mae', 'data_nascimento', 
    'sexo', 'residencia', 'doencas_cronicas','irmaos','local_nascimento','email','password','peso','contacto'];
   
    public $rules = [
        "nome"                   => 'required|min:3|max:100',
        "nome_pai"               => 'required|min:3|max:100',
        "nome_mae"               => 'min:3|max:100',
        "data_nascimento"        => 'required',
        "sexo"                   => 'required',
        "residencia"             => 'required|min:3|max:100',
        "doencas_cronicas"       => 'min:3|max:100',
        "irmaos"                 => 'required',
        "local_nascimento"       => 'required|min:3|max:100',
        "email"                  => 'required|min:3|max:100',
        "password"               => 'required|min:3|max:100',
        "peso"                   => 'required|numeric',
        "contacto"               => 'required|numeric',
        
        
          ];
}
