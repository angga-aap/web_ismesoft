<div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-height" src="<?php echo base_url();?>/public/images/home1.jpg" alt="First slide">
      <div class="carousel-caption text-left pl-3">
        <h5>Run Your Business Wherever & Whenever</h5>
        <p class="d-none d-md-block">ISME Soft is an integrated business transaction software for small and medium business to manage business in realtime, online, easy</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-height" src="<?php echo base_url();?>/public/images/home2.png" alt="First slide">
      <div class="carousel-caption text-left pl-3">
        <h5>Your Best Business Partner</h5>
        <p class="d-none d-md-block">To be the best and the most complete national company which focuses in giving an integrated business solution, in order to increase client’s business</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-height" src="<?php echo base_url();?>/public/images/home3.png" alt="First slide">
      <div class="carousel-caption text-left pl-3">
        <h5>What's New?</h5>
        <p class="d-none d-md-block">See our latest activities, always follow our client’s development & also many news about national/ international business world</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="card-deck">
<?php 
    $loop = 0;
    foreach ($data['news'] as $key => $value) {
        $loop += 1;
        if ($loop <= 3) {
            echo '
            <div class="card border-0">
              <img class="card-img-top" src="'.base_url().'/public/images/'.$value['image'].'" height="250px" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">'.$value['title'].'</h5>
                <p class="card-text text-justify">'.$value['description'].'</p>
              </div>
              <div class="card-footer bg-white border-0 text-right">
                <a href="'.base_url().'news/'.$key.'">
                  <small>Baca selengkapnya...</small>
                </a>
              </div>
            </div>
        ';
        }
    }
?>
</div>

<hr class="my-5 border-bottom">

<h2 class="text-center mb-5">See What They Say About <span class="text-green">ME</span></h2>

<div class="card-deck mt-3 mb-5 review">
  <?php 
    foreach ($data['review'] as $key => $value) {
      echo '
      <div class="card border-0">
        <img class="card-img-top rounded-circle mx-auto" src="'.base_url().'/public/images/'.$value['image'].'" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">'.$value['name'].'</h5>
          <h6 class="text-muted text-center">'.$value['position'].'</h6>
          <p class="card-text text-justify">'.$value['text'].'</p>
        </div>
      </div>
      ';
    }
  ?>
</div>
</div>