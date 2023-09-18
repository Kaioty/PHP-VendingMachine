<?php

$selected_drink = $_POST['drink'];

// value of each coin.
$NICKEL = 0.05;
$DIME = 0.10;
$QUARTER = 0.25;

// cost of each drink
$DSDCOST = 0.75;
$LDSCOST = 0.55;
$CRSCOST = 1.00;
$EOECOST = 0.35;
$CMDCOST = 0.25;

//========NEEDS A FUNCTION TO READ THESE VALUES FROM A TEXT FILE=======
// change coins (not to be mixed with input coins)
$_outN = 5;
$_outD = 6;
$_outQ = 7;
//======================================================================

//========NEEDS A FUNCTION TO READ THESE VALUES FROM A TEXT FILE=======
// count of each drink that is left in the system 
// $DSDcount = 7;
// $LDScount = 2;
// $CRScount = 5;
// $EOEcount = 6;
// $CMDcount = 3;
//======================================================================


function drinkCheck($selected_drink) {
	$drinkCounts = array();
	$file = "./values.txt";
	$document = file_get_contents($file);
	$drinkCounts = explode("\n", $document);

	$DSDcount = $drinkCounts[0];
	$LDScount = $drinkCounts[1];
	$CRScount = $drinkCounts[2];
	$EOEcount = $drinkCounts[3];
	$CMDcount = $drinkCounts[4];

	//echo $DSDcount . '<br>';
	//echo $LDScount . '<br>';
	//echo $CRScount . '<br>';
	//echo $EOEcount . '<br>';
	//echo $CMDcount . '<br>';
	if($selected_drink = "DSD"){
		$DSDcount -= 1;
		$drinkOut = "DSD WORKED";
		}
	if($selected_drink = "LDS"){
		$LDScount -= 1;
		$drinkOut = "LDS WORKED";
		}
	if($selected_drink = "CRS"){
		$CRScount -= 1;
		$drinkOut = "CRS WORKED";
		}
	if($selected_drink = "EOE"){
		$EOEcount -= 1;
		$drinkOut = "EOE WORKED";
		}
	if($selected_drink = "CMD"){
		$CMDcount -= 1;
		$drinkOut = "CMD WORKED";
		}
		
	file_put_contents($file, (
	$DSDcount . "\n" . 
	$LDScount . "\n" . 
	$CRScount . "\n" . 
	$EOEcount . "\n" .
	$CMDcount . "\n"));
	
	echo "drinkCheck Worked! ";
}

// user input coins
$_nickels = $_POST['Nickles'];
$_dimes = $_POST['Dimes'];
$_quarters = $_POST['Quarters'];

// function to get user input coins and put them into one var and save it in a txt file with "&" spilting each entry.
function moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER){
	if ($_nickels != ""){
	$_userInput += ($_nickels * $NICKEL);
	}
	if ($_dimes != ""){
	$_userInput += ($_dimes * $DIME);
	}
	if ($_quarters != ""){
	$_userInput += ($_quarters * $QUARTER);
	} 
	
	// saves user input money in a text file(inputmoney.txt), using "&" to split each transaction.
	// $moneyStr = $_userInput . "\n";
	// $inputMoney = 'inputmoney.txt';
	// if (is_writable($inputMoney)) {
		// if (!$handle = fopen($inputMoney, 'a')) {
			// echo "Cannot open file ($inputMoney)";
			// exit;
		// }
		// if (fwrite($handle, $moneyStr) === FALSE) {
			// echo "Cannon write to file ($inputMoney)";
			// exit;
		// }
		//echo "Success, wrote (wrote ($_userInput) to file ($inputMoney)";
		// exit;
		// fclose($handle);
	// }
	// else {
		// echo "this file $inputMoney is not writable";
	// }
	echo "moneyCheck Worked! ";
	return $_userInput;
}

// gets radio button value
// $selected_drink = $_POST['drink'];
// echo "Your Selected Beverage is " . $selected_drink ;


// checks radio button value and subtracts 1 from the count and runs the money input function
switch ($selected_drink){
case "DSD":
	if ($DSDCOST == moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER)) {
		drinkCheck($selected_drink);
		echo "EVERYTHING WORKED!";
		}
	break;
case "LDS":
	if ($LDSCOST == moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER)) {
		drinkCheck($selected_drink);
		echo "EVERYTHING WORKED!";
		}
	break;
case "CRS":
	if ($CRSCOST == moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER)) {
		drinkCheck($selected_drink);
		echo "EVERYTHING WORKED!";
		}
	break;
case "EOE":
	if ($EOECOST == moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER)) {
		drinkCheck($selected_drink);
		echo "EVERYTHING WORKED!";
		}
	break;
case "CMD":
	if ($CMDCOST == moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER)) {
		drinkCheck($selected_drink);
		echo "EVERYTHING WORKED!";
		}
	break;
default:
	echo "ERROR";	
}



?>

