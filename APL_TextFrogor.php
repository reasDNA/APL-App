<?php
include 'APL_databasConnect.php';
    if (isset($_GET['Användare'])){
        if( $_GET['Användare']){
   

            echo '<br>';
            $Sok= "SELECT * FROM Anvandare"; 
            $Sokresult = mysqli_query($conn, $Sok); 
            //$timecheck = mysqli_num_rows($Sokresult);
            $emparray=array();

            while ($row=mysqli_fetch_assoc($Sokresult)) {

                $emparray[] = $row;
        
     
                   
            }
            echo json_encode($emparray);
        }
    }
    
?>
