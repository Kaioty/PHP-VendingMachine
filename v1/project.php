<?php

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

// change coins (not to be mixed with input coins)
$_outN = 5;
$_outD = 6;
$_outQ = 7;

// count of each drink that is left in the system
$DSDcount = 7;
$LDScount = 2;
$CRScount = 5;
$EOEcount = 6;
$CMDcount = 3;

// user input coins
$_nickels = $_POST['Nickles'];
$_dimes = $_POST['Dimes'];
$_quarters = $_POST['Quarters'];

// function to get user input coins and put them into one var
function moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER){
	if ($_nickels !== "")
	{
	$_userInput += ($_nickels * $NICKEL);
	}
	elseif ($_dimes !== "")
	{
	$_userInput += ($_dimes * $DIME);
	}
	elseif ($_quarters !== "")
	{
	$_userInput += ($_quarters * $QUARTER);
	} 
	echo $_userInput;
	return $_userInput;
}

// gets radio button value
$selected_drink = $_POST['drink'];
//echo "Your Selected Beverage is " . $selected_drink ;

// checks radio button value and subtracts 1 from the count and runs the money input function
switch ($selected_drink){
case "DSD":
	$DSDcount -= 1;
	moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER);
	break;
case "LDS":
	$LDScount -= 1;
	moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER);
	break;
case "CRS":
	$CRScount -= 1;
	moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER);
	break;
case "EOE":
	$EOEcount -= 1;
	moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER);
	break;
case "CMD":
	$CMDcount -= 1;
	moneyCheck($_nickels, $_dimes, $_quarters, $NICKEL, $DIME, $QUARTER);
	break;
default:
	echo "ERROR";	
}

?>

