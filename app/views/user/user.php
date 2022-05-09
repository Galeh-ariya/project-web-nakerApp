

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




<section style="padding-top: 70px;">
    <div class="container mt-5">
        <div class="box">
            <br>
            <h3 style="color: white; padding-top: 100px;" class="text-center">Cari data yang kamu butuhkan disini</h3>
            <form action="<?= BASEURL ?>User/cari/#here" method="POST" class="d-flex justify-content-center" style="margin-top: 100px;">
                <input class="form-control me-1" type="search" name="keyword" placeholder="Search" aria-label="Search" style="width: 300px;" autocomplete="off" autofocus>
                <button id="here" class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </div>
    </div>
</section>


<section>
    <div class="container mt-5" style="margin-bottom: 170px;">
        <div class="row justify-content-center">
            <div class="col-md-3 rmf">
                <h2 class="mt-5">Menu</h2>
                <hr width="77px">

                <div class="row">
                    <div class="col">
                    <div class="card" style="width: 18rem; width: 90%" >
                        <ul class="list-group list-group-flush ">

                            <a href="<?= BASEURL ?>Qa" style="text-decoration: none;"><li class="list-group-item d-flex justify-content-between align-items-start">
                            Ajukan Pertanyaan</li></a>

                            <a href="<?= BASEURL ?>User/answer/<?= $data['user']['id'] ?>" style="text-decoration: none;"><li class="list-group-item d-flex justify-content-between align-items-start">Jawaban<span class="badge bg-danger rounded-pill">!</span></li></a>
                            
                            <a href="<?= BASEURL ?>Home/qa" style="text-decoration: none;"><li class="list-group-item d-flex justify-content-between align-items-start">Tanya Jawab</li></a>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <h2 class="mt-5">Peraturan</h2>
                <hr width="120px">

                <div class="row">
                    <?php foreach($data['all'] as $val) : ?>
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= BASEURL ?>Content/index/<?= $val['id']; ?>" style="color: black;"><?= $val['peraturan']; ?></a></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $val['time_create']; ?></h6>
                                <p class="card-text"><?= $val['tentang']; ?> <a href="<?= BASEURL ?>Content/index/<?= $val['id']; ?>" style="text-decoration: none;">tampilkan lebih banyak...</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>         
            </div>
        </div>
</section>


    