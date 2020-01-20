<?php  // echo"hallo iedereen<br>";

    // $voornaam = "gabrielle";

    // echo"mijn voornaam is:" . $voornaam . "<br>" ;

    // $username = array("1","gabrielle"," ","Spits","v","00-00-0000","gabrielle-spits@hotmail.com",
    //                     "00-00000000","ja","kader-ict"," ","478","0000 AA","Utrecht");

    // echo"id is:" . $username[0] . "<br>";
    // echo"mijn voornaam is:" . $username[1] . "<br>";
    // echo"mijn tussenvoegsel is:". $username[2] . "<br>";
    // echo"mijn achternaam is:". $username[3] . "<br>";
    // echo"mijn geslacht is:" . $username[4] . "<br>";
    // echo"mijn geboortedatum is:". $username[5] . "<br>";
    // echo"mijn email is:". $username[6] . "<br>";
    // echo"mijn telefoonnummer is:". $username[7] . "<br>";
    // echo"heb ik een diploma:". $username[8] . "<br>";
    // echo"zoja welke?". $username[9] . "<br>";
    // echo"straatnaam::". $username[10] . "<br>";
    // echo"huisnummer is:". $username[11] . "<br>";
    // echo"postcode is:". $username[12] . "<br>";
    // echo"woonplaats is:". $username[13] . "<br>";

    // echo "<pre"; var_dump($username);echo"<pre>";
    // echo "<pre"; var_dump($_POST);echo"<pre>";
    // echo "<hr>";

    // echo"mijn voornaam is:". $_POST["voornaam"] . "<br>";
    // echo"mijn voornaam is:". $_POST["tussenvoegsel"] . "<br>";
    // echo"mijn voornaam is:". $_POST["achternaam"] . "<br>";
    // echo"mijn geslacht is:". $_POST["geslacht"] . "<br>";
    // echo"mijn geboortedatum is:". $_POST["geboortedatum"] . "<br>";
    // echo"mijn e-mail is:". $_POST["e-mail"] . "<br>";
    // echo"mijn telefoonnummer is:". $_POST["telefoonnummer"] . "<br>";
    // echo"diploma is:". $_POST["diploma_keuze"] . "<br>";
    // echo"zoja welke?:". $_POST["diploma"] . "<br>";
    // echo"straatnaam is::". $_POST["straatnaam"] . "<br>";
    // echo"huisnummer is:". $_POST["huisnummer"] . "<br>";
    // echo"postcode is:". $_POST["postcode"] . "<br>";
    // echo"woonplaats is:". $_POST["woonplaats"] . "<br>";

use function PHPSTORM_META\map;

?>


<?php
//met deze server kan je inloggen op de msql-server en een database selecteren
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aanmelden_project_2";

//met deze functie maak je contact met de msql-server
$conn = mysqli_connect($servername, $username , $password , $dbname);


if (isset($_POST['checkbox']) && $_POST['checkbox'] == 'on') {
    $check = true;
    
    //dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel aanmelden_project2
    $sql = 'INSERT INTO `aanmelden_project2` (
                            `voornaam`, 
                            `tussenvoegsel`, 
                            `achternaam`, 
                            `geslacht`, 
                            `geboortedatum`, 
                            `e-mail`, 
                            `telefoonnummer`, 
                            `diploma_keuze`, 
                            `diploma`, 
                            `straatnaam`, 
                            `huisnummer`, 
                            `postcode`, 
                            `woonplaats`) 
                        VALUES (
                            "'.$_POST['voornaam'].'", 
                            "'.$_POST['tussenvoegsel'].'", 
                            "'.$_POST['achternaam'].'", 
                            "'.$_POST['geslacht'].'",
                            "'.date('Y-m-d', strtotime($_POST['geboortedatum'])).'", 
                            "'.$_POST['e-mail'].'",
                            '.$_POST['telefoonnummer'].', 
                            "'.$_POST['diploma_keuze'].'",
                            "'.$_POST['diploma'].'",
                            "'.$_POST['straatnaam'].'", 
                            "'.$_POST['huisnummer'].'",
                            "'.$_POST['postcode'].'",
                            "'.$_POST['woonplaats'].'")';
    //Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt;
    mysqli_query($conn, $sql);

    header("Location: index.php?content=home");
} else {
    $check = false;
    echo"vul alles in";
}
exit; 

?>


    