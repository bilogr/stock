<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h1><?php echo $this->lang->line('app_title'); ?></h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
                        <li><a href="<?php echo base_url("auth/logout"); ?>" ><?php echo $this->lang->line('btn_logout'); ?></a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url("auth/login"); ?>" ><?php echo $this->lang->line('btn_login'); ?></a></li>
                        <li><a href="#"><?php echo $this->lang->line('btn_signup'); ?></a></li>
                    <?php } ?>
               </ul>
               
          </div>
     </div>
</div>
<hr/>