
<html>
<head>
<title>FeedBack Form</title>

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
  	<h2>FeedBack</h2>
  </div>
	<form method="post" action="servers.php">
  	
  	<div class="input-group">
  		<label>Name</label>
  		<input type="text" name="Name" >
  	</div>
	<div class="input-group">
  		<label>Branch</label>
  		<input type="text" name="Branch" >
  	</div>
	<div class="input-group">
  		<label>Year</label>
  		<input type="text" name="Year" >
  	</div>
	<div class="input-group">
  		<label>Food(good/bad/average)</label>
  		<input type="text" name="Subject" >
  	</div>
  	
  	<div class="input-group">
  		<button type="submit" class="btn" name="reg_user">FeedBack</button>
  	</div>
  	
  </form>


</body>
</html>

