<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<body>
    <?php
        //My first Php
        echo "<h1>My First Php</h1>";
        echo "Name: Saurav Acharya <br/> ";
        echo "Id No: C7227143 <br/>";
        echo "<hr/>";

        echo "<h1>Variables</h1>";

        $name = "David";
        $age = 12;

        echo "<br/>Hi my name is ".$name." and I am ".$age."years old";
        echo "<br/>Hi my name is $name and I am $age years old";

        echo "<h1>Functions</h1>";
        //gettype()returns the type of variable
        echo gettype($name);
        echo '<br />';
        //strlen() returns length of variable
        echo strlen($name);
        echo '<br />';
        //strtoUpper()returns the upper case letters of string variable
        echo strtoUpper($name);


        echo "<h1>Arithmetic</h1>";
        $num1 = 9;
	    $num2 = 12;
        
        echo "num1 = ".$num1."<br/>";
        echo "num2 = ".$num2."<br/>";
        echo "num1 x num2 = ".($num1*$num2)."<br/>";
        echo "num1 as a percentage of num2 = ".(($num1/$num2)*100)."%<br/>";
        echo "num2 divided by num1 = ".number_format($num2/$num1)." remainder ".($num2%$num1)."<br/>";


        echo "<h3>Calculation- height in feet and inches</h3>";
        $meter = 1.8;
        $inch = ($meter*100)/2.54;
        $feet = $inch/12;     
       
        echo "<br/>Name: ".$name;
        echo "<br/>Age: ".$age;
        echo "<br/>Height in Meters: ".$meter;
        $inchs = ($feet - floor($feet))*12;
        echo "<br/>Height in Feet and inches: ".floor($feet)."ft ".floor($inchs)."ins";        

    ?>
    
</body>
</html>