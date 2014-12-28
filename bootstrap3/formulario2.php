<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario Final</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
</head>
<body>
	
	<div class="container well">
		<div class="row">
			<div class="col-xs-12"><h2>Tu perfil de usuario</h2></div>
		</div>
		<br /><br />

		<form class="form-horizontal">

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Nombre de Usuario</label>

				<div class="col-sm-2">
					<input class="form-control" type="text" id="formGroup" value="Cesar" disabled>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Nombre</label>

				<div class="col-sm-4">
					<input class="form-control" type="text" id="formGroup" placeholder="Tu Nombre">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Apellidos</label>

				<div class="col-sm-4">
					<input class="form-control" type="text" id="formGroup" >
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup" id="icon">Telefono</label>

				<div class="input-group col-sm-3">
					<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span> </span>
					<input class="form-control" id="formGroup">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup" id="icon">Correo electronico</label>

				<div class="input-group col-sm-3">
					<span class="input-group-addon">@</span>
					<input class="form-control" type="text" id="formGroup">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Informacion bibliógrafica</label>

				<div class="col-sm-4">
					<textarea class="form-control" rows="4"></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Status</label>

				<div class="col-sm-4">
					<select class="form-control">
							<option>En Linea</option>
							<option>Ocupado</option>
							<option>Ausente</option>
							<option>Desocupado</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Alias</label>

				<div class="col-sm-4">
					<input class="form-control" type="text" id="formGroup" >
					<span class="help-block">Este nombre sera mostrado a los usuarios, ocultando el verdadero nombre.</span>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Cuenta</label>

				<div class="col-sm-4">
					<label class="radio-inline">
						<input type="radio" name="radioOptions" id="inlineRadio1" value="option1" checked> Activar					
					</label>

					<label class="radio-inline">
						<input type="radio" name="radioOptions" id="inlineRadio2" value="option2"> Desactivar					
					</label>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="formGroup">Mostrar información</label>

				<div class="col-sm-4">
					<label class="checkbox-inline">
						<input type="checkbox" id="chek1" value="option1" checked disabled> Nombre
					</label>

					<label class="checkbox-inline">
						<input type="checkbox" id="chek2" value="option2" > Biografía
					</label>

					<label class="checkbox-inline">
						<input type="checkbox" id="chek3" value="option3" > Teléfono
					</label>
				</div>
			</div>
			<br />

			<div class="form-group">
				<label class="col-sm-2 control-label" for="gormGroup"></label>
				<div class="col-sm-4">

					<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>

					<button type="<button" class="btn btn-danger btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
				</div>
			</div>

		</form>
	</div>

	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>