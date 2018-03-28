<?php
  $site_title = "Vokabeln";
  include 'inc/header.inc.php';
 ?>
 <h1 class="<?= $site_color_accent_text ?>">Vokabeln</h1>
 <div class="fixed-action-btn">
   <a class="btn-floating btn-large red" href="add_voc.php">
     <i class="large material-icons">add</i>
   </a>
 </div>
 
 <ul class="pagination">
  <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
  <li class="active"><a href="#!">1</a></li>
  <li class="waves-effect"><a href="#!">2</a></li>
  <li class="waves-effect"><a href="#!">3</a></li>
  <li class="waves-effect"><a href="#!">4</a></li>
  <li class="waves-effect"><a href="#!">5</a></li>
  <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>
  <ul class="collection">
  </ul>
<?php
  include 'inc/footer.inc.php';
 ?>
