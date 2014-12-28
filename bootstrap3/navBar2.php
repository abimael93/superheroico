<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plantilla</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
</head>
<body>
	
	<div class="container">
		<div class="com-xs-10">
		    <!-- Para mini menus y no cambiar de paguina-->
		    <!--Tambien se puede utulizar
		    <ul class="nav nav-pills"> -->
			<ul class="nav nav-tabs">
				<li class="active"><a href="#home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-home"></span>&nbsp; Inicio</a></li>
				<li><a href="#profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>&nbsp; User</a></li>
				<li><a href="#message" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-envelope"></span>&nbsp; Mensajes</a></li>
				<li><a href="#settings" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>&nbsp; Configuración</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<br>
						Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding.
						Use rows to create horizontal groups of columns.
						Content should be placed within columns, and only columns may be immediate children of rows.
						Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.
						Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows.
						The negative margin is why the examples below are outdented.
				</div>

			    <div class="tab-pane fade" id="profile">
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
							<label class="col-sm-2 control-label" for="gormGroup"></label>
							<div class="col-sm-4">

								<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>

								<button type="<button" class="btn btn-danger btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
							</div>
						</div>

					</form>
					</div>
			    </div>

			    <div class="tab-pane fade" id="message">
			    	<br>
			    		<ul class="list-group">
			    			<li class="list-group-item">Perro</li>
			    			<li class="list-group-item">Pato</li>
			    			<li class="list-group-item">Gato</li>
			    			<li class="list-group-item">Raton</li>
			    			<li class="list-group-item">Zapo</li>
			    			
			    		</ul>
			    </div>
				
				<div class="tab-pane fade" id="settings">
			    	<br>
			    	<div class="panel panel-default">
			    		<div class="panel-heading">Panel de Configuracion</div>
			    			<div class="panel-body">
		    					zontal groups of columns.
								Content should be placed within columns, and only columns may be immediate children of rows.
								Predefined grid classes like .row and .col-xs-4 are available for quickly making grid layouts. Less mixins can also be used for more semantic layouts.
								Columns create gutters (gaps betw			    				
			    			</div>
		    			</div>
			    	</div>
			    
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>