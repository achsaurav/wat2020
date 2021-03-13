<?php
    //Make connection to database
    include('connection.php');

    //if(isset($_POST['submit'])){
        //Gather from $_POST[]all the data submitted and store in variables
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        $query = "INSERT INTO customer(FirstName,LastName,Email,Password,Gender,Age) VALUES ('$fname','$lname','$email','$pass','$gender','$age')";
        //echo $query;
	    //exit();
        if(mysqli_query($connection,$query))
        {
            echo "Record Inserted Successfully.";
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    //}
?>