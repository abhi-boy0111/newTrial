<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<div class="dashboard">
  <div class="dashboard-header">
  <header>
		<h1>WELLCOME TO THE ONLINE LEARNING PLATFORM OF GCOEY</h1>
	</header>
	<style>
		.dashboard {
  background-color: #f2f2f2;
  padding: 20px;
}

.dashboard-header {
			background-color: cadetblue;
			color: #FFF;
			padding: 10px;
			text-align: center;


}

.dashboard-header h1 {
  font-size: 24px;
  margin: 0;
}

.dashboard-content {
  display: flex;
  flex-wrap: wrap;
}

.dashboard-box {
  background-color: #ffffff;
  padding: 20px;
  margin: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  flex: 1 0 300px;
}

.dashboard-box h2 {
  font-size: 18px;
  margin: 0 0 10px 0;
}
.logout-btn {
  background-color: cadetblue;
  color: #ffffff;
  padding: 15px 25px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.logout-btn:hover {
  background-color: cadetblue;
}

.dashboard-box p {
  font-size: 14px;
  margin: 0 0 20px 0;
}

.dashboard-btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 20px;
  border-radius: 5px;
  cursor: pointer;
}

.dashboard-btn:hover {
  background-color: #3e8e41;
  
}
</style>


    
  </div>
  <div class="dashboard-content">
    <div class="dashboard-box">
      <h2>Quantitative Aptitude</h2>
      <p>Questions: 50</p>
      <button class="dashboard-btn"><a href="Quantitative Aptitude.php">Start Exam</a></button>
      
    </div>
    <div class="dashboard-box">
      <h2>Logical Reasoning</h2>
      <p>Questions: 50</p>
      <button class="dashboard-btn"><a href="logical  Reasoning.php">Start Exam</a></button>
    </div>
    <div class="dashboard-box">
      <h2>Data Interpretation</h2>
      <p>Questions: 50</p>
      <button class="dashboard-btn"><a href="Data Interpretation.php">Start Exam</a></button>
    </div>
  </div>
  <button class="logout-btn"><a href="logout.php">Logout</a></button>
</div>
</body>
</html>
