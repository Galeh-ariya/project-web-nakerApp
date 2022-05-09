
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>Admin">NaKer</a>
      <div class="navbar-nav">

      <a class="nav-link mx-4" aria-current="page" href="#"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger">4</span>
        </a> 
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= $data['user']['name']; ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>Profile/admin">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Admin/insert">Tambah data</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
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
                <a href="<?= BASEURL ?>Admin/edit/<?= $data["id"]; ?>"><button class="btn btn-warning">Ubah</button></a>
            </div>
            <div class="btn2">
                <a href="<?= BASEURL ?>Admin"><button class="btn btn-danger">Kembali</button></a>
            </div>
        </div>

        <div class="col-md-9 mb-5">
            <div class="box" style="background-color: #FAFAFA; padding: 30px;">
                <p><?= $data['userD']['content']; ?></p>
            </div>
        </div>

    </div>

</div>