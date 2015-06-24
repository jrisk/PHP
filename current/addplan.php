<?php

$activity = $comment = "";

if(isset($_POST['activity']))
{
$activity = $_POST['activity'];
}

if(isset($_POST['comment']))
{
$comment = $_POST['comment'];
}

$fail = activate_activity($activity);
$fail .= activate_comment($comment);

function activate_activity($field)
{
return ($field == "") ? "no activity submitted" : "";
}

function activate_comment($field)
{
return ($field == "") ? "no comment listed" : "";
}

echo "<!DOCTYPE html>\n<html><head><title>Lesson Planner 1.1</title>";
if ($fail == "")
{
echo "</head><body>Activity and Comment: were submitted successfully: $activity and $comment</body></html>";
require_once "login.php";

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

$query = "INSERT INTO lessonplanner VALUES ('$activity', '$comment')";
$result = $connection->query($query);
if (!$result) die ($connection->error);
$connection->close();
exit;
}

echo <<<_END

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
<th colspan='2' align='center'>Post your activity and a Comment.</th>
<tr><td colspan="2">Sorry, the following errors were found<br>
in your form: <p><font color=red size=1><i>$fail</i></font></p></td></tr>

<form method='post' action='addplan.php' onsubmit='return validate(this)'>

<tr><td>Activity</td>
<td><input type='text' maxlength='64' name='activity' value='activity'></td></tr>

<tr><td>Comment</td>
<td><input type='text' maxlength='64' name='comment' value='comment'></td></tr>

<tr><td colspan='2' align='center'><input type='submit' value='Post'></td></tr>
</form>
</table>
</head>
_END;

?>
