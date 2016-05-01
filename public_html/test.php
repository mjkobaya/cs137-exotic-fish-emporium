
<?php 
	ini_set('display_errors', 1);
    require_once("connect.php");

	$pname = test_input($_POST['name']);
	$addr = test_input($_POST['address']);
	$pcity = test_input($_POST["city"]);
	$pstate = test_input($_POST['state']);
	$pzip = test_input($_POST['zip']);
	$pphone = test_input($_POST['phone']);
	$credit = test_input($_POST['creditCard']);
	$ship = test_input($_POST['shipMethod']);
	$quant = test_input($_POST['quantity']);

   
    $sql = "INSERT INTO purchase_info (FullName, Addr, Cityinfo, State, Zip, Phone, Creditcard, Shipping, Quantity) VALUES ('" . $pname ."','" . $addr . "','" . $pcity . "','" . $pstate . "','" . $pzip . "','" . $pphone . "','" . $credit . "','" . $ship . "','" . $quant ."')";
    $conn->exec($sql);
    echo "Inserted\n";


    function test_input($data) {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }
        
?>


