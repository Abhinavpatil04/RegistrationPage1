<?php
   include("connection.php");

	$firstname=$_POST['fname'];
    $lastname=$_POST['Lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

	if($firstname!="" && $lastname!="" && $email!="" && $password!="" && $confirmpassword!="")
	{
	$query="INSERT INTO userinfo1 VALUES (NULL,'$firstname','$lastname','$email','$password','$confirmpassword')";
	$data=mysqli_query($conn,$query);
	  if($data)
	  {
            echo"<script>alert('Registration Successful');</script>" ;          
	    	header('location:Login.php');
      }
	   else
	  {
        echo"<script>alert('Inserted failed');</script>" ;
	    	
      }	
	}	
     else 
    {
	  echo"<script>alert('All Fields Are Required');</script>" ;
    }
 
?>