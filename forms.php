<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using GET</h2>
    <form method="POST" action="forms.php">
        <fieldset>
		    <legend>
			    Login
		    </legend>
		    <label for="email">Email: </label>
		    <input type="text" name="txtEmail"/><br />
		    <label for="passwd">Password: </label>
		    <input type="password" name="txtPass" /><br />
		    <input type="submit" value="Submit" name="loginSubmit"  />
		    <input type="reset" value="Clear" />
	    </fieldset>
    </form>  
    <?php
    if(isset($_POST['loginSubmit'])){
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPass'];

        echo "Email: ".$email."Password: ".$password;
    }
    ?>

    </br>
    <form method="POST" action="forms.php">
	<fieldset>
		<legend>Comments</legend>
		<label for="">Email: </label>
		<input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; } ?>"/><br />
		<textarea rows="4" cols="50" name="textArea" ><?php if(isset($_POST['textArea'])){echo $_POST['textArea']; } ?></textarea><br />
		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="chkConfirm" value="agree"><br />
		<input type="submit" value="Submit" name="submit"/>
		<input type="reset" value="Clear" />
	</fieldset>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $email = trim($_POST['email']);
            $textArea = $_POST['textArea'];
            if (isset($_POST['chkConfirm'])){
                $confirm='Agreed<br />';
            }else{
                $confirm='Not Agreed<br />';
            }
            if(!empty($email)){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "Email: ".$email."</br> Comments: ".$textArea."</br> Confirm: ".$confirm;
                }
                else{
                    echo "Please enter validate email.";
                }
                
            }
            else{
                echo 'email must not be empty';
            }
            
        }
    ?>

    <h2>Tax Calculator</h2>

    <form method="POST" action="forms.php">
        <fieldset>
		    <legend>
			    Without TAX Calculator
		    </legend>
		    <label for="text">After Tax Price: </label>
		    <input type="text" name="txtTax" value="<?php if(isset($_POST['txtTax'])){echo $_POST['txtTax'];} ?>"/>
		    <label for="rate">Tax Rate: </label>
		    <input type="text" name="txtRate" value="<?php if(isset($_POST['txtRate'])){echo $_POST['txtRate'];}  ?>"/>
		    <input type="submit" value="Submit" name="taxSubmit"  />
		    <input type="reset" value="Clear" />
	    </fieldset>
    </form>
    <?php

        if(isset($_POST['taxSubmit']))
        {
            $price = $_POST['txtTax'];
            $rate = $_POST['txtRate'];

            if(!empty($price) && !empty($rate))
            {
                if(filter_var($price, FILTER_VALIDATE_FLOAT) == true && filter_var($rate, FILTER_VALIDATE_INT) == true)
                {
                    $BeforeTaxPrice =  (100*$price)/(100+$rate);
                    echo "Price before tax = £".number_format($BeforeTaxPrice,2);
                }
                else{
                    echo "Please enter the price in the format 9.99. </br>";
                    echo "Please enter a whole number for tax rate.";
                }                
            }
            else{
                echo "All Fields Required.";
            }               
        }
    ?>

    <h1>Passing Data Appended to an URL</h1>
	<h2>Pick a category</h2>
	<a href="forms.php?cat=Films">Films</a>
	<a href=" forms.php?cat=Books">Books</a>
	<a href=" forms.php?cat=Music">Music</a>

    <?php
        //$cat = $_GET['cat'];

        if(isset($_GET['cat']))
        {
            echo "<br/> The category chosen is ".$_GET['cat'];
        }

    ?>

    <h1>Order Form</h1>
    <p>Please fill out this form to place your order.</p>
    <form action="" method="POST" >
        <fieldset>
            <legend>Enter Your Login Details</legend>
            <label for="name">User Name: </label>
            <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" />
            <label for="email">Email:</label>
            <input type="text" name="userEmail" value="<?php if(isset($_POST['userEmail'])){echo $_POST['userEmail'];} ?>"/>
        </fieldset>
        <fieldset>
            <legend>Pizza Selection</legend>
            <label for="button">Size:</label>
            <input type="radio" name="radioConfirm" value="small"  /> small
            <input type="radio" name="radioConfirm1" value="medium" /> medium
            <input type="radio" name="radioConfirm2" value="Large" /> large</br></br>
            <label for="topping">Topping: </label>
            <select name="top" id="top">
                <option name="top1" value="seafood">seafood</option>
                <option name="top2" value="Pepperoni">Pepperoni</option>
                <option name="top3" value="Hawaiian">Hawaiian</option>
                <option name="top4" value="Sausage & Kale">Sausage & Kale</option>
                <option name="top5" value="Margherita">Margherita</option>
            </select></br></br>
            <label for="extra">Extras: </label>
            <input type="checkbox" name="Extra[]" value="Parmesan" >Parmesan
            <input type="checkbox" name="Extra[]" value="Olives" >Olives
            <input type="checkbox" name="Extra[]" value="Capers" >Capers
        </fieldset>
        <input type="submit" value="Submit" name="foodSubmit"  />
		<input type="reset" value="Clear" />
    
    </form>

    <?php

        if(isset($_POST['foodSubmit']))
        {
            $uname = $_POST['username'];
            $uemail = $_POST['userEmail'];
            $list = $_POST['top'];
            //$check = $_POST['Extra'];


            echo "<h4>Thank you for your order:</h4>";
            echo "Customer ID: ".$uname."</br>";
            echo "Email: ".$uemail."</br>";

            if (isset($_POST['radioConfirm'])){
                $confirm='small ';
            }
            elseif(isset($_POST['radioConfirm1'])){
                $confirm='medium ';
            }
            else{
                $confirm='large ';
            }

            switch ($list) {
                case 'seafood':
                    echo "Your order: ".$confirm.' seafood';
                    break;
                case 'Pepperoni':
                    echo "Your order: ".$confirm.'Pepperoni';
                    break;
                case 'Hawaiian':
                    echo "Your order: ".$confirm.'Hawaiian';
                    break;
                case 'Sausage & Kale':
                    echo "Your order: ".$confirm.'Sausage & Kale';
                    break;
                default:
                    echo "Your order: ".$confirm.'Margherita';
                    break;
            }

            echo "</br>Extra Toppings: ";
            foreach($_POST['Extra'] as $item)
            {
                echo $item." ";
            }

        }

    ?>

</body>
</html>

