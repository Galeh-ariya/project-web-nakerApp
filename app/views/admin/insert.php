

<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="#"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger">4</span>
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
            <form action="<?= BASEURL ?>admin/tambah" method="POST">

                <div class="mb-3">
                    <label for="peraturan" class="form-label">Peraturan:</label>
                    <input type="text" name="peraturan" class="form-control" id="peraturan" placeholder="contoh: Peraturan Menteri Nomor 3 Tahun 2022" autocomplete="off">
                </div>
                
                <div class="mb-3">
                    <label for="tentang" class="form-label">Tentang:</label>
                    <input type="text" name="tentang" class="form-control" id="tentang" placeholder="contoh: tentang Pelaksanaan Dekonsentrasi" autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Ulasan:</label>
                    <textarea class="form-control" name="konten" id="konten" rows="3"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mx-2">Tambahkan</button>
                <a href="<?= BASEURL ?>admin"><button type="button" class="btn btn-danger mx-2">Kembali</button></a>

            </form>
        </div>
    </div>
</div>