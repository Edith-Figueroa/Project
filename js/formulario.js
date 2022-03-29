const formulario = document.getElementById("formulario"); //Accedemos al formulario
const input = document.querySelectorAll("#formulario input"); //Almacenamos los inputs en una variable

const expresiones = {
  nombre: /^[a-zA-ZÀ-ÿ\s]{3,10}$/,
  apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  telefono: /^\d{8,8}$/, //
  identidad: /^\d{13,13}$/,
  direccion: /^[a-zA-ZÀ-ÿ0-9\s.,#-]{1,50}$/,
  cuentaBan: /^\d{8,15}$/,
  DescripcionCargo: /^[a-zA-ZÀ-ÿ\s.,#]{1,40}$/,
  Salario: /^\d+$/,
  DescripcionCiudad: /^[a-zA-ZÀ-ÿ\s.,#]{1,40}$/,
  DescripcionDepto: /^[a-zA-ZÀ-ÿ\s.,#]{1,40}$/,
};

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "Cedula":
      validarCampo(expresiones.identidad, e.target, "identidad");
      break;
    case "PrimerNombre":
      validarCampo(expresiones.nombre, e.target, "primerNombre");
      break;

    case "PrimerApellido":
      validarCampo(expresiones.apellido, e.target, "primerApellido");
      break;
      y;
    case "SegundoApellido":
      validarCampo(expresiones.apellido, e.target, "segundoApellido");
      break;

    case "Correo":
      validarCampo(expresiones.correo, e.target, "correo");
      break;

    case "Telefono":
      validarCampo(expresiones.telefono, e.target, "telefono");
      break;

    case "Direccion":
      validarCampo(expresiones.direccion, e.target, "direccion");
      break;

    case "CuentaBancaria":
      validarCampo(expresiones.cuentaBan, e.target, "cuentaBan");
      break;

    case "DescripcionCargo":
      validarCampo(expresiones.DescripcionCargo, e.target, "DescripcionCargo");
      break;

    case "Salario":
      validarCampo(expresiones.Salario, e.target, "Salario");
      break;

    case "DescripcionCiudad":
      validarCampo(
        expresiones.DescripcionCiudad,
        e.target,
        "DescripcionCiudad"
      );
      break;

    case "DescripcionDepto":
      validarCampo(expresiones.DescripcionDepto, e.target, "DescripcionDepto");
      break;
  }
};
const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    document
      .getElementById(`grupo__${campo}`)
      .classList.remove("formulario__grupo-incorrecto");
  } else {
    document
      .getElementById(`grupo__${campo}`)
      .classList.add("formulario__grupo-incorrecto");
    document
      .querySelector(`#grupo__${campo} .formulario__input-error`)
      .classList.add("formulario__input-error-activo");
  }
};

input.forEach((input) => {
  input.addEventListener("keyup", validarFormulario); //Valida cada tecla apretada
  input.addEventListener("blur", validarFormulario);
});

function soloLetras(e) {
  let key = e.keyCode || e.wich;
  let teclado = String.fromCharCode(key).toUpperCase();
  let letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ ÁÉÍÓÚ";
  let especiales = [8, 37, 38, 46, 164];
  let teclado_especial = false;
  for (let i in especiales) {
    if (key == especiales[i]) {
      teclado_especial = true;
      break;
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
      return false;
    }
  }
}

function soloLetrasYespeciales(e) {
  let key = e.keyCode || e.wich;
  let teclado = String.fromCharCode(key).toUpperCase();
  let letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ ÁÉÍÓÚ.#,- 1234567890";
  let especiales = [8, 37, 38, 46, 164];
  let teclado_especial = false;
  for (let i in especiales) {
    if (key == especiales[i]) {
      teclado_especial = true;
      break;
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
      return false;
    }
  }
}

function soloNumeros(e) {
  let key = e.keyCode || e.wich;
  let teclado = String.fromCharCode(key).toUpperCase();
  let letras = "1234567890";
  let especiales = [8, 37, 38, 46, 164];
  let teclado_especial = false;
  for (let i in especiales) {
    if (key == especiales[i]) {
      teclado_especial = true;
      break;
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
      return false;
    }
  }
}
