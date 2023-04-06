const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
let RAIZ = 'http://localhost/Mi_tiendita';

const cleanInput = (formulario) => {
	const form_children = Array.from(formulario.querySelectorAll("input"));
	form_children.forEach((item) => {
		if(item.nodeName === 'INPUT'){
			item.value = '';
		}
	});
}


const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{2,30}$/, // Letras y espacios, pueden llevar acentos.
	apellidos: /^[a-zA-ZÀ-ÿ\s]{2,50}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	direccion:/^[a-zA-Z0-9.#\/\s]{5,100}$/, // Letras y espacios, pueden llevar acentos.
	telefono: /^\d{7,8}$/, // 7 a 8 numeros.
	ci: /^\d{6,8}$/, // 4 a 8 digitos.
	password: /^.{6,20}$/ // 4 a 12 digitos.
}

const campos = {
	nombre: false,
	apellidos: false,
	correo: false,
	direccion: false,
	telefono: false,
	ci: false,
	password: false
}

const validarFormulario = (e) => {
	console.log(e.target);
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellidos":
			validarCampo(expresiones.apellidos, e.target, 'apellidos');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "ci":
			validarCampo(expresiones.ci, e.target, 'ci');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value || inputPassword1.value === "" && inputPassword2.value == ""){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {

	if(location.href !== `${RAIZ}/user-register.php`){
		document.addEventListener("DOMContentLoaded", () => validarFormulario({target: input}));
	}

	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.nombre && campos.apellidos && campos.correo && campos.direccion && campos.telefono && campos.ci && campos.password && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});


//Eventos de mouse para controlar espacios correctos

let bandera2 = false;
const verificarcampo = document.querySelector('.hero__cta');
verificarcampo.addEventListener('click', (e) => {
	e.preventDefault();
	select = document.getElementById('tipoUsuario').value;
	val = false;
	if(select == ""){
		val = false;
	}else{
		val = true;
	}

	if(campos.nombre == true && campos.apellidos==true && campos.correo == true && campos.direccion == true && campos.telefono == true 
		&& campos.ci == true && campos.password == true && val == true){

		bandera2 = true;
		console.log(bandera2);
	}else{
		bandera2 = false;
		console.log(bandera2);
	}

	//Eventos de mouse para controlar cuando abrir y cerrar el modal
	if(bandera2 == true){
		
		const modal = document.querySelector('.modal');
		const openModal1 = document.querySelector('.modal__close');
		const closeModal2 = document.querySelector('.modal__close2');
	
			modal.classList.add('modal--show');
	
		openModal1.addEventListener('click', (e)=>{
			e.preventDefault();
			modal.classList.remove('modal--show');
			const modal3 = document.querySelector('.modal3');
			modal3.classList.add('modal3--show');
				const closeModal3 = document.querySelector('.close3_modal');
				closeModal3.addEventListener('click', (e)=>{
					e.preventDefault();
					modal3.classList.remove('modal3--show');
					formulario.submit();
				});
			
		});
	
		closeModal2.addEventListener('click', (e)=>{
			e.preventDefault();

			if(location.href === `${RAIZ}/user-register.php`){
				cleanInput(formulario);
			}

			modal.classList.remove('modal--show');
			const modal22 = document.querySelector('.modal2');
			modal22.classList.add('modal2--show');
			const closeModal22 = document.querySelector('.close2_modal');
			closeModal22.addEventListener('click', (e)=>{
				e.preventDefault();
				modal22.classList.remove('modal2--show');
			});
			
		});
		
	}else{
		/*Modal para avisar que llenen todos los campos*/
		const modalAdvertencia = document.querySelector('.modal4');
		const closeModalAdvertencia = document.querySelector('.close4_modal');

			modalAdvertencia.classList.add('modal4--show');

			closeModalAdvertencia.addEventListener('click', (e)=>{
				e.preventDefault();
				modalAdvertencia.classList.remove('modal4--show');
			});
	}
});

/*Cuando se presione el boton cancelar del formulario*/
const openModal2 = document.querySelector('.hero__cta2');
const modal2 = document.querySelector('.modal2');
const closeModal21 = document.querySelector('.close_modal');

openModal2.addEventListener('click', (e)=>{
	e.preventDefault();
	modal2.classList.add('modal2--show');

	if(location.href === `${RAIZ}/user-register.php`){
		cleanInput(formulario);
	}else{
		location.href = `${RAIZ}/users.php`
	}
});

closeModal21.addEventListener('click', (e)=>{
	e.preventDefault();
	modal2.classList.remove('modal2--show');
});