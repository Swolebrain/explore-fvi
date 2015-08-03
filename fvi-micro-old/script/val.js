function val1(f) {
var a = f.first_name.value;
if (a == '' || a == '* First Name') {
alert ('Please enter your First Name');
f.first_name.focus();
return false;
} 

a = f.last_name.value;
if (a == '' || a == '* Last Name') {
alert ('Please enter your Last Name');
f.last_name.focus();
return false;
}

a = f.main_phone.value;
if (a == '' || a == '* Phone Number') {
alert ('Please enter Phone Number');
f.main_phone.focus();
return false;
}

a = f.email.value;
if (a == '' || a == '* Email') {
alert ('Please enter your Email');
f.email.focus();
return false;
}

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(reg.test(a) == false) {
alert('Please enter a valid Email Address');
return false;
}

a = f.program_of_interest.selectedIndex;
if (a == 0) {
alert ('Please choose Program of interest');
f.program_of_interest.focus();
return false;
}





return true;
}
