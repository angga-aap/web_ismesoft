<img class="d-block w-100 img-header" src="<?= base_url().'/public/images/'. $data["news"][$slug]["image"]?>" alt="Image" />
<div class="row mt-3">
    <div class="col-md-8 my-3">
        <h1><?= $data["news"][$slug]["title"] ?></h1>
        <p class="text-justify">
            <?= $data["news"][$slug]["description"] ?>
        </p>
        <p class="text-justify">
            <?= $data["news"][$slug]["html"] ?>
        </p>
    </div>
    <div class="col-md-4">
        <div class="card form">
            <div class="card-header">
                What's on your Mind : 
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <input class="form-control mb-2" type="text" placeholder="Name">
                        <input class="form-control mb-2" type="text" placeholder="Email">
                        <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </form>
                <div class="text-right">
                    <a id="send"><i class="fa fa-paper-plane black-font"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container row mt-5">
    <div style="font-size: 30px;">
        <a href="#"><i class="fa fa-share-alt black-font"></i></a>
        <span> Share Me </span>
        <a href="#"><i class="fab fa-facebook black-font"></i></a> 
        <a href="#"><i class="fab fa-twitter black-font"></i></a>
    </div>
</div>

<hr class="my-5 border-bottom">

<h2 class="text-center mb-5">Recommended By <span class="text-green">ME</span></h2>

<div class="card-deck my-3">
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