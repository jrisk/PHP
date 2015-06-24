<!DOCTYPE HTML>
 
<html>
<head>
<script>
function validate(form)
{
fail = validateActivity(validate.activity.value)
fail += validateComment(validate.comment.value)

if (fail = "") return true
else {
alert(fail);
return false
} 

</script>
<script src='lessonvalidate.js'></script>

<title>Lesson Planner 1.0</title>
<!----Including CSS for different screen sizes--->
<link rel="stylesheet" type="text/css" href="formstuff.css" />
</head>
<body>
<a href='newform.php' class='button'>Lesson Planner</a>

<table border='0' cellpadding='5' cellspacing='5' bgcolor="#eeeeee">
<th colspan='2' align='center'>Post your activity and a Comment</th>

<form method='post' action='addplan.php' onsubmit='return validate(this)'>

<tr><td>Activity</td>
<td><input type='text' maxlength='64' name='activity'></td></tr>

<tr><td>Comment</td>
<td><input type='text' maxlength='32' name='comment'></td></tr>

<tr><td colspan='2' align='center'><input type='submit' value='Post'></td></tr>
</form>
</table>
</head>


