

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>admin">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="<?= BASEURL ?>Qa/admin"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger"><?= $data['notify']['notif']; ?></span>
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
        <div class="col-md-11">
            <h3>Kirim Peraturan</h3>

            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-10 offset-md-1">
                    <?php Flashalert::flash(); ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 mt-2">
            <form action="<?= BASEURL ?>admin/ubah" method="POST">

                <input type="hidden" name="id" id="" value="<?= $data['fileUser']['id']; ?>">

                <div class="mb-3">
                    <label for="peraturan" class="form-label">Peraturan:</label>
                    <input type="text" name="peraturan" class="form-control" id="peraturan" value="<?= $data['fileUser']['peraturan']; ?>">
                </div>
                
                <div class="mb-3">
                    <label for="tentang" class="form-label">Tentang:</label>
                    <input type="text" name="tentang" class="form-control" id="tentang" value="<?= $data['fileUser']['tentang']; ?>">
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Ulasan:</label>
                    <textarea class="form-control" name="konten" id="konten" rows="4" ><?= $data['fileUser']['content']; ?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-warning mx-2">Ubah</button>
                <a href="<?= BASEURL ?>admin"><button type="button" class="btn btn-danger mx-2">Kembali</button></a>

            </form>
        </div>
    </div>
</div>