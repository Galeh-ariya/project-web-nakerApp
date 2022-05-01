<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>home">NaKer</a>
      <div class="navbar-nav">

      <a href="<?= BASEURL ?>Home/qa"class="nav nav-link active">Q&A</a>
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth">Login</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/register">Register</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>




<section style="padding-top: 45px; margin-top: 50px;">
    <div class="container mt-5">
        <div class="box">
            <br>
            <h3 style="color: white; padding-top: 100px;" class="text-center">Cari data yang kamu butuhkan disini</h3>
            <form action="<?= BASEURL ?>home/cari/#here" method="POST" class="d-flex justify-content-center" style="margin-top: 100px;">
                <input class="form-control me-1" type="search" name="keyword" placeholder="Search" aria-label="Search" style="width: 300px;" autocomplete="off" autofocus>
                <button id="here" class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </div>
    </div>
</section>




<section>
    <div class="container mt-5" style="margin-bottom: 170px;">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h2 class="mt-5">Peraturan</h2>
                <hr width="120px">

                <div class="row">
                    <?php foreach($data['all'] as $d) : ?>
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $d['peraturan']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $d['time_create']; ?></h6>
                                <p class="card-text"><?= $d['tentang']; ?></p>
                                <a href="<?= BASEURL ?>auth" class="btn btn-primary">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>




