<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>User">NaKer</a>
      <div class="navbar-nav">

        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= strtoupper($data['user']['name']); ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>Profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>

<div class="container mb-4"  style="margin-top: 100px;">

  <div class="row">

    <div class="col-md-10 mb-4">
      <h2>Kirim pertanyaan</h2>
    </div>

    <?php Flashalert::flash(); ?>

    <div class="col-md-8 mt-4">
      <div class="askbox" style="border: 1px groove; padding: 15px;">
        <form action="<?= BASEURL ?>Qa/insertAsk" method="POST">

        <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
        
          <div class="mb-3">
            <label for="judulp" class="form-label">Judul pertanyaan</label>
            <input type="text" name="judulp" class="form-control" id="judulp" placeholder="masukkan judul pertanyaan anda" required>
          </div>

          <div class="mb-3">
            <label for="ask" class="form-label">Pertanyaan</label>
            <textarea class="form-control" name="ask" id="ask" rows="8" placeholder="Tulis Pertanyaan anda" required></textarea>
          </div>

          <button class="btn btn-primary" type="submit" name="submit">Kirim pertanyaan</button>
          <a href="<?= BASEURL ?>User"><button class="btn btn-danger" type="button">Kembali</button></a>

        </form>
      </div>
    </div>

  </div>

</div>



