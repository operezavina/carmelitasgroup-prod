<?php
include 'header.php';
include 'carousel-principal.php';
include 'fair-oaks.php'; ?>
<section id="menu-list" class="section-padding">
<div class="container">
 
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Lunch</a></li>
    <li><a data-toggle="tab" href="#menu2">Dinner</a></li>
    <li><a  class="active" data-toggle="tab" href="#menu3">Bar menu</a></li>
  </ul>

    <div class="tab-content">
        <div id="menu1" class="mix tab-pane fade">
        <?php include 'menu-matriz.php'; ?>
        </div>
        <div id="menu2" class="mix tab-pane fade">
        <?php include 'bar-menu-fair-oaks.php'; ?>    
        </div>
        <div id="menu3" class="tab-pane fade">
        <?php include 'menu-fair-oaks.php'; ?>     
        </div>
    </div>
</div>
</section>
<?php
/*include 'menu-lunch.php'; */
include 'book_table.php';
include 'footer.php';
?>