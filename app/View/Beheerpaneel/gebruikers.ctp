<?php
echo $this->Html->charset();
echo $this->Html->css('beheerStyle');
//
echo $this->Html->script('jquery');
echo $this->Html->script('modalScript');
echo $this->Html->css('homeStyle');
?>

<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script LANGUAGE="JavaScript"> 
$(document).ready(function()
    {
      $('.badd').click(function()
      {
        $('.add').show();
        $('.edit').hide();
        $('.delete').hide();

      });      

      $('.bedit').click(function()
      {
        $('.add').hide();
        $('.edit').show();
        $('.delete').hide();
      });

      $('.bdelete').click(function()
      {
        $('.add').hide();
        $('.edit').hide();
        $('.delete').show();
      });
    });

</script>
</head>

<body>

	<a href="<?= $this->Html->url(array('controller' => '', 'action' => 'users/add')); ?>"><button class="menu-button-style">
    	Toevoegen
    </button> </a>

  <button class="menu-button-style openmodale bedit">
      Aanpassen
  </button>
  
  <button class="menu-button-style openmodale bdelete">
      Verwijderen
  </button>
</div>

<!-- MODAL -->
<div class="modale" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-header">
      <h2 class="add">Gebruiker Toevoegen</h2>
      <h2 class="edit">Gebruiker Bewerken</h2>
      <h2 class="delete">Gebruiker Verwijderen</h2>
      <a href="#" class="modal-closebutton closemodale" aria-hidden="true">&times;</a>
    </div>

    <div class="modal-body">
      
      <input class="add" type="text" name="u" placeholder="User" size="20" /><br>
      <input class="add" type="text" name="p" placeholder="&bull;&bull;&bull;&bull;" size="20" />

<p class="delete" style="color:black">Typ de naam in van de gebruiker die u wilt verwijderen.
<p class="delete" style="color:black">Klik daarna op "Verwijder".

<input class="edit" type="text" name="p" placeholder="LijstMetGebruikers" size="20" />

  <div class="select-modal-option">

  <!-- EDIT USER -->
  <select class="edit">
  <option value="gebruiker" class="modal-button edit">Gebruiker</option>
  <option value="klant" class="modal-button edit>Klant</option>
  <option value="beheerder" class="modal-button edit>Beheerder</option>
  </select>
  <!-- END EDIT USER -->

  <!-- DELETE USER -->
  <!-- <tr>
  <td>Gebruikersnaam: </td>
  <td> -->
  <select class="delete">

<?php
             $connect = mysql_connect("localhost","root", "");
             if (!$connect) {
                 die(mysql_error());
             }
             mysql_select_db("customsknowledge");

$results = mysql_query("SELECT username FROM users");
//while ($row = mysql_fetch_array($results)){
//echo "<option value=\"$username\">" . $row['username'] . "</option>";
//}
?>
</select>
</td>
</tr>
<!-- END DELETE USER -->

  </div>
      <button href="#" class="modal-button edit" id="btn_ingresar">Toepassen</button>
      <!-- <button onClick="gebruikers" class="modal-button delete" id="user_delete">Verwijder</button> -->

      <form action="gebruikers" method="post">
      <input name="name" type="text" value="" class="modal-button delete"/>
      <input name="Submit" type="submit" value="Verwijder" class="modal-button delete"/>
      </form>

      </div>
    </div>
  </div>
</div>
<!-- END MODAL-->

 <!-- TABLE CONTAINING USERS -->
 <table class="tg">
   <thead>
   <tr>
     <th class="tg-031e"><b>ID</b></th>
     <th class="tg-031e"><b>Naam</b></th>
     <th class="tg-031e"><b>Wachtwoord</b></th>
     <th class="tg-031e"><b>Rol</b></th>
     <th class="tg-031e"><b>Aangemaakt</b></th>
     <th class="tg-031e"><b>Aangepast</b></th>
   </tr>
         </thead>
         <tbody>
         <?php
             $connect = mysql_connect("localhost","root", "");
             if (!$connect) {
                 die(mysql_error());
             }
             mysql_select_db("customsknowledge");
             $results = mysql_query("SELECT * FROM users");
             while($row = mysql_fetch_array($results)) {
             ?>
                 <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo "******"; ?>
                    <td><?php echo $row['role']?></td>
                    <td><?php echo $row['created']?></td>
                    <td><?php echo $row['modified']?></td>
                 </tr>

             <?php
             }
             ?>
             </tbody>
             </table>
 			  <!-- END TABLE -->
</body>
<footer></footer>