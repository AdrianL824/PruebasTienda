<?php require 'views/includes/header.php' ?>

	<section class="page--content">
		<h1 class= "titulo-seccion" >Editar usuario</h1>
		<form action="" class="formulario" id="formulario" method="POST">
		
			<input type="hidden" name="id" value="<?=$user['id']?>">

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<div class="contval">
					<label for="nombre" class="formulario__label">Nombre/s</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" value="<?=$user['nombre']?>" placeholder="Ingrese nombres">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 30 carácteres alfabéticos</p>
			</div>

			<!-- Grupo: apellidos -->
			<div class="formulario__grupo" id="grupo__apellidos">
				<div class="contval">
					<label for="apellidos" class="formulario__label">Apellido/s</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" value="<?=$user['apellido']?>" placeholder="Ingrese apellidos">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 2 a 50 carácteres alfabéticos</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<div class="contval">
					<label for="correo" class="formulario__label">Correo electrónico</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" value="<?=$user['email']?>" placeholder="ejemplo@servidor.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Correo electrónico inválido</p>
			</div>

			<!-- Grupo: direccion -->
			<div class="formulario__grupo" id="grupo__direccion">
				<div class="contval">
					<label for="direccion" class="formulario__label">Dirección</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direccion" id="direccion" value="<?=$user['direccion']?>" placeholder="Ingrese dirección">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 5 a 100 carácteres alfanuméricos</p>
			</div>

			<!-- Grupo: tipoUsuario -->
			<div class="formulario__grupo" id="grupo__tipoUsuario">
				<div class="contval">
					<label for="tipoUsuario" class="formulario__label">Tipo de usuario</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<!-- <input type="text" class="formulario__input" name="tipoUsuario" id="tipoUsuario" placeholder="Seleccione tipo usuario"> -->
					<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
						<option value="<?=$user['tipo_usr']?>" selected><?=$user['tipo_usr']?></option>
						<option value="Vendedor">Vendedor</option>
						<option value="Almacenero">Almacenero</option>
						<option value="Gerente">Gerente</option>
					</select>
				</div>
				<p class="formulario__input-error">El usuario tiene tener un tipo de usuario.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<div class="contval">
					<label for="telefono" class="formulario__label">Número de teléfono</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" value="<?=$user['telefono']?>" placeholder="Ingrese número">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 7 a 8 carácteres numericos</p>
			</div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<div class="contval">
					<label for="password" class="formulario__label">Contraseña</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password" id="password" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 6 a 20 carácteres alfanuméricos</p>
			</div>
			
			<!-- Grupo: Ci -->
			<div class="formulario__grupo" id="grupo__ci">
				<div class="contval">
					<label for="ci" class="formulario__label">C.I.</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="ci" id="ci" value="<?=$user['ci']?>" placeholder="Ingrese ci">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ingrese 6 a 8 carácteres numéricos</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<div class="contval">
					<label for="password2" class="formulario__label">Confirmar contraseña</label>
					<p class="signo">*</p>
				</div>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" name="password2" id="password2" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Las contraseñas no coinciden</p>
				<div class="campo"><br><br><br>
					* Campo obligatorio
				</div>
			</div>
		
			
			<!--Botones en el formulario guardar y cancelar-->
			<div class="hero__texts">
				<a href="#" class="hero__cta">Guardar</a>
				<a href="#" class="hero__cta2">Cancelar</a>
			</div>
			


			<!--Seccion de Modales a mostrar-->
			<section class="modal ">
                <div class="modal__container">
                    <h2 class="modal__title">Actualizar usuario</h2>
                    <p class="modal__paragraph">¿Está seguro que desea actualizar los datos del usuario?</p>
                    <div class="a"></div>
                    <div class="modal_buttons">
                        <button class="modal__close">Si</button>
                        <button class="modal__close2">No</button>
                    </div>
                </div>
            </section>
        
            <section class="modal2 ">
                <div class="modal2__container">
                    <p class="modal2__paragraph">Cancelado</p>
                    <div class="close_modal">x</div>
                </div>
            </section>

            <section class="modal3 ">
                <div class="modal3__container">
                    <p class="modal3__paragraph">Usuario actualizado exitosamente</p>
                    <div class="close3_modal">x</div>
                </div>
            </section>

			<section class="modal4 ">
                <div class="modal4__container">
                    <p class="modal4__paragraph">Asegúrese de que todos los campos estén llenados correctamente</p>
                    <div class="close4_modal">x</div>
                </div>
            </section>

		</form>
	</section>

<?php require 'views/includes/footer.php' ?>