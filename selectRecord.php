<?php
    //connection to database
    include('connection.php');

    //Display heading
    echo "<h2>Select ALL from the Customer Table</h2>";

    //run query to select all records from customer table
    $query = "SELECT * FROM customer";

    //storing the result of the query in a variable called $result
    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
    }


    echo "<h2>Select ALL from the Customer Table with age>22</h2>";
    
    $query = "SELECT * FROM customer WHERE (Age > 22)";

    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }


    echo "<h2>Select Female from the Customer Table with age>=22</h2>";
    $query = "SELECT * FROM customer WHERE (Age >= 22) && (gender = 'F')";

    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }



    echo "<h2>Select Males from the Customer Table list by age descending</h2>";
    $query = "SELECT * FROM customer WHERE gender = 'M' ORDER BY Age DESC";
    
    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }



    echo "<h2>Select All from the Customer Table with 'a' in the first name</h2>";
    $query = "SELECT * FROM customer WHERE FirstName like '%a%'";
    
    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

?>