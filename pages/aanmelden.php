<h1>Aanmeldformulier</h1>
<h5?>* Is verplicht</h5>

    <form action="./create.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="voornaam">Voornaam*</label>
                <input type="voornaam" class="form-control" id="voornaam" placeholder="voornaam" name="voornaam">
            </div>
            <div class="form-group col-md-2">
                <label for="tussenvoegsel">Tussenvoegsel</label>
                <input type="tussenvoegsel" class="form-control" id="tusswenvoegsel" placeholder="tussenvoegsel" name="tussenvoegsel">
            </div>
            <div class="form-group col-md-5">
                <label for="achternaam">Achternaam*</label>
                <input type="achternaam" class="form-control" id="achternaam" placeholder="achternaam" name="achternaam">
            </div>

            <div class="form-group col-md-1">
                <label for="geslacht">Geslacht*</label>
                <select id="geslacht" class="form-control" name="geslacht">
                    <option>V</option>
                    <option>M</option>
                    <option>X</option>
                </select>
            </div>
            <div class="col-5"></div>
            <div class="form-group col-md-6">
                <label for="geboortedatum">Geboortedatum*</label>
                <input type="geboortedatum" class="form-control" id="e-mail" placeholder="00-00-0000" name="geboortedatum">
            </div>

            <div class="form-group col-md-6">
                <label for="e-mail">E-mail*</label>
                <input type="e-mail" class="form-control" id="e-mail" placeholder="e-mail" name="e-mail">
            </div>
            <div class="form-group col-md-6">
                <label for="telefoonnummer">Telefoonnummer*</label>
                <input type="tel" class="form-control" id="telefoonnummer" placeholder="telefoonnummer" name="telefoonnummer">
            </div>

            <div class="form-group col-md-6">
                <label for="diploma">Diploma*</label>
                <select id="diploma" class="form-control" name="diploma_keuze">
                    <option>ja</option>
                    <option>nee</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="diploma">Zo ja diploma</label>
                <input type="diploma" class="form-control" id="diploma" placeholder="diploma" name="diploma">
            </div>

            <div class="form-group col-md-4">
                <label for="straatnaam">Straatnaam*</label>
                <input type="straatnaam" class="form-control" id="straatnaam" placeholder="straatnaam" name="straatnaam">
            </div>
            <div class="form-group col-md-2">
                <label for="huisnummer">Huisnummer*</label>
                <input type="huisnummer" class="form-control" id="huisnummer" placeholder="huisnummer" name="huisnummer">
            </div>
            <div class="form-group col-md-2">
                <label for="postcode">Postcode*</label>
                <input type="postcode" class="form-control" id="postcode" placeholder="postcode" name="postcode" maxlength="7">
            </div>
            <div class="form-group col-md-4">
                <label for="woonplaats">Woonplaats*</label>
                <input type="woonplaats" class="form-control" id="woonplaats" placeholder="woonplaats" name="woonplaats">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Alles ingevuld?</label>
            </div>
            <div class="col-12">
                <button type="aanmelden" id="button" class="btn btn-primary">Aanmelden</button>
            </div>
        </div>
    </form>
    <br>
    <a class="btn btn-primary" id="button" href="./index.php?content=overzicht_gebruikers" role="button">Overzicht aanmeldingen</a>







    <div class="row">
        <div class="col-12" id="footer">
            <?php include("./footer.php"); ?>
        </div>
    </div>