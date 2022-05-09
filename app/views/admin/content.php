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
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>


<div class="container" style="margin-top: 120px;">

    <div class="row">
        <div class="col-md-10 mb-4">
            <h1><?= str_replace(["-"], ' ', $data['asw']['judul']); ?></h1>
            <hr>
        </div>

        <div class="col-md-10">
            <h5><?= $data['asw']['name']; ?></h5>
        </div>
        <div class="col-md-10">
            <h6 class="text-muted"><?= $data['asw']['time_create']; ?></h6>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-10">
            <h3>Pertanyaan</h3>
        </div>
        <div class="col-md-10">
        <?= $data['asw']['ask']; ?>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-10">
            <hr>
                <h3>Ulasan</h3>
        </div>
        <div class="bgu" style="background-color: #003366; color:white; padding:30px; border-radius:20px;">
            <div class="col-md-10">
            <?= $data['asw']['answer']; ?>
            </div>
        </div>
    </div>

    <a href="<?= BASEURL ?>admin/qa"><button class="btn btn-danger mt-3">Kembali</button></a>

</div>