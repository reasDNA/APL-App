<?php
include 'APL_databasConnect.php';
$AnvandarID = $_POST["AnvandarID"];
$Fname = $_POST["Fnamn"];
$Ename = $_POST["Enamn"]; 
$Losenord = $_POST["Losenord"];  
$Telefonnummer = $_POST["Telefonnummer"];  
$Email = $_POST["Email"];  
$Role  = $_POST["Role"];   

if ($Role == "Admin")
{
    
$ChangeUser = "UPDATE Anvandare SET Losenord='$Losenord', Fnamn='$Fname', Enamn='$Ename', Telefonnummer='$Telefonnummer', Email='$Email', AdminID=1, HandledareID=0, ElevID=0, LarareID=0, KansliID=0 Where Anvandare.AnvandarID='$AnvandarID'"; 

$result = mysqli_query($conn, $ChangeUser); 
}

if ($Role == "Handledare")
{
    
$ChangeUser = "UPDATE Anvandare SET Losenord='$Losenord', Fnamn='$Fname', Enamn='$Ename', Telefonnummer='$Telefonnummer', Email='$Email', AdminID=0, HandledareID=1, ElevID=0, LarareID=0, KansliID=0 Where Anvandare.AnvandarID='$AnvandarID'"; 

$result = mysqli_query($conn, $ChangeUser); 
}
