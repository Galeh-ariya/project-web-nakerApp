<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="<?= BASEURL ?>qa/admin"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger">!</span>
        </a> 
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= $data['user']['name']; ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>profile/admin">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Admin/insert">Tambah data</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>


<div class="container" style="margin-top: 120px;">

    <div class="row">
        <div class="col-md-9">
            <h2>Pertanyaan Masuk</h2>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="row" style="background-color: #F2F2F2; padding-left: 30px; padding-top: 30px; padding-bottom: 30px;">
                <div class="col-md-11" >
                    <a href="#" class="mb-5" style="text-decoration: none;">Terbaru</a>
                </div>

                <div class="col-md-11 mt-4">
                    <a href="#" style="text-decoration: none;">Terlama</a>
                </div>
                
                <div class="col-md-11 mt-4">
                    <a href="<?= BASEURL ?>admin" style="text-decoration: none;">Kembali</a>
                </div>

            </div> 
        </div>

        <div class="col-md-8 offset-md-1">
        
        
        <div class="accordion" id="accordionExample">

            <?php $no = 1; ?>
            <?php foreach($data['req'] as $d) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h<?= $no ?>" aria-expanded="true" aria-controls="collapseOne">
                    <?= $d['judul']; ?>
                </button>
                </h2>
                <div id="h<?= $no ?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong><?= $d['name']; ?></strong>
                    <br> <h6 class="text-muted"><?= $d['time_create']; ?></h6>
                     <p><?= $d['ask']; ?></p>
                     <a href="#"><button type="button" class="btn btn-info">Balas</button></a>
                     <button class="collapsed btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#h<?= $no ?>" aria-expanded="true" aria-controls="collapseOne">Tutup</button>
                    
                </div>
                </div>
            </div>
            <?php $no++; endforeach; ?>

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div> -->

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div> -->

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div> -->
        </div>


        </div>
    </div>

</div>

