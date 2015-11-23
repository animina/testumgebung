<?php include_once("header.php") ?>
 
<form name='testRegistrierung' onSubmit="return formValidation();">
    
   
    <section>
    <label for="vorname">Vorname</label>
    <input type="string" name="vorname" class="defaultValue" value="vorname" class="form" id="vorname" required>
        
        
    <label for="nachname">Nachname</label>
     <input type="string" name="nachname" class="form" id="nachname">
    <label for="strasse">Straße</label>
     <input type="string" name="strasse" class="form" id="strasse">
    <label for="plz">PLZ</label>
         <input type="int" name="plz" class="form" id="plz">
    <br>
        <label for="username">username</label>
        <input type="text" class="defaultValue" value="Username" id="username" name="username" />
        <input type="submit" name="submit" value="submit" />
    </section>
</form>

<?php include_once("footer.php") ?>