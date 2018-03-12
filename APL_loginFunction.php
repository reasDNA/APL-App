<?php
include 'APL_databasConnect.php';

$user_name = $_POST["Anvandarnamn"];  
$user_pass =  $_POST["Losenord"];  
$user_role = $_POST["Role"];

if($user_role == 1){
    
    $sql_query = "SELECT Fnamn, Losenord, AnvandarID FROM Anvandare WHERE Anvandare.AnvandarID='$user_name' AND Anvandare.Losenord='$user_pass' AND Anvandare.AdminID='1'";  
    $result = mysqli_query($conn,$sql_query);  
    if(mysqli_num_rows($result) >0 )  
    {  
    
    echo $inloggad = 1; 
    }  
    else  {   
    echo $fail = 0;
    } 
    }

if($user_role == 2){
    $sql_query = "SELECT Fnamn, Losenord, AnvandarID FROM Anvandare WHERE Anvandare.AnvandarID='$user_name' AND Anvandare.Losenord='$user_pass' AND Anvandare.HandledareID='1'";  
    $result = mysqli_query($conn,$sql_query);  
    if(mysqli_num_rows($result) > 0 ){  
        echo $inloggad = 1; 
    }  
    else  {   
        echo $fail = 0;
    } 
}

if ($user_role == 3){
    $sql_query = "SELECT Fnamn, Losenord, AnvandarID FROM Anvandare WHERE Anvandare.AnvandarID='$user_name' AND Anvandare.Losenord='$user_pass' AND Anvandare.ElevID='1'";  
    $result = mysqli_query($conn,$sql_query);  
    if(mysqli_num_rows($result) > 0 ){      
    echo $inloggad = 1;
    }  
    else  {   
    echo $fail = 0;
    } 
}

if ($user_role == 4){
    $sql_query = "SELECT Fnamn, Losenord, AnvandarID FROM Anvandare WHERE Anvandare.AnvandarID='$user_name' AND Anvandare.Losenord='$user_pass' AND Anvandare.LarareID='1'";  
    $result = mysqli_query($conn,$sql_query);  
    if(mysqli_num_rows($result) > 0 ){      
    echo $inloggad = 1;
    }  
    else  {   
    echo $fail = 0;
    } 
}

if ($user_role == 5){
    $sql_query = "SELECT Fnamn, Losenord, AnvandarID FROM Anvandare WHERE Anvandare.AnvandarID='$user_name' AND Anvandare.Losenord='$user_pass' AND Anvandare.KansliID='1'";  
    $result = mysqli_query($conn,$sql_query);  
    if(mysqli_num_rows($result) > 0 ){      
    echo $inloggad = 1;
    }  
    else  {   
    echo $fail = 0;
    } 
}


?>


<?php    