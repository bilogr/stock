<div class="container"><h1 style="text-align: center">
  <select id="rows" onchange="changeRow()" style="text-align: right;">
    <?php foreach($item_groups as $item_group) { ?>
    <option value="<?php echo $item_group->item_group_id; ?>"<?php if ($item_group_id == $item_group->item_group_id) {echo " selected";} ?>>"<?php echo $item_group->name; ?>"</option>
    <?php } ?>
  </select>, <select id="actions" onchange="changeAction()">
    <option value="delete">Suppression</option>
    <option value="modify">Modification</option>
    <option value="new">Ajout</option>
  </select>, <select onchange="changeRegion()" id="regions" style="border:none;width:297px">
    <option value="item_group">Groupes d'objets</option>
    <option value="user">Utilisateurs</option>
    <option value="tag">Tags</option>
    <option value="stocking_place">Lieux de stockage</option>
    <option value="supplier">Fournisseurs</option>
  </select><a class="like-normal" href="<?php echo base_url(); ?>admin/">, <span class="word-administration">Administration</span></a></h1>

  <div><em>Voulez-vous vraiment supprimer le groupe d'objets <?php echo $name; ?> ?</em></div>

<div class="btn-group">
  <a href="<?php echo base_url().uri_string()."/confirmed";?>" class="btn btn-danger btn-lg">Oui</a>
  <a href="<?php echo base_url()."admin/view_item_groups/";?>" class="btn btn-lg">Non</a>
</div>


 <script src="<?php echo base_url(); ?>assets/js/geoline.js">
</script>
