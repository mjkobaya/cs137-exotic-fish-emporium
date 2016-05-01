<?php
ini_set('display_errors','on');

$hostname = 'sylvester-mccoy-v3.ics.uci.edu';
$username = 'inf124grp16';
$password = 'n?yUmap3';
$database = 'inf124grp16';


try{
        $conn = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully<br />";
} catch (PDOException $e) {
        //echo "Connection failed: " . $e->getMessage();
}

$link = null;
?>