<?php
$query = $this->db->query('SELECT * FROM setting WHERE status=1');
$app = $query->row();
?>

<div id="footer" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="footer-menu-holder">
          <h4>Company</h4>
          <ul class="footer-menu">
            <li><a href="about.html">About us</a></li>
            <li><a href="blog.html">News</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="address-holder">
          <h4>Social Media</h4>
          <div class="phone"><i class="fa fa-facebook"></i> <?php echo $app->facebook; ?></div>
          <div class="email"><i class="fa fa-twitter"></i> <?php echo $app->twitter; ?></div>
          <div class="address">
            <i class="fa fa-instagram"></i> 
            <div><?php echo $app->instagram; ?></div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="address-holder">
          <h4>Contact</h4>
          <div class="phone"><i class="fa fa-phone"></i> <?php echo $app->phone; ?></div>
          <div class="email"><i class="fa fa-envelope"></i> <?php echo $app->email; ?></div>
          <div class="address">
            <i class="fa fa-map-marker"></i> 
            <div><?php echo $app->address; ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/paper-full.min.js"></script>
<script type="text/paperscript" src="<?php echo base_url(); ?>assets/frontend/js/metaball.js" data-paper-canvas="infobg"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
</body>
</html>
