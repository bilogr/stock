<div class="container"><h1 style="text-align: center">
  <select id="rows" onchange="changeRow()" style="text-align: right;">
    <?php foreach($users as $user) { ?>
    <option value="<?php echo $user->user_id; ?>"<?php if ($user_id == $user->user_id) {echo " selected";} ?>>"<?php echo $user->username; ?>"</option>
    <?php } ?>
  </select>, <select id="actions" onchange="changeAction()">
    <option value="delete">Suppression</option>
    <option value="modify">Modification</option>
    <option value="new">Ajout</option>
  </select>, <select onchange="changeRegion()" id="regions" style="border:none;width:205px;">
    <option value="user">Utilisateurs</option>
    <option value="tag">Tags</option>
    <option value="stocking_place">Lieux de stockage</option>
    <option value="supplier">Fournisseurs</option>
    <option value="item_group">Groupes d'objets</option>
  </select><a class="like-normal" href="<?php echo base_url(); ?>admin/">, <span class="word-administration">Administration</span></a></h1>

  <div><em>Voulez-vous vraiment supprimer l'utilisateur "<?php echo $username; ?>" ?</em></div>
<div class="btn-group">
  <a href="<?php echo base_url().uri_string()."/confirmed";?>" class="btn btn-danger btn-lg">Oui</a>
  <a href="<?php echo base_url()."admin/view_users/";?>" class="btn btn-lg">Non</a>
<?php if($is_active == 1) { ?>
  <a href="<?php echo base_url().uri_string()."/d";?>" class="btn btn-warning btn-lg">Le désactiver</a>
<?php } ?>
</div>

 </div>