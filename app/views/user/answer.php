<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>user">NaKer</a>
      <div class="navbar-nav">

        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= strtoupper($data['user']['name']); ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>


<div class="container mb-5" style="margin-top: 120px;">

<?php Flashalert::flash(); ?>

    <div class="row">
        <div class="col-md-9">
            <h2>Jawab Masuk</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-10">
             <a href="<?= BASEURL ?>user" style="text-decoration: none;"><button class="btn btn-danger">Kembali</button></a>
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
                    <h5>Admin</h5>
                    <h6 class="text-muted"><?= $d['time_create']; ?></h6>
                    <br>
                     <p><?= $d['answer']; ?></p>
                     <hr>
                     <button class="collapsed btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#h<?= $no ?>" aria-expanded="true" aria-controls="collapseOne">Tutup</button>
                    
                </div>
                </div>
            </div>
            <?php $no++; endforeach; ?>

        </div>


        </div>
    </div>

</div>

