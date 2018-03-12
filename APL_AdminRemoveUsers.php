<?php
include 'APL_databasConnect.php';

$Fname = $_POST["Fnamn"];
$Ename = $_POST["Enamn"]; 
$Losenord = $_POST["Losenord"];  
$Telefonnummer = $_POST["Telefonnummer"];  
$Email = $_POST["Email"];  
$Role  = $_POST["Role"];   

if ($Role == "Admin")
{
    
$ChangeUser = "UPDATE Anvandare SET Losenord='$Losenord', Fnamn='$Fname', Enamn='$Ename', Telefonnummer='$Telefonnummer', Email='$Email'"; 

$result = mysqli_query($conn, $ChangeUser); 
}