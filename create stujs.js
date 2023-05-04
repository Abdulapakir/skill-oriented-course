function registration()
{
var uname= stu.un.value;
var pwd=stu.pd.value;
var cpwd=stu.cpd.value;
var email=stu.eid.value;
var mno=stu.mnb.value;
//email id expression code
var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
var letters = /^[A-Za-z]+$/;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(uname=='')
{
alert('Please enter your name');
}
else if(!letters.test(uname))
{
alert('Name field required only alphabet characters');
}
else if(pwd=='')
{
alert('Please enter Password');
}
else if(cpwd=='')
{
alert('Enter Confirm Password');
}
else if(!pwd_expression.test(pwd))
{
alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
}
else if(pwd != cpwd)
{
alert ('Password not Matched');
}
else if(stu.pd.value.length < 6)
{
alert ('Password minimum length is 6');
}
else if(stu.pd.value.length > 12)
{
alert ('Password max length is 12');
}
else if(email=='')
{
alert('Please enter your user email id');
}
else if (!filter.test(email))
{
alert('Invalid email');
}
else if(mno=='')
{
alert('Please enter Mobile Number');
}
else if(isNaN(mno)) {
alert('Invalid Mobile Number'); }
else {
alert('Thank You for Registration '); }
}