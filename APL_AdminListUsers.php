<?php
include 'APL_databasConnect.php';

//$user_name = $_POST["AnvandarID"]; 

$sql_query = "SELECT Fnamn, Enamn, AnvandarID FROM Anvandare";
 
$result = mysqli_query($conn,$sql_query);  
if(mysqli_num_rows($result) > 0 )  
{  

    while ($row = mysqli_fetch_assoc($result)){
        
                
                                $emparray[] = $row;
                            }
                            echo json_encode($emparray);

}  
?>
