<html>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <link rel="stylesheet" href="css/main.css" type="text/css">
   <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
   
   <head>

      <title>Fish Forever - Angelfish</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- custom CSS -->
      <link rel="stylesheet" href="css/main.css" type="text/css">
      
      <!-- jQuery CDN -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

      <!-- Javascript for Ajax call -->
      <script src="js/zipcode_ajax.js"></script>

    </head>

    <body style="background-color:rgba(0, 255, 0, 0)">

    <style>
         
   html
   {
    background: url("img/altBackground1.png"); 

    background-size:100% auto;
    background-repeat:no-repeat;
    background-attachment: fixed;
      }
         table, th, td {
         border-collapse: collapse;
         background-color:rgba(0, 0, 0, 0);

         }
         input{
          width: 250px;display: block;
         }
         th, td {
         margin: 5px;
         text-align: left;    
         }
         formB
         {
         border-radius: 5px;
         background-color: #f2f2f2;
         margin: 40px;
         }
         input[type=text], select {
         width: 250px;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         }
         .mySlides {display:none}
         .w3-left, .w3-right, .w3-badge {cursor:pointer}
         .w3-badge {height:13px;width:13px;padding:0}
          img
        {
           border-radius: 50px;
        }
      </style>
   
      <section style="font-family:Arial, Helvetica, sans-serif;" id="top-navbar">
         <ul style="position:relative;bottom:5px;font-size:110%;padding:default">
            <li><a href="home.html">Home</a></li>
            <li><a href="home.html#about">About Us</a></li>
            <li><a href="store.html">Store</a></li>
            <li style="margin:0;padding:5px 15px 0px 15px; display:inline; width:5em;float:right"id="logo-img-li" ><a style="width:120%;"href="home.html"><img id="logo-img" src="img/fish-logo.png"/></a></li>
            <li class="right">
               <h1 style="font-weight:bold;font-size:150%">Fish Forever</h1>
            </li>
         </ul>
      </section>

        <div class="confirmation">
            <p class="confirm-title">Order Confirmation</p>
            <ul>
              <li>one</li>
              <li>one</li>
              <li>one</li
            </ul>
        </div>
        </body>
        </html>

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


