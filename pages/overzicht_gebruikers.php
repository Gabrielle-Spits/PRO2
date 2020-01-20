<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aanmelden_project_2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `aanmelden_project2`";

$result = mysqli_query($conn, $sql);

$record = "";

while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
    <th scope=''>" . $record["id"] . "</th>
        <td> " . $record["voornaam"] . "</td>
        <td> " . $record["tussenvoegsel"] . "</td>
        <td> " . $record["achternaam"] . "</td>
        <td> " . $record["geslacht"] . "</td>
        <td> " . $record["geboortedatum"] . "</td>
        <td> " . $record["e-mail"] . "</td>
        <td> " . $record["telefoonnummer"] ."</td>
        <td> " . $record["diploma_keuze"] . "</td>
        <td> " . $record["diploma"] . "</td>
        <td> " . $record["straatnaam"] . "</td>
        <td> " . $record["huisnummer"] . "</td>
        <td> " . $record["postcode"] . "</td>
        <td> " . $record["woonplaats"] ."</td>
    </tr>";
}
?>

<h1>overzicht gebruikers</h1>
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">voornaam</th>
                    <th scope="col">tussenvoegsel</th>
                    <th scope="col">achternaam</th>
                    <th scope="col">geslacht</th>
                    <th scope="col">geboortedatum</th>
                    <th scope="col">e-mail</th>
                    <th scope="col">telefoonnummer</th>
                    <th scope="col">diploma</th>
                    <th scope="col">zoja welke?</th>
                    <th scope="col">straatnaam</th>
                    <th scope="col">huisnummer</th>
                    <th scope="col">postcode</th>
                    <th scope="col">woonplaats</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $records;
                ?>
            </tbody>
        </table>
    </div>
</div>