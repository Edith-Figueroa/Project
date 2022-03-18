const formulario = document.getElementById("formulario");
const input = document.querySelectorAll("#formulario input");

const expresiones = {
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  telefono: /^\d{8,14}$/, // 7 a 14 numeros.
  identidad: /^\d{8,14}$/, // 7 a 14 numeros.
  direccion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  cuentaBan: /^\d{8,14}$/, // 7 a 14 numeros.
};

const campos = {
  idenetidad: false,
  primerNombre: false,
  segundoNombre: false,
  primerApellido: false,
  segundoApellido: false,
  telefono: false,
  correo: false,
  cuentaBan: false,
};

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "Cedula":
      validarCampo(expresiones.identidad, e.target, "identidad");
      break;
    case "PrimerNombre":
      validarCampo(expresiones.nombre, e.target, "primerNombre");
      break;

    case "SegundoNombre":
      validarCampo(expresiones.nombre, e.target, "segundoNombre");
      break;

    case "PrimerApellido":
      validarCampo(expresiones.apellido, e.target, "primerApellido");
      break;

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
  }
};
const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    document
      .getElementById(`grupo__${campo}`)
      .classList.remove("formulario__grupo-incorrecto");
    document
      .getElementById(`grupo__${campo}`)
      .classList.add("formulario__grupo-correcto");
    document
      .querySelector(`#grupo__${campo} .formulario__input-error`)
      .classList.remove("formulario__input-error-activo");
    campos[campo] = true;
  } else {
    document
      .getElementById(`grupo__${campo}`)
      .classList.add("formulario__grupo-incorrecto");
    document
      .querySelector(`#grupo__${campo} .formulario__input-error`)
      .classList.add("formulario__input-error-activo");
    campos[campo] = false;
  }
};

input.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
});
