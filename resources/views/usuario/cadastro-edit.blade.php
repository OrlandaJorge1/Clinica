@extends('layouts.app')

@section('content')

@if( isset($errors) && count($errors) > 0)
<div class="alert alert-danger">
	@foreach($errors->all() as $errors)
		<p>{{$errors}}</p>
	@endforeach
</div>
@endif

				<!-- Identififcacao-->
				<div class="col-lg-4 contact_col">
						<div class="info_form_container">

							
										<div class="info_form_title">Identificacao</div>
										<hr class="hr">
							<form action={{"cadastrados"}} class="info_form" id="info_form"method="POST">
									{!! csrf_field() !!}
									
												
									<div class="form-group">
											<label for="txt_nome">Nome (completo):</label>
											<input type="text" class="form-control" id="txt_nome" name="nome" value="{{ old('nome')}}" >
									</div>
									
									<div class="form-group">
											<label for="txt_nome">Nome da Mae:</label>
											<input type="text" class="form-control" id="txt_nome" name="nome_mae" value="{{ old('nome_mae')}}">
									</div>
	
									<div class="form-group">
											<label for="txt_nome">Nome do Pai:</label>
											<input type="text" class="form-control" id="txt_nome" name="nome_pai" value="{{ old('nome_pai')}}">
									</div>
	
									<div class="form-group">
										<label for="txt_nome">email:</label>
										<input type="email" class="form-control" id="txt_nome" name="email" value="{{ old('email')}}">
									</div>
									  
									<div class="form-group">
										<label for="txt_nome">contacto:</label>
										<input type="int" class="form-control" id="txt_nome" name="contacto" value="{{ old('contacto')}}" >
									</div>
									
									<div class="form-group">
											<label for="txt_nome">Residencia</label>
											<input type="text" class="form-control" id="txt_nome" name="residencia" value="{{ old('residencia')}}">
									</div>
									
								
								
		
									<div class="form-group">
											<label for="txt_nome">Sexo:</label><br>
											<input type="checkbox" name="sexo" value="M" value="{{ old('sexo')}}">M<br>
											<input type="checkbox" name="sexo" value="F" value="{{ old('sexo')}}">F<br>
									</div>
												

											</div>
										</div>
				<!-- Perinatal-->
					
				<div class="col-lg-4 contact_col">
					<div class="info_form_container">
				<div class="info_form_title">Perintal</div>
				<hr class="hr">
		
					
						<div class="form-group">
								<label for="txt_nome">Data:</label>
								<input type="date" class="form-control" id="txt_nome"name="data_nascimento" value="{{old('data_nascimento')}}">
						</div>
			
					
						<div class="form-group">
							<label for="txt_nome">Peso:</label>
							<input type="text" class="form-control" id="txt_nome" name="peso" value="{{old('peso')}}">
						</div>

						<div class="form-group">
								<label for="txt_nome">Password:</label>
								<input type="password" class="form-control" id="txt_nome" name="password" value="{{ old('password')}}">
						</div>
							
						<div class="form-group">
								<label for="txt_nome">Local de nascimento</label>
								<input type="text" class="form-control" id="txt_nome" name="local_nascimento" value="{{ old('local_nascimento')}}">
						</div>
						<div class="form-group">
								<label for="txt_nome">Doencas cronicas</label>
								<input type="text" class="form-control" id="txt_nome" name="Doencas_cronicas" value="{{old('Doencas_cronicas')}}">
						</div>
						<div class="form-group">
								<label for="txt_nome">Irmaos</label>
								<input type="text" class="form-control" id="txt_nome" name="irmaos" value="{{old('irmaos')}}">
						</div>
	
				</div>				  
			</div>
			
						
   
						
			
		<!-- Perinatal-->
		
		<!-- Complicacoes-->
		
		
					
					<button class="info_form_button" >Cadastrar</button>
	</form>

</div>
</div>


				
					
@endsection 