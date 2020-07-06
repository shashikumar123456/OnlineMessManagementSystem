<?php
	session_start();
    
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'registration');
        if (isset($_POST['reg_user'])) {
		
		$Name = mysqli_real_escape_string($db, $_POST['Name']);
                $Branch = mysqli_real_escape_string($db, $_POST['Branch']);
  		$Year = mysqli_real_escape_string($db, $_POST['Year']);
		$Subject = mysqli_real_escape_string($db, $_POST['Subject']);
               
		if (empty($Name)) { array_push($errors, "Name is required"); }
		if (empty($Branch)) { array_push($errors, "Branch is required"); }
                if (empty($Year)) { array_push($errors, " SubjectName is required"); }
		if (empty($Subject)) { array_push($errors, "Subject is required"); }
		
             
		
	
			$query = "INSERT INTO FeedBack(Name,Branch,Year,Subject) 
					  VALUES('$Name', '$Branch', '$Year','$Subject')";
			mysqli_query($db, $query);
			header('location: logoutregi.html');
		echo "Successfully updated";
		
	}
