
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>user">NaKer</a>
      <div class="navbar-nav">
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= strtoupper($data['user']['name']); ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>profile/admin">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>admin/insert">Tambah data</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>


<div class="container" style="margin-top: 120px;">

    <div class="row">

        <div class="col-md-11 mb-4">
            <h3><?= $data['userD']['peraturan']; ?></h3>
            <h5 class="text-muted mb-3"><?= $data['userD']['tentang']; ?></h5>
            <p><b>Diupload</b> <?= date($data['userD']['time_create']); ?></p>
            <hr style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">
        </div>

        
        <div class="col-md-2">
            <div class="btn1 mb-4">
                <a href="<?= BASEURL ?>Qa"><button class="btn btn-primary">Ajukan pertanyaan</button></a>
            </div>
            <div class="btn2">
                <a href="<?= BASEURL ?>user/index/#here"><button class="btn btn-danger">Kembali</button></a>
            </div>
        </div>

        <div class="col-md-9 mb-5">
            <div class="box" style="background-color: #FAFAFA; padding: 30px;">
                <p><?= $data['userD']['content']; ?></p>
            </div>
        </div>

    </div>

</div>