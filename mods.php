<?php
    require("db.php");
    include("includes/navbar.php");
?>


<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <?php
        $result = $mysqli->query("SELECT * FROM `mods` ORDER BY `id` DESC");
        while($row = $result->fetch_array()) {
            $name=$row[1];
            $description=$row[2];
            $version=$row[3];
            $link=$row[4];
            $imglink=$row[5];
        ?>
        
        
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img class="w-100" width="360" height="250" src="<?=$imglink?>" alt="service-image">
              </div>
              <div class="d-flex">
                <div>
                    <h3 class="service-box-title"><a href="service-single.html"><?=$name?></a></h3>
                    <p><?=$description?></p>
                    <a class="learn-more d-inline-block" href="<?=$link?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Скачать <?php if($currentversion!=$version){?>(Версия устарела)<?php } ?></a>
                </div>
              </div>
          </div><!-- Service1 end -->
        </div><!-- Col 1 end -->
        <?php } ?>

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
    include("includes/footer.php");
?>


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>