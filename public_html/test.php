<!DOCTYPE html>
<html>

</html>
<?php
              
        require_once("connect.php");

       <!--  $sql = "INSERT INTO purchase_info (FullName, Address) VALUES ('John', '123 Candy Cane Lane')";
        $conn->exec($sql);

        echo "Inserted into table"; -->

        if (isset ($_POST['submit'])) {
        	$sql = "INSERT INTO purchase_info (FullName, Address) VALUES ('" . $_POST['firstname'] . ", '" . $_POST['lastname'] . "')";
        	$conn->exec($sql);
        	echo "Inserted";
        }
       <!-- $conn = null;-->
?>
<html>
<body>

<form>
  First name:<br>
  <input type="text" name="firstname">
  <br>
  Last name:<br>
  <input type="text" name="lastname">


</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>
<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>