<?php
   if($_POST){
      echo '<pre>';
      echo htmlspecialchars(print_r($_POST, true));
      echo '</pre>';
   }  
?>
<form action="" method="post">
    Nome: <input type="text" name="personal[name]"/><br/>
    Email: <input type="text" name="personal[email]"/><br/>
    Cerveja: <br/>
    <select mutltiple name="beer[]">
         <option value="antartica">Antartica</option>
         <option value="brahma">Brahma</option>
         <option value="skol">Skol</option>
    </select><br/>
    <input type="submit" value="Enviar dados!"/>
</form>