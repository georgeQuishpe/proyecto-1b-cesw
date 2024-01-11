function validarNumero(input) {
    var regex = /[^0-9]/g;
    input.value = input.value.replace(regex, '');
    if (input.value.length === 0) {
        document.getElementById('mensaje').innerHTML = "Ingresa al menos un número.";
    } else {
        document.getElementById('mensaje').innerHTML = "";
    }
}