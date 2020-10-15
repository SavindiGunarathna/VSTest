<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content = "width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "stylesheetMain.css"/>
</head>
<body>
<header>
  <h1>Quick Exam</h1>
</header>

<div class = "nav">
<a href = "home.html">Home</a>
<a  href = "notice.html">Notices</a>
<a  class = "active" href = "year.html">Year</a>
<a href = "contactus.html">Contact Us</a>
<a href = "Our Stories.html">Our Stories</a>
</div>

<div id = "contain" style ="padding:30px">
</div>
<style>
#con{padding-top:10px;
padding-bottom:100px;
}
h1{color:gray;
padding-top :20px;
font-size:50px;
}
ul{
  list-style-type:none;
  background: gray;
  padding: 5px;
}
ul li {
  font-size : 25px;
  background: white ;
  margin: 3px;
  
}
form{
width:1000px;
margin:auto;
margin top:250px;
}
.search{
 width:80%;
 padding:15px;
 font-size:20px;
}
.submit{
width :15%;
padding:17px;
font-size:20px;
background-color:blue;
color:white;
margin:auto;
}
h4{
	margin :20px 0px 0px 0px;
	padding:0px;
	padding-left:180px;
}

</style>
<div  id = "con">
<h1 align = "center">Courses</h1>

 <ul>
    
    <li>Communication Skills</li>
    <li>Introduction to Programming</li>
    <li>Introduction to Computer Systems</li>
	<li>Mathematics for Computing</li>
  </ul>
  <br><br>
  <?php
$output = NULL;
if(isset($_POST['submit'])){
	$mysqli = NEW MYSQLi("localhost","root","","project");
$Search = $_POST['Search'];
$resultSet = $mysqli->query("SELECT * FROM year1sem1 WHERE subject LIKE '%$Search%' ");

	if($resultSet->num_rows > 0){
		while($rows = $resultSet->fetch_assoc()){
			$id = $rows['id'];
			$subject = $rows['subject'];
			
		//echo'<h6><a href = " ' . $id . '.php">' . $subject . '</a></h6><br>';
			//$output = "id:$id<br/>subject:$subject";
			$output = '<h4><a href = " ' . $id . '.php">' . $subject . '</a></h4><br>';
		}
	}else{
		$output = "no result";
	}
}
?>
  <form method = "POST">
  <h2>search courses:</h2>  
  <input class =  "search" type="text" placeholder="Search.." name = "Search"><input class = "submit"type = "submit" value ="Go">
  </form>
   <?php
  echo $output;
  ?>
  </div>
</body>
<footer>
</footer>
</html>





