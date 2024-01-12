// La función validarNumero tiene como objetivo validar la entrada de un número en un campo de formulario.
function validarNumero(input) {
    // Se define una expresión regular que busca cualquier caracter que no sea un número (0-9) o un punto decimal.
    var regex = /[^0-9.]/g;

    // Se aplica la expresión regular para reemplazar cualquier caracter no permitido con una cadena vacía.
    input.value = input.value.replace(regex, '');
}
