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
<script src='lessonplanner2.js'></script>

<title>Lesson Planner 1.0</title>
<!----Including CSS for different screen sizes--->
<link rel="stylesheet" type="text/css" href="lessonplanner.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple|emboss|fire-animation">
<link href="http://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>

<div class="font-effect-fire-animation"><h1>Skoolia Lesson Planner</h1></div>
<h2>Start planning your lesson today!</h2>
<input type='submit' form='dataform' value='Save' class='save'>
</head>
<body>

<div class="liner">
<div class="font-effect-shadow-multiple"<span id="timehead">Time</span>
<span id="activityhead">Activity</span>
<span id="commenthead">Comment</span></div></div>

<table id="table" border='0' cellpadding='5' cellspacing='5' bgcolor="#eeeeee">


<tr>
<th><td><input type='text'></td></th>

<th><td class='activity'>Activity</td>
<td><textarea maxlength='64' name='activity' placeholder='Put your Activity here...' class='activityinput'></textarea></td></th>

<th><td class='comment'>Comment</td>
<td><textarea name='comment' placeholder='additional comments about the activity' class='commentinput'></textarea></td></th>
<td><input type='submit' class='delrow' value='Delete' onclick='deleteRow(this)'></td>


</tr>

</table>
<input type='submit' class='newrow' value='Add Activity' onclick='addRow()'>
<form method='post' id='dataform' action='addplan.php' onsubmit='return validate(this)'>
</form>
</body>
</html>

