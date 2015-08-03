function val1(f) {
var a = f.first_name.value;
if (a == '' || a == '* Nombre') {
alert ('Por favor ingrese su nombre');
f.first_name.focus();
return false;
} 

a = f.last_name.value;
if (a == '' || a == '* Apellido') {
alert ('Por favor ingrese sus apellidos');
f.last_name.focus();
return false;
}

a = f.main_phone.value;
if (a == '' || a == '* Telefono') {
alert ('Por favor ingrese el numero de telefono');
f.main_phone.focus();
return false;
}

a = f.email.value;
if (a == '' || a == '* Correo Electronico') {
alert ('Introduzca su direccion de correo electronico');
f.email.focus();
return false;
}

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(reg.test(a) == false) {
alert('Por favor introduzca una direccion de correo valida');
return false;
}

a = f.program_of_interest.selectedIndex;
if (a == 0) {
alert ('Por favor elija un Programa de Interes');
f.program_of_interest.focus();
return false;
}





return true;
}
