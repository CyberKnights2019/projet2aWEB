<div class="card">
  <?php
  include "C:/xampp/htdocs/Projet_integ1/core/commandeC.php";

  $t=$_GET['n'];

  $cmd=new CommandeC();

  $l=$cmd->nbrZone($t);
  foreach($l as $x)
  $nbr=$x['s'];

   ?>
  <img src="city/<?php echo $t ?>.jpg" alt="<?php echo $t ?>" style="height:30%">
  <div class="container">
    <h4><b><?php echo "Region : $t"; ?></b></h4>
    <p><?php echo "$nbr commandes"; ?></p>
  </div>
</div>
