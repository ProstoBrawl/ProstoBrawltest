<?php
    require("db.php");
    include("includes/navbar.php");
?>

<div class="banner-carousel banner-carousel-2 mb-0">
  <div class="banner-carousel-item" style="background-image:url(https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABeLs6vsoHZVYo0MeH0HcuOXXcXu1UsudNVY-bCjLOWhQZEwKECYgDvGnWddsw2zZComfftzeOANYDQP57qWwyyo30gMj.jpg?r=0cb)">
    <div class="container">
        <div class="box-slider-content">
          <div class="box-slider-text">
              <h2 class="box-slide-title">Стал дед инсайдом?</h2>
              <h3 class="box-slide-sub-title">Скачай мод бравл старс!</h3>
              <p class="box-slide-description">Тебе больше ничего от жизни и не надо, только бравл старс и токийский гуль</p>
              <p>
                <a href="mods.php" class="slider btn btn-primary">Скачать</a>
              </p>
          </div>
        </div>
    </div>
  </div>

  
</div>

<section class="call-to-action no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Лучшие моды только у нас</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="mods.php">Наши моды</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features pb-2">
  <div class="container">
    <div class="row">
        <?php
        $result = $mysqli->query("SELECT * FROM `mods` ORDER BY `id` DESC LIMIT 3");
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
        
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->



<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Ну ты это, качай давай</h2>
          <h3 class="section-sub-title">Конпка выше</h3>

          <img class="img-fluid" src="images/ghoul/deadmeme.png" alt="service-avater-image">
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->


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