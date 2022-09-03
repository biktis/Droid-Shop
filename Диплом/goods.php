<?php 

$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

}
$result=mysqli_query($mysqli, "SELECT * FROM `goods`");
$products=array();
while($productInfo=mysqli_fetch_assoc($result)){
$products[]=$productInfo;
}
var_dump();
?>