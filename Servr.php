<?php
	session_start();
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'registration');
        if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$FullName = mysqli_real_escape_string($db, $_POST['FullName']);
                $Branch = mysqli_real_escape_string($db, $_POST['Branch']);
  		$Year = mysqli_real_escape_string($db, $_POST['Year']);
		$BlockName = mysqli_real_escape_string($db, $_POST['BlockName']);
               $RoomNo = mysqli_real_escape_string($db, $_POST['RoomNo']);
                $PhoneNo = mysqli_real_escape_string($db, $_POST['PhoneNo']);
               $ParentName = mysqli_real_escape_string($db, $_POST['ParentName']);
               $ParentPhoneNo = mysqli_real_escape_string($db, $_POST['ParentPhoneNo']);
		if (empty($FullName)) { array_push($errors, "FullName is required"); }
		if (empty($Branch)) { array_push($errors, "Branch is required"); }
                if (empty($Year)) { array_push($errors, "Year is required"); }
		if (empty($BlockName)) { array_push($errors, "BlockName is required"); }
		if (empty($RoomNo)) { array_push($errors, "RoomNo is required"); }
		if (empty($PhoneNo)) { array_push($errors, "PhoneNo is required"); }
                if (empty($ParentName)) { array_push($errors, "ParentName is required"); }
               if (empty($ParentPhoneNo)) { array_push($errors, "ParentPhoneNo is required"); }
		
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (FullName, Branch,Year,BlockName,RoomNo,PhoneNo,ParentName,ParentPhoneNo) 
					  VALUES('$FullName', '$Branch', '$Year','$BlockName','$RoomNo','$PhoneNo','$ParentName','$ParentPhoneNo')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Successfull Updated Record ";
			header('location: indx.php');
		}
	}
 	/* if (isset($_POST['login_user'])) {
  
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
*/

?>
