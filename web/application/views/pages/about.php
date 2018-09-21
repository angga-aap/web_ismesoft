<img class="d-block w-100 img-header" src="<?php echo base_url();?>/public/images/isme.jpg" alt="Image" />

<h3 class="my-5 text-center">
  ISME Soft is an integrated business transaction software that makes it easy for you
  to sell, purchase and track your inventory and get financial reports easily anywhere.
</h3>

<b>
  <h2 class="my-5 text-center">Why Always With <span class="text-green">ME ?</span></h2>
</b>

<div class="card-deck mt-3 mb-5">
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

<div class="row mb-3">
  <div class="col-md-7">
    <img class="d-block w-100" src="<?php echo base_url();?>/public/images/contract.jpg" alt="Image" />
  </div>
  <div class="col-md-5" style="display: table; ">
    <form action="#" class="form-inline align-bottom join-us" style="display: table-cell">
        <h2>Join Us Now</h2>
        <div class="row my-3">
          <div class="col-md-8 mb-2">
            <input type="text" name="" placeholder="Email" class="form-control w-100">
          </div>
          <div class="col-md-4">
            <button class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
        <h5>Join us and others to improve our business 
                and see how our features help you make your 
                business a success
        </h5>
    </form>
  </div>
</div>