<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Applications and Technologies</title>
</head>
<body>
    <header>
         <h1>Saurav Acharya C7227143</h1> 
    </header>
      
    <section id="container">
        <h1>Fundamentals of PHP</h1>
        <hr/>
        <?php
            $day = date('l');
            echo "It's" .$day;

            echo "<br/>";
            if($day=='Wednesday')
            {
                echo "it's midweek";
            }
            else{
                echo "it's not midweek";
            }
            echo "<br/>";
            date_default_timezone_set('Asia/Kathmandu');
            $date = date('Y/m/d');
            $cdatetime = date('G:i:s a');
            echo $date;echo " ";
            echo $cdatetime. "<br>";
            if($cdatetime <12){
                echo "Good morning";
            }
            elseif ($cdatetime >=12 || $cdatetime <=18) {
                echo "Good Afternoon";
            }

            else{
                echo "Good Night";
            }
            
            echo '<hr/>';
            echo "<h3>Password Length</h3>";
            $password = 'password';
            echo "The password is ".$password."<br/>";
            if(strlen($password)>4 || strlen($password)<10)
            {
                echo "Password length is valid";
            }
            else{
                echo "Password length is invalid";
            }
            if($password= 'password' || $password= 'username'){
                echo "<br/>Password Invalid";
            }
            else{
                echo "<br/>Password Valid";
            }

            echo '<hr/>';
            echo "<h3>Ticket Company</h3>";
            $intprice = 25;
            $age = 15;
            $member='true';

            if($age<12 && $member='true')
            {
                $finalprice= $intprice - ((60*25)/100);
				$member= 'Yes';
            }
            elseif($age<18 && $member='true')
            {
                $finalprice= $intprice - ((35*25)/100);
				$member= 'Yes';
            }
            else if($age>65 && $member='true')
            {
                $finalprice= $intprice - ((35*25)/100);
				$member= 'Yes';
            }
            else{
                $finalprice= $price - ((25*25)/100);
				$member= 'No';
            }
            echo "Initial ticket price: £" .$intprice. "<br/>";
		    echo "Age: " .$age. "<br/>" ;
		    echo "Member: " .$member. "<br/>";
		    echo "Final Ticket Price: £" .$finalprice. "<br/>";

            echo '<hr/>';
            echo "<h1>Arrays</h1>";
            echo "<h4>Simple Arrays</h4>";

            //Storing the items in array and printing output
            $products = array("t-shirt","cap","mug");
            print_r($products);

            echo "<br/>";
            //overwrite the item in index[1]
            $over = array(1 => "shirt");
            $rep = array_replace($products,$over);
            print_r($rep);

            echo "<br/>";
            //adding an item to an array
            array_push($rep,"skirt");
            print_r($rep);

            echo "<br/>";
            //printing the items according to index number
            for ($i=2; $i < count($rep); $i++) { 
                echo "The item at index[$i] is: ".$rep[$i] ."<br/>";
            }

            //Associative Arrays  examples
            echo '<hr/>';
            echo "<h4>Associative Arrays </h4>";

            $customer = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
            print_r($customer);

            echo "<br/>";
            //Modifying the Customer age and Email
            $var = 32;
            $email = "sarah@gamil.com";
            $customer['CustAge'] = $var;
            $customer['CustEmail'] = $email;
            print_r($customer);

            echo "<br/>";
            echo "Items in my customer array";
            echo "<br/>";
            echo "The item at index[CustName] is: ".$customer['CustName'];
            echo "<br/>";
            echo "The item at index[CustEmail] is: ".$customer['CustEmail'];


            //Multi-Dimensional Arrays examples
            echo '<hr/>';
            echo "<h4>Multi-Dimensional Arrays </h4>";

            $stock = array(
                "stock1"=>array('ID'=>'id1','description'=>'t-shirt', 'price'=>9.99, 'stock'=>100,'color'=>array('blue','green','red')),
                "stock2"=>array('ID'=>'id2','description'=>'cap', 'price'=>4.99, 'stock'=>50,'color'=>array('blue','black','gray')),
                "stock3"=>array('ID'=>'id3','description'=>'mug', 'price'=>6.99, 'stock'=>30,'color'=>array('yellow','green','pink'))
            );
            echo "<br/>";
            echo "<table border=1>";
            echo '<tr>';
            echo'<th colspan="2">'.$stock['stock1']['ID'].'<br></th>';
            echo'<th colspan="2">'.$stock['stock2']['ID'].'<br></th>';
			echo'<th colspan="2">'.$stock['stock3']['ID'].'<br></th>';
			echo '</tr>';
            echo '<tr>';
			echo'<td> Description </td>';
			echo'<td>'.$stock['stock1']['description'].'<br></td>';
			echo'<td> Description <br></td>';
			echo'<td>'.$stock['stock2']['description'].'<br></td>';
			echo'<td> Description <br></td>';
			echo'<td>'.$stock['stock3']['description'].'<br></td>';
			echo '</tr>';
			echo '<tr>';
			echo'<td> Price </td>';
			echo'<td>'.$stock['stock1']['price'].'<br></td>';
			echo'<td> Price <br></td>';
			echo'<td>'.$stock['stock2']['price'].'<br></td>';
			echo'<td> Price <br></td>';
			echo'<td>'.$stock['stock3']['price'].'<br></td>';
			echo '</tr>';
			echo '<tr>';
			echo'<td> Stock </td>';
			echo'<td>'.$stock['stock1']['stock'].'<br></td>';
			echo'<td> Stock <br></td>';
			echo'<td>'.$stock['stock2']['stock'].'<br></td>';
			echo'<td> stock <br></td>';
			echo'<td>'.$stock['stock3']['stock'].'<br></td>';
			echo '</tr>';
			echo '<tr>';
			echo'<td> color </td>';
			echo'<td>'.$stock['stock1']['color'][0].'<br>'.$stock['stock1']['color'][1].'<br>'.$stock['stock1']['color'][2].'</td>';
			echo'<td> Color <br></td>';
			echo'<td>'.$stock['stock2']['color'][0].'<br>'.$stock['stock2']['color'][1].'<br>'.$stock['stock2']['color'][2].'</td>';
			echo'<td> Color <br></td>';
			echo'<td>'.$stock['stock3']['color'][0].'<br>'.$stock['stock3']['color'][1].'<br>'.$stock['stock3']['color'][2].'</td>';
			echo '</tr>';
            echo "</table>";

            echo "<br/>";
            echo "This is my order";
            echo "<br/>";
            echo $stock['stock1']['color'][1] .' '.$stock['stock1']['description'];
			echo '<br>';
			echo 'Price: &pound'.$stock['stock1']['price'];
			echo '<br>';
			echo $stock['stock2']['color'][2] .' '.$stock['stock2']['description'];
			echo '<br>';
			echo 'Price: &pound'.$stock['stock2']['price'];
			echo '<br/><br/><hr/>';
            

            echo "<h1>Loops</h1>";
            echo "<h4>While Loop</h4>";

            //Displaying the number in while loop
            $counter = 1;
        
            echo "<table border=1 <tr><th></th</tr>";
            while($counter<6)
            {
                echo 'Count: '.$counter.'<br />';
                $counter++; 
            }

            echo "</table>";

            //Displaying the shirtPrice up to 10
            $shirtPrice = 9.99;
            $counter =1;

            echo "<br/>";
            echo "<table border=1 <tr>
            <th>Quantity</th>   <th>Price</th>  </tr>";
            while($counter<=10)
            {
                echo "<tr>";
                $total=$counter*$shirtPrice;
                echo "<td>".$counter."</td>";
                $counter++;
                echo "<td>"."£".number_format($total,2)."</td>";
                echo "</tr>";
            }
            echo "</table>";

            //For Loops example
            echo '<hr/>';
            echo "<h4>For Loops </h4>";

            $names = array("Peter","Kat","Laura","Ali","Popacatapetal");
            
            for($i=0;$i<5;$i++)
            {
                echo $names[$i] .'<br />';
            }

            //Foreach Loops example
            echo '<hr/>';
            echo "<h4>Foreach Loops </h4>";

            $names = array("Peter ID"=>"C123456","Kat ID"=>"C654321","Laura ID"=>"C987654","Ali ID"=>"C654987","Popacatapetal ID"=>"C765984");
            foreach($names as $key=>$value )
            {
                echo "Name: ".$key.': '.$value.'<br/>';
            }

            echo '<hr/>';
            $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
            print_r($city);

            echo "<br/>";
            foreach($city as $name=>$town){
                $city[$name] = ucfirst ( strtolower ( $town));
            }
            print_r($city);

            //Fundamentals Extension
            echo '<hr/>';
            echo "<h1>Some Useful Functions</h1>";

            $password = trim("password");
            //echo '<script>alert("You have been hacked")</script>';
            echo "Password is: ".$password;
            

            echo "<br/>";
            if(isset($password) && !empty($password))
            {
                if(strlen($password)>=6 && strlen($password)<=8)
                {
                    if(is_numeric($password)){
                        echo "Password cannot be a number";
                    }
                    else{
                        echo "Password OK <br/>";
                        echo "encypted password: ".sha1($password);
                    }
                    
                }
                else{
                    echo"Your password must be between 6 and 8 characters in length.";
                }
                
            }
            else{
                echo"Please enter a password";
            }


		?>
    </section>

    <footer>   
        <small> <a href="../watIndex.html">Home</a></small>
     </footer>   
</body>
</html>