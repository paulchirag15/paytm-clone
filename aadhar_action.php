<?php 
$a=$_POST['name'];
$b=$_POST['account_no'];
$c=$_POST['aadhar_no'];

$cn= mysqli_connect("localhost","root","","net_banking") or die(mysqli_connect_error());

$n="INSERT INTO aadhar
{
    'id',
    'name',
    'account_no',
    'aadhar_no'
}
VALUES
{
    NULL,'$a','$b','$c'
}";

mysqli_query($cn,$n) or die(mysqli_error($cn));
echo  "Data inserted successfully.";
?>