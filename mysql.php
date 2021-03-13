<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>

    <form action="insertRecord.php" method="POST">
        <fieldset style="width:50px">
            <legend>Enter Customer Details</legend>
            <label for="fname">First Name: </label>
            <input type="text" name="firstName" /><br/><br/>
            <label for="lname">Surname: </label>
            <input type="text" name="lastName" /><br/><br/>
            <label for="email">Email: </label>
            <input type="email" name="email" /><br/><br/>
            <label for="password">Password: </label>
            <input type="password" name="password" /><br/><br/>
            <label for="gender">Gender: </label>
            <select name="gender" >
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select><br/><br/>
            <label for="age">Age: </label>
            <input type="text" name="age" />     
        </fieldset>
        <input type="submit" value="submit" name="submit" />   
    </form>   

    <?php
        include('selectRecord.php');

    ?>
</body>
</html>