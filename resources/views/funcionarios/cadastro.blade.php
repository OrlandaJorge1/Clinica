@extends('layouts.app')

@section('content')



<div class="col-lg-4 contact_col">
<div class="info_form_container">
<div class="info_form_title">Cadastro de Funcionarios</div>
<hr class="hr">

<form action="{{'/funcionarioscadastrados'}}" class="info_form" id="info_form" method="POST">
	{!! csrf_field() !!}
    <div class="form-group">
            <label for="txt_nome">Nome(completo)</label>
            <input type="text" class="form-control" id="txt_nome" name="nome" >
    </div>

        <div class="form-group">
            <label for="txt_nome">Contacto</label>
            <input type="int" class="form-control" id="txt_nome" name="contacto">
    </div>

    <div class="form-group">
            <label for="txt_nome">Tipo de usuario</label>
            
            <select   id="padraoLabel2" name="tipo_usuario" class="form-control" width="50px">
                <option>Selecione o tipo de usuario</option>
                <option value="Medico">Medico</option>
                <option value="Enfermeiro">Enfermeiro</option>
                <option value="Recepcao">Recepcao</option>
               
            </select>
            
          
    </div>

    <div class="form-group">
        <label for="txt_nome">Password</label>
        <input type="password" class="form-control" id="txt_nome" name="password">
</div>


</div>				  
</div>






<button class="info_form_button" >Cadastrar</button>
</form>



@endsection
