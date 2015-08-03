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


a = f.main_phone.value;
if (a == '' || a == '* Phone Number') {
alert ('Please enter Phone Number');
f.main_phone.focus();
return false;
}


a = f.zip_code.value;
if (a == '' || a == '* Zip') {
alert ('Please enter your Zip');
f.zip_code.focus();
return false;
}

a = f.education_level.value;
if (a == '' || a == '') {
alert ('Please Select Highest Level of Education');
f.education_level.focus();
return false;
}

a = f.hs_grad_year.value;
if (a == '' || a == '') {
alert ('Please Select HS Grad Year');
f.hs_grad_year.focus();
return false;
}


return true;
}
