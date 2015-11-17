<?php include_once("header.php") ?>
 
<form>
    <section>
    <label>Vorname</label>
    <input type="string" name="vorname" class="defaultValue" value="vorname" class="form" id="vorname" required>
        
        
    <label>Nachname</label>
     <input type="string" name="nachname" class="form" id="nachname">
    <label>Straße</label>
     <input type="string" name="strasse" class="form" id="strasse">
    <label>PLZ</label>
         <input type="int" name="plz" class="form" id="plz">
    <br>
        <label>username</label>
        <input type="text" class="defaultValue" value="Username" id="username" />
         <button onclick="myFunction()" type="string" class="form" value="submit" id="okButton">ok</button>
    </section>
</form>

<?php include_once("footer.php") ?>