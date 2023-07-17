<?php
function user_login($data){
global $con;
	session_start();
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);


	$sql = "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password ='".$password."' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if (!$result->num_rows == 1) {
		 echo '<script type="text/javascript">alert("Wrong username and Password"); window.location = "./index.php";</script>';
	} else {
		 			$query = "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password ='".$password."' LIMIT 1";
        			$result = mysqli_query($con,$query);                        
			         while ($row = mysqli_fetch_array($result)) {
			          $id = $row['id']; 
			          $fullname = $row['fullname'];
			          $address = $row['address'];
			          $contactnumber = $row['contactnumber'];
			          $position = $row['position'];
			          $password = $row['password'];
			          $username = $row['username'];

			     
					  $_SESSION['id'] = $id;
					  $_SESSION['fullname'] = $fullname;
					  $_SESSION['address'] = $address;
					  $_SESSION['contactnumber'] = $contactnumber;
					  $_SESSION['position'] = $position;
					  $_SESSION['username'] = $username;
					  $_SESSION['password'] = $password;
					  
					  
      }
    	header("location:./dashboard.php");	   
	}
										
}





function onadd_student($data){
global $con;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$gender = mysqli_real_escape_string($con,$_POST['gender']);
	$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
	$schoolyear = mysqli_real_escape_string($con,$_POST['schoolyear']);
	$yearlevel = mysqli_real_escape_string($con,$_POST['yearlevel']);
	$strand = mysqli_real_escape_string($con,$_POST['strand']);
	$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
	$parents = mysqli_real_escape_string($con,$_POST['parents']);
	$parentscontactnumber = mysqli_real_escape_string($con,$_POST['parentscontactnumber']);
	$section = mysqli_real_escape_string($con,$_POST['section']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$username = mysqli_real_escape_string($con,$_POST['lrn']);
	$password = '1234';
	 $query = "SELECT * FROM tbl_students WHERE lrn='$lrn'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Student Already Exist!"); window.location = "./add_student.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_students (name,gender,lrn,schoolyear,yearlevel,strand,contactnumber,parents,parentscontactnumber,section,email,username,password,type) VALUES ('$name','$gender','$lrn','$schoolyear','$yearlevel','$strand','$contactnumber','$parents','$parentscontactnumber','$section','$email','$username','$password','Student')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Student Has Been Added."); window.location = "./add_student.php";</script>';     	
	    }		
}

function onadd_teacher($data){
global $con;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
	$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
	$section = mysqli_real_escape_string($con,$_POST['section']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$username = mysqli_real_escape_string($con,$_POST['lrn']);
	$password = '1234';
	 $query = "SELECT * FROM tbl_students WHERE lrn='$lrn'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Information Already Exist!"); window.location = "./add_teacher.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_students (name,lrn,contactnumber,section,email,username,password,type) VALUES ('$name','$lrn','$contactnumber','$section','$email','$username','$password','Teacher')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Teacher Has Been Added."); window.location = "./add_teacher.php";</script>';     	
	    }		
}

function onadd_rooms($data){
global $con;
	$buildingname = mysqli_real_escape_string($con,$_POST['buildingname']);
	$room = mysqli_real_escape_string($con,$_POST['room']);

	 $query = "SELECT * FROM tbl_rooms WHERE buildingname='$buildingname' AND room='$room'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Information Already Exist!"); window.location = "./add_rooms.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_rooms (buildingname,room) VALUES ('$buildingname','$room')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Room Has Been Added."); window.location = "./add_rooms.php";</script>';     	
	    }		
}


function onadd_subject($data){
global $con;
	$subjectcode = mysqli_real_escape_string($con,$_POST['subjectcode']);
	$subjectname = mysqli_real_escape_string($con,$_POST['subjectname']);
	$hours = mysqli_real_escape_string($con,$_POST['hours']);

	 $query = "SELECT * FROM tbl_subjects WHERE subjectcode='$subjectcode'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Subject Code Already Exist!"); window.location = "./add_subjects.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_subjects(subjectcode,subjectname,hours) VALUES ('$subjectcode','$subjectname','$hours')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Subject Has Been Added."); window.location = "./add_subjects.php";</script>';     	
	    }		
}
?>