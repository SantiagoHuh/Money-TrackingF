<h2>Add account</h2>

<div class="row">
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>accounts/add" method="POST">
  <div class="row">
    <div class=" input-field col s12 m12 l12">
    
    <label for="name">Name: </label>
    <input id="name" type="text" class="validate" name="name">
  </div>
</div>
<div class="row">
     <div class="input-field col s12 m12 l12">
        
      <select name="user_id" >
        <option value="" disabled selected>Elige el usuario</option>
    <?php foreach ($users as $user): ?>
        <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
    <?php endforeach; ?>
      </select>
     </div>
  </div>
   <div class="row">
     <div class="col s12 m12 l12">
      <button type="submit" name="add" value="Save"><strong>Enviar</strong></button>
    </div>
  </div>
</form>
<br>
<form action="<?php echo APP_URL; ?>accounts/index">
  <input type="submit" value="Ver datos">
</form>
</div>