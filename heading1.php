    <?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
	?>
    <div class="row">
		<div class="col-md-10">
			<h2>Informacion Personal</h2>
			<form class="form-horizontal" action="">
			  <div class="col-md-6">
			    <label class="control-label" for="nombre">Nombre</label>
			    <div class="controls">
			      <input type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $row['firstname']." ".$row['lastname']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="genero">Genero</label>
			    <div class="controls">
			      <input type="text" id="genero" class="form-control" placeholder="Nombre" value="<?php echo $row['gender']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="direccion">Direccion</label>
			    <div class="controls">
			      <input type="text" id="direccion" class="form-control" placeholder="Nombre" value="<?php echo $row['address']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
			    <div class="controls">
			      <input type="date" id="fecha_nacimiento" class="form-control" placeholder="Nombre" value="<?php echo $row['birthdate']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="telefono_contacto">Telefono Contacto</label>
			    <div class="controls">
			      <input type="number" id="telefono_contacto" class="form-control" placeholder="Nombre" value=" <?php echo $row['mobile']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="estado">Estado</label>
			    <div class="controls">
			      <input type="text" id="estado" class="form-control" placeholder="Nombre" value="<?php echo $row['status']; ?>">
			    </div>
			  </div>
			 <div class="col-md-6">
			    <label class="control-label" for="ocupacion">Ocupacion</label>
			    <div class="controls">
			      <input type="number" id="ocupacion" class="form-control" placeholder="Nombre" value="<?php echo $row['work']; ?>">
			    </div>
			  </div>
			  <div class="col-md-6">
			    <label class="control-label" for="religion">Religion</label>
			    <div class="controls">
			      <input type="text" id="religion" class="form-control" placeholder="Nombre" value="<?php echo $row['religion']; ?>">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-md-offset-4 col-md-4">
			      <button type="submit" class="btn">Guardar</button>
			    </div>
			  </div>
			</form>
		</div>
    </div> 