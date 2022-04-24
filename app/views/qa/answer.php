<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>admin">NaKer</a>
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




<div class="container" style="margin-top: 120px;">

<?php Flashalert::flash(); ?>

    <div class="row mt-2">
        <div class="col-md-10 offset-md-1">
            <h2><?= $data['qa']['judul']; ?></h2>
            <hr style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h5><?= $data['qa']['name']; ?></h5>
        </div>
        <div class="col-md-10 offset-md-1">
            <h6 class="text-muted"><?= $data['qa']['time_create']; ?></h6>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="ba1">
                <h3>Pertanyaan</h3>
                <p class="text-justify"><?= $data['qa']['ask']; ?></p>
            </div>
        </div>
        <div class="col-md-10 offset-md-1">
        <hr style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h3>Jawaban</h3>
        </div>

        <div class="col-md-7 offset-md-1 mb-4">
            <form action="<?= BASEURL ?>Qa/insertAswAdm" method="POST">
                <input type="hidden" name="id" id="" value="<?= $data['qa']['id'] ?>">
                <div class="mb-3">
                    <textarea class="form-control" name="answer" id="answer" rows="10" placeholder="Masukkan jawaban disini"></textarea>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Jawab</button>
            </form>

            <a href="<?= BASEURL ?>qa/admin"><button class="btn btn-danger mt-3">Kembali</button></a>
            
        </div>
    </div>

</div>
