<!DOCTYPE html>
<html>
<head>
	<title>Sample Form</title>
<style>
	.signup {
	border: 1px solid #999999;
	font: normal 14px Helvetica;
	color: #444444;
	}
</style>
<script>
function validate(form)
{
	fail = validateFirstname(validate.firstname.value)
	fail += validateLastname(validate.lastname.value)
	fail += validateUsername(validate.username.value)
	fail += validatePassword(validate.password.value)
	fail += validateAge(validate.age.value)
	fail += validateEmail(validate.email.value)
	
	if (fail == "") return true
	else { alert(fail) ; return false}
}

</script>
</head>

<body>
<table border='0' cellpadding='2' cellspacing='5' bgcolor="#eeeeee">
<th colspan='2' align='center'>SignUp Form</th>
<form method='post' action='validate.php' onsubmit='return validate(this)'>
<tr><td>Firstname</td>
<td><input type='text' maxlength='32' name='firstname'></td></tr>
<tr><td>Lastname</td>
<td><input type='text' maxlength='32' name='lastname'></td></tr>
<tr><td>Username</td>
<td><input type='text' maxlength='16' name='username'></td></tr>
<tr><td>Password</td>
<td><input type='text' maxlength='16' name='password'></td></tr>
<tr><td>Age</td>
<td><input type='text' maxlength='3' name='age'></td></tr>
<tr><td>Email</td>
<td><input type='text' maxlength='32' name='email'></td></tr>
<tr><td colspan='2' align='center'><input type='submit' value='SignUp'></td></tr>
</form>
</table>
</body>
</html>


	
