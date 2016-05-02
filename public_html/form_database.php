
<?php 
	ini_set('display_errors', 1);
    require_once("connect.php");

    $stmt = $conn->prepare("INSERT INTO purchase_info (FullName, Addr, Cityinfo, State, Zip, Phone, Creditcard, Shipping, Quantity) VALUES (:pname,:addr,:pcity,:pstate,:pzip,:pphone,:credit,:ship,:quant)"); 
    $stmt->bindParam(':pname', $pname);
    $stmt->bindParam(':addr', $addr);
    $stmt->bindParam(':pcity', $pcity);
    $stmt->bindParam(':pstate', $pstate);
    $stmt->bindParam(':pzip', $pzip);
    $stmt->bindParam(':pphone', $pphone);
    $stmt->bindParam(':credit', $credit);
    $stmt->bindParam(':ship', $ship);
    $stmt->bindParam(':quant', $quant);

	$pname = test_input($_POST['name']);
	$addr = test_input($_POST['address']);
	$pcity = test_input($_POST["city"]);
	$pstate = test_input($_POST['state']);
	$pzip = test_input($_POST['zip']);
	$pphone = test_input($_POST['phone']);
	$credit = test_input($_POST['creditCard']);
	$ship = test_input($_POST['shipMethod']);
	$quant = test_input($_POST['quantity']);

    if ($stmt->execute()) {
        // show confirmation
        ?>
        <html>
        <p>hello</p>
        </html>
        <?php
    }
    else {
        // failure; display error
        ?>
        <html>
        <p>error</p>
        </html>
        <?php
    }

    function test_input($data) {
    	$data = trim($data);
    	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
    	return $data;
    }

        
?>


