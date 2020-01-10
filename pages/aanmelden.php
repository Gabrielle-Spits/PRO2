<h1>aanmeldformulier</h1>


<form>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="voornaam">voornaam</label>
            <input type="voornaam" class="form-control" id="voornaam" placeholder="voornaam" name="voornaam">
        </div>
        <div class="form-group col-md-2">
            <label for="tussenvoegsel">tussenvoegsel</label>
            <input type="tussenvoegsel" class="form-control" id="tusswenvoegsel" placeholder="tussenvoegsel" name="tussenvoegsel">
        </div>
        <div class="form-group col-md-5">
            <label for="achternaam">achternaam</label>
            <input type="achternaam" class="form-control" id="achternaam" placeholder="achternaam">
        </div>

        <div class="form-group col-md-1">
            <label for="geslacht">geslacht</label>
            <select id="geslacht" class="form-control" name="geslacht">
                <option>v</option>
                <option>m</option>
                <option>x</option>
            </select>
        </div>
        <div class="col-5"></div>
        <div class="form-group col-md-6">
            <label for="geboortedatum">geboortedatum</label>
            <input type="geboortedatum" class="form-control" id="e-mail" placeholder="00-00-0000" name="geboortedatum">
        </div>

        <div class="form-group col-md-6">
            <label for="e-mail">e-mail</label>
            <input type="e-mail" class="form-control" id="e-mail" placeholder="e-mail" name="e-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="telefoonnuummer">telefoonnummer</label>
            <input type="telefoonnummer" class="form-control" id="telefoonnummer" placeholder="telefoonnummer" name="telefoonnummer">
        </div>

        <div class="form-group col-md-6">
            <label for="diploma">diploma</label>
            <select id="diploma" class="form-control" name="diploma_keuze">
                <option>ja</option>
                <option>nee</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="diploma">zo ja diploma</label>
            <input type="diploma" class="form-control" id="diploma" placeholder="diploma" name="diploma">
        </div>

        <div class="form-group col-md-4">
            <label for="straatnaam">straatnaam</label>
            <input type="straatnaam" class="form-control" id="straatnaam" placeholder="straatnaam" name="straatnaam">
        </div>
        <div class="form-group col-md-2">
            <label for="huisnummer">huisnummer</label>
            <input type="huisnummer" class="form-control" id="straatnaam" placeholder="huisnummer">
        </div>
        <div class="form-group col-md-2">
            <label for="postcode">postcode</label>
            <input type="postcode" class="form-control" id="postcode" placeholder="postcode">
        </div>
        <div class="form-group col-md-4">
            <label for="woonplaats">woonplaats</label>
            <input type="woonplaats" class="form-control" id="woonplaats" placeholder="woonplaats">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>







<div class="row">
    <div class="col-12" id="footer">
        <?php include("./footer.php"); ?>
    </div>
</div>