<!DOCTYPE html>
<html>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <link rel="stylesheet" href="css/main.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
   <head>

      <title>Fish Forever - Sea Star</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- custom CSS -->
      <link rel="stylesheet" href="css/main.css" type="text/css">
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
      <script src="frame_tab.js"></script>
      <script src="formValidation.js"></script>
      <style type="text/css"></style>
  
   
      <section style="font-family:Arial, Helvetica, sans-serif;" id="top-navbar">
         <ul style="position:relative;bottom:5px;font-size:110%;padding:default">
            <li><a href="home.html">Home</a></li>
            <li><a href="home.html#about">About Us</a></li>
            <li><a href="store.html">Store</a></li>
            <li style="margin:0;padding:5px 15px 0px 15px; display:inline; width:5em;float:right"id="logo-img-li" ><a style="width:120%;"href="home.html"><img class="rotate" id="logo-img" src="img/fish-logo.png"/></a></li>
            <li class="right">
               <h1 style="font-weight:bold;font-size:150%">Fish Forever</h1>
            </li>
         </ul>
      </section>
    
      <div style="background-color:rgba(255, 0, 0, 0);margin:100px">
         <table border="0" style="background-color:rgba(0, 255, 0, 0); font-family: Arial, Helvetica, sans-serif; width:100%">
         <tr style="background-color:rgba(0, 255, 0, 0)">
            <td >
               <div class="w3-content w3-display-container" style="max-width:600px;background-color:rgba(0, 255, 0, 0)">
                  <img class="mySlides" src="img/seastar1.jpg" style="width:100%; height:400px">
                  <img class="mySlides" src="img/seastar2.jpg" style="width:100%; height:400px">
                  <img class="mySlides" src="img/seastar3.jpg" style="width:100%; height:400px">
                  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%;background-color:rgba(0, 255, 0, 0)">
                     <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">❮</div>
                     <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">❯</div>
                     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                     <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                  </div>
               </div>
            </td>
            <td style="background-color:rgba(0, 255, 0, 0);vertical-align:top;width:400px">
            </html>
            <?php
            
              require_once("connect.php");

              $sql = "SELECT name, price, description FROM products WHERE pid = 16";

              foreach ($conn->query($sql) as $row) {
                      echo '<p style="position: relative;bottom:20px;font-size: 300%;color:#DDE5F9;text-shadow: 2px 2px #000000">' . $row['name'] . '<br> <a style="position: relative;bottom:20px;font-size:30px"> Price: $44.95</a></p>';
                      echo '<p style="position: relative;bottom:70px;font-size: 105%;color:#DDE5F9;text-shadow: 1px 1px #000000">' . $row['description'] . '</p>';
              }               
            ?>
            <html>
               <html>
               <button style=" border-radius: 10px;font-size:200%;position: relative;bottom:40px;background-color:#204060"onclick="document.getElementById('id01').style.display='block';calculatePrice()" class="w3-btn">Buy</button>
            </td>
            <!-- Trigger/Open the Modal -->
            <td>
               
               <div id="id01" class="w3-modal">
                  <div style="background-image: url("img/scale-light.png")" class="w3-modal-content w3-animate-top w3-card-8">
                     <header class="w3-container " style="color:white;background-color:rgba(32, 64, 96, .9);background-image: url("img/scale-light.png")">
                        <span onclick="document.getElementById('id01').style.display='none'" 
                           class="w3-closebtn">&times;</span>
                        <h2>Sea Star</h2>
                        


                     </header>
                     <div class="w3-container" style="color:black">
                      <table >
                        <form id="orderForm" name="form"  method="post">
                           
                              <p style="color:black">Purchasing Information</p>
                              <tr>
                                 <td>Full name:<br>
                                    <input type="text" id="fullname"style="width: 250px;" name="name"><br>
                                 </td>
                                 <td>Phone Number:<br>
                                    <input type="text" id="phone" name="phone"><br>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Address:<br>
                                    <input type="text" id="address" name="address">
                                 </td>
                                 <td>Credit Card Number: <br><input type="text" id="creditcard"  name="creditCard" value="" ></td>
                              </tr>
                              <tr>
                                 <td>City:<br>
                                    <input type="text" id="city" name="city">
                                 </td>
                                 <td>
                                    Shipping Method: <br>
                                    <select name="shipMethod" id="shipping" onchange="calculatePrice()" form="orderForm">
                                       <option spec="Ground" value="0.00" selected>Ground (Free)</option>
                                       <option spec="2-Day" value="9.99">2-Day ($9.99)</option>
                                       <option spec="Overnight" value="19.99">Overnight ($19.99)</option>
                                    </select>
                                 </td>
                              </tr>
                              <tr>
                                 <td>State/Province/Region:<br>
                                    <input type="text" id="state" name="state"><br>
                                 </td>
                                 <td>
                                    Quantity: <br/>
                                    <select name="quantity" id="quantity" onchange="calculatePrice()" form="orderForm">
                                       <option value="1" selected>1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                    </select>
                                 </td>
                              </tr>
                              <tr>
                                 <td>ZIP:<br>
                                    <input type="text" id="zip" name="zip">
                                 </td>
                                 <td>
                                  <h1 style="font-size:20px; color:black"</h1>
                                  <div type="price" id="price" value="44.95" > </div>
                                  <div style="font-size:150%;position:relative;bottom:20px;"type="total" id="total" >Total: $44.95 </div>
                                  
                 
                                 
                                </td>

                              </tr> 
                              </form>


                           </table>
                      
                     </div>

                     <button style="font-size:150%;width:10%;background-color:#204060;position:relative;bottom:30px;left:450px;" onclick="validateForm('Sea Star');" class="w3-btn">Buy</button>  


                     <footer style="background-color:rgba(32, 64, 96, .9);text-align:center;" class="w3-container ">
                        <img class="rotate" id="logo-img" style="padding:13px; width:100px;"src="img/fish-logo.png"/></a>
                     </footer>
                  </div>
               </div>
            </td>
         </tr>
      </div>
      <script>
         var slideIndex = 1;
         showDivs(slideIndex);
         
         function test(){
          console.log("ADSJKJDSKJAKJ");
         }

         function calculatePrice(){
          var quantity = document.getElementById("quantity").value;
          console.log(quantity);
          var shipping = document.getElementById("shipping").value;
          var price = parseFloat(document.getElementById("price").getAttribute("value"));

          console.log(price);

          var total = parseFloat(quantity) * parseFloat(price) + parseFloat(shipping);
          total = total.toFixed(2);
          var node = document.getElementById('total');
          while (node.hasChildNodes()) {
            node.removeChild(node.firstChild);
          }

          console.log(total);

          document.getElementById("total").innerHTML = "Total: $" + total;
          document.getElementById("total").value = total;
         }

         function plusDivs(n) {
           showDivs(slideIndex += n);
         }
         
         function currentDiv(n) {
           showDivs(slideIndex = n);
         }
         
         function showDivs(n) {
           var i;
           var x = document.getElementsByClassName("mySlides");
           var dots = document.getElementsByClassName("demo");
           if (n > x.length) {slideIndex = 1}    
           if (n < 1) {slideIndex = x.length} ;
           for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
           }
           for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" w3-white", "");
           }
           x[slideIndex-1].style.display = "block";  
           dots[slideIndex-1].className += " w3-white";
         }





      </script>
   </body>
</html>