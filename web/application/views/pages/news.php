<img class="d-block w-100 " src="<?php echo base_url();?>/public/images/news.png" alt="Image" />

<div class="card-deck my-3">
<?php 
    foreach ($data['news'] as $key => $value) {
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
          </div>';
    }

?>
</div>
</div>