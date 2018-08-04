@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor: {{ $persona->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>


	{!!Form::model($persona,['method'=>'PATCH','route'=>['proveedor.update',$persona->idpersona]])!!}
	{{Form::token()}}
	<div class="row">

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			   <div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" required value = "{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
			   </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
					 <label for="direccion">Dirección</label>
					 <input type="text" name="direccion" value = "{{$persona->direccion}}" class="form-control" placeholder="Descripción...">
					</div>
				 </div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label >Documento</label>
					<select name="tipo_documento" class="form-control">
						@if($persona->tipo_documento=='Cedula')
						<option value="Cedula" selected>Cedula</option>
						<option value="Rif">Rif</option>
						<option value="Pasaporte">Pasaporte</option>
						@elseif($persona->tipo_documento=='Rif')
						<option value="Cedula" >Cedula</option>
						<option value="Rif" selected>Rif</option>
						<option value="Pasaporte">Pasaporte</option>
						@else
						<option value="Cedula" >Cedula</option>
						<option value="Rif">Rif</option>
						<option value="Pasaporte" selected>Pasaporte</option>
						@endif
					</select>
	
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
						<label for="num_documento">Número documento</label>
						<input type="text" name="num_documento"  value ="{{$persona->num_documento}}" class="form-control" placeholder="Número de documento...">
					</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="telefono">Teléfono</label>
					<input type="text" name="telefono" required value ="{{$persona->telefono}}" class="form-control" placeholder="Teléfono...">
				</div>
	
			 </div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email"  value = "{{$persona->email}}" class="form-control" placeholder="Email...">
				</div>
	
			</div>
		
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
	
			</div>
	
		</div>

	{!!Form::close()!!}		
            
	
@endsection