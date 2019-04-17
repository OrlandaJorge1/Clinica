@extends('layouts.app')

@section('content')

<h1></h1>

<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <th>Contacto</th>
       
        <th>Tipo de usuario</th>
        <th>Password</th>
        <th>Acao</th>

    </tr>
@foreach($recepcaos as $recepcao)

    <tr>
        <td>{{$recepcao->nome}}</td>
        <td>{{$recepcao->contacto}}</td>
        <td>{{$recepcao->tipo_usuario}}</td>
        <td>{{$recepcao->password}}</td>
       
        <td>
        <a href="" class="actions edit">
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
