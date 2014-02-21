/**
 * @author KanwarUjjaval
 */
function valid()
{
if(document.login.firstname.value == "")
{
alert ("Please Enter Your First Name");
document.login.firstname.focus();
return false;
}
if(document.login.lastname.value == "")
{
alert ("Please Enter Your Last Name");
document.login.lastname.focus();
return false;
}
if(document.login.email.value == "")
{
alert ("Please Enter Email Id");
document.login.email.focus();
return false;
}
if(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(document.login.email.value)==false)
{
alert('Invalid E-mail Id! Please re-enter.');
document.login.email.focus();
return false;
}
if(document.login.password.value == "")
{
alert ("Please Enter Your Password");
document.login.password.focus();
return false;
}
}