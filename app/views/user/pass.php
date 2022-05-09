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





<div class="container" style="margin-top: 100px;">

    <div class="row justify-content-center text-center mt-5">
        <div class="col-md-5">
        <main class="form-signin">
      <form action="<?= BASEURL ?>Auth/setPassword" method="POST">
        <!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <?php Flashalert::flash(); ?>
        <h1 class="h3 mb-3 fw-normal">Ubah Password</h1>

        <input type="hidden" name="id" id="" value="<?= $data['user']['id'] ?>">

        <div class="form-floating mt-5">
          <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password lama" name="passwordlama" required>
          <label for="floatingPassword">Password lama</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password baru" name="passwordbaru" required>
          <label for="floatingPassword">Password baru</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Konfirmasi password" name="passwordC" required>
          <label for="floatingPassword">Konfirmasi password</label>
        </div>

        <button class="w-100 btn btn-lg btn-warning" type="submit" name="submit">Ubah</button>
        <p class="mt-4 mb-3 text-muted">&copy; 2022</p>
        <a href="<?= BASEURL ?>Profile" class="mt-5 mb-3" style="text-decoration: none;">Kembali</a>
      </form>
    </main>
        </div>
    </div>

</div>