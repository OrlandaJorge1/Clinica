@extends('layouts.app')

@section('content')

<table  class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Nome do Pai</th>
        <th>Nome da Mae</th>
        <th>Data de nascimento</th>
        <th>Sexo</th>
        <th>Residencia</th>
        <th>Doencas cronicas</th>
        <th>Local de nascimento</th>
        <th>Peso</th>
        <th>Email</th>
        <th>Contacto</th>
        <th width="100px">Acoes</th>
    </tr>


    @foreach($pacientes as $paciente)
    <tr>
        <td>{{$paciente->nome}}</td>
        <td>{{$paciente->nome_pai}}</td>
        <td>{{$paciente->nome_mae}}</td>
        <td>{{$paciente->data_nascimento}}</td>
        <td>{{$paciente->sexo}}</td>
        <td>{{$paciente->residencia}}</td>
        <td>{{$paciente->doencas_cronicas}}</td>
        <td>{{$paciente->local_nascimento}}</td>
        <td>{{$paciente->peso}}</td>
        <td>{{$paciente->email}}</td>
        <td>{{$paciente->contacto}}</td>
        <td>
           <a href="{{("cadastrados/$paciente->id/edit")}}" class="actions edit">
                <span class="glyphicon glyphicon-pencil"></span>
           </a>
           <a href="" class="actions delete">
                <span class="glyphicon glyphicon-trash"></span>
           </a>
           
        </td>
     
    </tr>
    @endforeach
</table>
@endsection