<?php include('Servr.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
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
form, .content {
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
</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="NewMini.php">
  	<?php include('err.php'); ?>

  	<div class="input-group">
  	  <label>Full Name:</label>
  	  <input type="text" name="FullName" required>
  	</div>
	<div class="input-group">
  	  <label>Branch:</label>
  	  <input type="text" name="Branch" required>
  	</div>
        <div class="input-group">
  	  <label>Year:</label>
  	  <input type="text" name="Year" >
  	</div>
           <div class="input-group">
  	  <label>BlockName:</label>
  	  <input type="text" name="BlockName" >
  	</div>
          <div class="input-group">
  	  <label>RoomNo:</label>
  	  <input type="text" name="RoomNo" >
  	</div>
          <div class="input-group">
  	  <label>PhoneNo:</label>
  	  <input type="text" name="PhoneNo" >
  	</div>
        <div class="input-group">
  	  <label>Parent Name:</label>
  	  <input type="text" name="ParentName" >
  	</div>

         <div class="input-group">
  	  <label>ParentPhoneNo:</label>
  	  <input type="text" name="ParentPhoneNo" >
  	</div>
  	
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>
