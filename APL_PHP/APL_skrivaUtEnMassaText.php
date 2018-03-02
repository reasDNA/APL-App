<?php
include 'APL_databasConnect.php';



if( $_GET['Användare']){
echo "Fnamn ";
echo "Enamn ";
echo "Tele ";
echo "Mail ";
echo "Admin ";
echo "Handledare ";
echo "Elev";
echo "Lärare";
echo "Kansli";

echo '<br>';
$Sok= "SELECT * FROM Anvandare"; 
$Sokresult = mysqli_query($conn, $Sok); 
//$timecheck = mysqli_num_rows($Sokresult);


    while ($row=mysqli_fetch_assoc($Sokresult)) {
        echo $row ['Fnamn'];
echo " ";
        echo $row ['Enamn'];
echo " ";
        echo $row ['Telefonnummer'];

echo " ";
        echo $row ['Email'];
echo " ";
        echo $row ['AdminID'];
echo " ";
        echo $row ['HandledareID'];
echo " ";
        echo $row ['ElevID'];
echo " ";
        echo $row ['LarareID'];
echo " ";
        echo $row ['KansliID'];
        echo '<br>';
    }
}
if (isset($_GET['Elever'])){
if( $_GET['Elever']) {
   
        $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.ElevID='1'";
       // echo $Sokning;
        $Sokresult2 = mysqli_query($conn, $Sokning);
        
        while ($row2=mysqli_fetch_assoc($Sokresult2)) {
            echo $row2 ['fnamn'];
        echo " ";
           echo '<br>';
          
          }
    }
}
    if( $_GET['Handledare']) {
        
            $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.HandledareID='1'";
           // echo $Sokning;
            $Sokresult2 = mysqli_query($conn, $Sokning);
            
            while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                echo $row2 ['fnamn'];
            echo " ";
               echo '<br>';
              
              }
        }

        if( $_GET['Admin']) {
            
                $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.AdminID='1'";
               // echo $Sokning;
                $Sokresult2 = mysqli_query($conn, $Sokning);
                
                while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                    echo $row2 ['fnamn'];
                echo " ";
                   echo '<br>';
                  
                  }
            }

            if( $_GET['Lärare']) {
                
                    $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.LarareID='1'";
                   // echo $Sokning;
                    $Sokresult2 = mysqli_query($conn, $Sokning);
                    
                    while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                        echo $row2 ['fnamn'];
                    echo " ";
                       echo '<br>';
                      
                      }
                }

                if( $_GET['Kansli']) {
                    
                        $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.KansliID='1'";
                       // echo $Sokning;
                        $Sokresult2 = mysqli_query($conn, $Sokning);
                        
                        while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                            echo $row2 ['fnamn'];
                        echo " ";
                           echo '<br>';
                          
                          }
                    }

                    if( $_GET['Arbetsplats']) {
                        
                            $Sokning= "SELECT * FROM Arbetsplats";
                           // echo $Sokning;
                            $Sokresult2 = mysqli_query($conn, $Sokning);
                            
                            while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                                echo $row2 ['Namn'];
                            echo " ";
                            echo $row2 ['Telefonnummer'];
                            echo " ";
                            echo $row2 ['Mailadress'];
                            echo " ";
                               echo '<br>';
                              
                              }
                        }    

                        if( $_GET['APLPeriod']) {
                            echo "Fnamn ";
                            echo "Årskurs ";
                            echo "Termin ";
                            echo "startdatum ";
                            echo "slutdatum";
                            echo '<br>';
                                $Sokning= "SELECT * FROM APLPeriod";
                               // echo $Sokning;
                                $Sokresult2 = mysqli_query($conn, $Sokning);
                                
                                while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                                echo $row2 ['Arskurs'];
                                echo " ";
                                echo $row2 ['Termin'];
                                echo " ";
                                echo $row2 ['startdag'];
                                echo " ";
                                echo $row2 ['slutdag'];
                                echo " ";
                                   echo '<br>';
                                  
                                  }
                            }   

                            if( $_GET['Elever+Praktiserar']) {
                                echo "Fnamn ";
                                echo "Årskurs ";
                                echo "Termin ";
                                echo "Arbetsplats";
                                echo '<br>';
                                    $Sokning= "SELECT fnamn, Termin, Arskurs, Namn FROM Anvandare, Narvaro, APLPeriod, Arbetsplats where Anvandare.AnvandarID=Narvaro.AnvandarID AND Anvandare.ElevID='1' AND Narvaro.ArbetsplatsID=Arbetsplats.ArbetsplatsID AND Narvaro.PeriodID=APLPeriod.PeriodID";
                                   // echo $Sokning;
                                    $Sokresult2 = mysqli_query($conn, $Sokning);
                                    
                                    while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                                        echo $row2 ['fnamn'];
                                    echo " ";
                                    echo $row2 ['Arskurs'];
                                    echo " ";
                                    echo $row2 ['Termin'];
                                    echo " ";
                                    echo $row2 ['Namn'];
                                    echo " ";

                                       echo '<br>';
                                      
                                      }
                                } 

                            if( $_GET['Handledare+Handleder']) {
                                    
                                    $Sokning= "SELECT fnamn FROM Anvandare, Narvaro where Anvandare.AnvandarID=Narvaro.AnvandarID AND Anvandare.HandledareID='1'";
                                    // echo $Sokning;
                                    $Sokresult2 = mysqli_query($conn, $Sokning);
                                        
                                    while ($row2=mysqli_fetch_assoc($Sokresult2)) {
                                        echo $row2 ['fnamn'];
                                    echo " ";
                                        echo '<br>';
                                          
                                        }
                                } 

                      


if( $_GET['Elever-Praktiserar']) {

    $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.ElevID='1' AND Fnamn NOT IN (SELECT fnamn from Anvandare, Narvaro where Anvandare.AnvandarID=Narvaro.AnvandarID)";
   // echo $Sokning;
    $Sokresult2 = mysqli_query($conn, $Sokning);
    
    while ($row2=mysqli_fetch_assoc($Sokresult2)) {
        echo $row2 ['fnamn'];
    echo " ";
       echo '<br>';
      
      }
}

if( $_GET['Handledare-Handleder']) {
    
        $Sokning= "SELECT fnamn FROM Anvandare where Anvandare.HandledareID='1' AND Fnamn NOT IN (SELECT fnamn from Anvandare, Narvaro where Anvandare.AnvandarID=Narvaro.AnvandarID)";
       // echo $Sokning;
        $Sokresult2 = mysqli_query($conn, $Sokning);
        
        while ($row2=mysqli_fetch_assoc($Sokresult2)) {
            echo $row2 ['fnamn'];
        echo " ";
           echo '<br>';
          
          }
    }

?>
