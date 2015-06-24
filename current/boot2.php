<html>
<head>
<title>Bootstrap Stuff</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<div class="jumbotron">
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>
</div>

<div class="container">
<div class="row">

<?php

require_once 'login.php';

$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($connection->connect_error) {
	echo "connection failed: " . $connection->connect_error;
	}
	echo "connection good";
$query = "SELECT * FROM weekdata";

$result = $connection->query($query);

for ($i=0; $i < $result->num_rows; $i++) {
	$rows = $result->fetch_assoc();
	$monday = $rows["Monday"];
	$tuesday = $rows["Tuesday"];
	$wednesday = $rows["Wednesday"];
	$thursday = $rows["Thursday"];
	$friday = $rows["Friday"];
	$saturday = $rows["Saturday"];
	$sunday = $rows["Sunday"];
	}

echo <<<_END
<div class="col-sm-2">
<button class="btn-lg">Monday</button>
<div class="container">$monday</div>
</div>
<div class="col-sm-2">
<button class="btn-lg">Tuesday</button>
<div class="container">$tuesday</div>
</div>
<div class="col-sm-2">
<button class="btn-lg">Wednesday</button>
</div>
<div class="col-sm-2">
<button class="btn-lg">Thursday</button>
</div>
<div class="col-sm-2">
<button class="btn-lg">Friday</button>
</div>
<div class="col-sm-2">
<button class="btn-lg">Saturday</button>
</div>
<div class="col-sm-1">
<button class="btn-lg">Sunday</button>
</div>
</div>
</div>
</div>
</div>
</div>
_END;

?>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>

</body>
</html>