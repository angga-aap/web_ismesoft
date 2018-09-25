<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url()?>">
        <img src="<?php echo base_url();?>/public/images/logo.png" height="70" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php echo ($active_page == 'home') ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url();?>home"  >HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo ($active_page == 'about') ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url();?>about">ABOUT US</a>
          </li>
          <li class="nav-item  <?php echo ($active_page == 'product') ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url();?>product">PRODUCT</a>
          </li>
          <li class="nav-item <?php echo ($active_page == 'career') ? 'active': ''?>" >
            <a class="nav-link" target="_blank" rel="noreferrer" href="https://www.jobstreet.co.id/id/job-search/job-vacancy.php?ojs=10&key=Siba">CAREER</a>
          </li>
          <li class="nav-item <?php echo ($active_page == 'news') ? 'active': ''?>">
            <a class="nav-link" href="<?php echo base_url();?>news">NEWS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
