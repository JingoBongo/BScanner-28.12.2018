<?php

require "index.php";
$id = $_GET["id"];
// $user_password=$_GET["user_password"];
$sql= "select id from stuff_table where id ='$id'";

$result=mysqli_query($con,$sql);

if(!mysqli_num_rows($result)>0)
{
    $status="field";
    echo json_encode(array("response"=>$status));
    
}
else
{
    //echo 'true';
    $row=mysqli_fetch_assoc($result);
    $status="Ok";
    echo json_encode(array("response"=>$status));

}
mysqli_close($con);
?>