<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
$con = mysqli_connect('localhost', 'root');
if($con){
}
mysqli_select_db($con, 'loginsystem');
  if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count = count($_POST['quizcheck']);
        echo "Out of 10, you have selected " .$count.  "options" ;
    }
  }










?>
<!DOCTYPE html>
<html>
<head>
	<title>Results Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
			border-radius: 10px;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-top: 0;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: normal;
		}

		.success {
			color: green;
			font-weight: bold;
		}

		.failure {
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Results</h1>
		<table>
			<tr>
				<th>Quantitative Aptitude</th>
				<th>Result</th>
			</tr>
			
		</table>
	</div>
</body>
</html>
