<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="<?= BASEURL ?>qa/admin"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger"><?= $data['notify']['notif']; ?></span>
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


<div class="container mb-5" style="margin-top: 120px;">

<?php Flashalert::flash(); ?>

    <div class="row">
        <div class="col-md-9">
            <h2>Pertanyaan Masuk</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-10">
             <a href="<?= BASEURL ?>admin" style="text-decoration: none;"><button class="btn btn-danger">Kembali</button></a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-10">
        
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
                     <a href="<?= BASEURL ?>Qa/admInsert/<?= $d['id']; ?>"><button type="button" class="btn btn-info">Balas</button></a>
                     <button class="collapsed btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#h<?= $no ?>" aria-expanded="true" aria-controls="collapseOne">Tutup</button>
                    
                </div>
                </div>
            </div>
            <?php $no++; endforeach; ?>

        </div>


        </div>
    </div>

</div>

