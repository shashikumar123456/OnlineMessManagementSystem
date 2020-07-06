
<html>
<head>
<style>
 * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
table, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
a {
  color: #666;
  margin: 20px 10px 0px;
  padding: 0px 30px 0px 30px;
  text-align: right;
}

</style>
</head>
<body>
  
<?php
 session_start();
	$Id="";
        $password="";	
    $_SESSION['success'] = "";

$link = mysqli_connect("localhost", "root","","registration");
if (isset($_POST['login_user'])){
 $Id=$_POST['Id'];
 $password=$_POST['password'];
}
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 



$sql = "SELECT * FROM UserM WHERE Id='$Id' LIMIT 1";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        $_SESSION['Id'] = $Id;
  
        echo "<table>";
            echo "<tr>";
                echo "<th>  Id  </th>";
                echo "<th>  Branch  </th>";
                echo "<th>  Year  </th>";
                echo "<th>  Name  </th>";
                 echo "<th>  Fee  </th>";
                  echo "<th>  Months  </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Branch'] . "</td>";
                echo "<td>" . $row['Year'] . "</td>";
                 echo "<td>" . $row['Name'] . "</td>";
		 echo "<td>" . $row['Fee'] . "</td>";
                echo "<td>" . $row['Months'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);


?>
</body>
<a href="login.php" class="button">Logout</a> 
</html>
