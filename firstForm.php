<?php include_once("header.php") ?>
 
<form>
    <section>
    <label>Vorname</label>
    <input type="string" name="vorname" class="form" id="vorname">
    <label>Nachname</label>
     <input type="string" name="nachname" class="form" id="nachname">
    <label>Straße</label>
     <input type="string" name="strasse" class="form" id="strasse">
    <label>PLZ</label>
         <input type="int" name="plz" class="form" id="plz">
    <br>
        <span> <a href="overview.php"><button type="button" class="okButton" id="okButton">ok</button></a></span>
    </section>
</form>

<?php include_once("footer.php") ?>