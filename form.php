<html>
<?php
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form


    $varTitle = filter_var($_POST['formTitle'], FILTER_SANITIZE_STRING);
    $varDescr_it = filter_var($_POST['formDescr_en'], FILTER_SANITIZE_STRING);
    $varDescr_en = filter_var($_POST['formDescr_it'], FILTER_SANITIZE_STRING);
    $varLink = filter_var($_POST['formLink'], FILTER_SANITIZE_STRING);
    $varField = filter_var($_POST['formField'], FILTER_VALIDATE_INT);
    $varPeriod = filter_var($_POST['formPeriod'], FILTER_VALIDATE_INT);
    $varRetribution = filter_var($_POST['formRetribution'], FILTER_VALIDATE_INT);
    $varStudies = filter_var($_POST['formStudies'], FILTER_VALIDATE_INT);
    $varLocation = filter_var($_POST['formLocation'], FILTER_VALIDATE_INT);
    $varQuatily = filter_var($_POST['formQuality'], FILTER_VALIDATE_INT);
    
    $host = "localhost";
    $user = "root";
    $psw = "";
    $db = "database";

    //Connect to the MySQL server
    $conn = mysqli_connect($host ,$user,$psw,$db);
    //Output any connection error
    if ( !$conn ) {
     echo( 'connect error: '.mysqli_connect_error() );
   }
    
    $query = "INSERT INTO fabrik (name, area, retribution, period, region, studies, link, descr_it, descr_en, quality) VALUES(?, ?, ?,?, ?, ?,?, ?, ?,?)";
   
    $stmt=mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt,$query)){
        echo('SQL error');
    }else{
        mysqli_stmt_bind_param($stmt,'siiiiisssi',
                        $varTitle,
                        $varField,
                        $varRetribution,
                        $varPeriod,
                        $varLocation,
                        $varStudies,
                        $varLink,
                        $varDescr_it,
                        $varDescr_en,
                        $varQuatily);
        
        mysqli_stmt_execute($stmt);
    
    }
    
    require_once("conTEST.php");
}
    
    
?>
</html>
