<?php
function calculateProduct() {
  
  // get the user number
  $userNum1 = intval($_POST['userNum1']);
  $userNum2 = intval($_POST['userNum2']);

  // determine the sign of the product using sign
  if ($userNum1 >= 0 && $userNum2 >= 0) {
    $sign = 1; // both positive
  } elseif ($userNum1 < 0 && $userNum2 < 0) {
    $sign = 1; // both negative
  } else {
    $sign = -1; // one positive, one negative
  }

  // use a for loop to calculate the product of numbers
  $product = 0;
  for ($counter = 0; $counter < abs($userNum2); $counter++) {
    $product += abs($userNum1);
  }

  // set the sign of the product based on the signs of the inputs
  $product *= $sign;

  // return the numbers back to html	
  echo "$userNum1 x $userNum2 = $product";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Savyon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--for favicon on this page-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    
    <!--Style on this page-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Product of Numbers</title>
  </head>
  <body>
    <h1>Product of Numbers</h1>
	<table>
		<tr align="center">
			<td valign="top" align="right">			
        
        <!--area for user to enter numbers-->
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">						
					<label for="userNum1">Enter a Number:</label>
					<input type="number" step="1" id="userNum1" name="userNum1"><br><br>					
					<label for="userNum2">Enter another Number:</label>
					<input type="number" step="1" id="userNum2" name="userNum2"><br><br>
				<input type="submit" value="Calculate Product" name="submit">
				</form>
			</td>
		</tr>
	</table>	
    
	<!-- Create a space where the user information will be displayed -->
	<div id="display-results">
		<?php
			if(isset($_POST['submit'])) {
				calculateProduct();
			}
		?>
	</div>

	<!--image on this page-->
	<td valign="top" align="center">
		<img src="./images/multiply.png" alt="numbers" width="30%">
	</td>