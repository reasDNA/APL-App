<?php
include 'APL_databasConnect.php';

$user_name = $_POST["Anvandarnamn"]; 

$sql_query = "SELECT Namn, Email FROM Anvandare, Narvaro, Arbetsplats where Anvandare.AnvandarID=Narvaro.AnvandarID AND
            Narvaro.ArbetsplatsID=Arbetsplats.ArbetsplatsID AND Anvandare.AnvandarID='$user_name'"; 
$result = mysqli_query($conn,$sql_query);  
if(mysqli_num_rows($result) >0 )  
{  

    while ($row = mysqli_fetch_assoc($result)){

        
                        $emparray[] = $row;
                    }
                    echo json_encode($emparray);


}  
?>


 