

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




<section style="padding-top: 70px;">
    <div class="container mt-5">
        <div class="box">
            <br>
            <h3 style="color: white; padding-top: 100px;" class="text-center">Cari data yang kamu butuhkan disini</h3>
            <form action="<?= BASEURL ?>admin/cari/#here" method="POST" class="d-flex justify-content-center" style="margin-top: 100px;">
                <input class="form-control me-1" type="search" name="keyword" placeholder="Search" aria-label="Search" style="width: 300px;" autocomplete="off" autofocus>
                <button id="here" class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 offset-md-1">
        <?php Flashalert::flash(); ?>
        </div>
    </div>
</div>


<section>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3 rmf">
                <h2 class="mt-5">Menu</h2>
                <hr width="77px">

                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem; width: 90%" >
                            <ul class="list-group list-group-flush">
                                <a href="<?= BASEURL ?>admin/listUser" style="text-decoration:none;"><li class="list-group-item d-flex justify-content-between align-items-start">
                                User <span class="badge bg-primary text-right"><?= $data['count']['total']; ?></span></li></a>

                                <a href="<?= BASEURL ?>admin/qa" style="text-decoration:none;"><li class="list-group-item d-flex justify-content-between align-items-start">
                                Tanya Jawab</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <h2 class="mt-5">Peraturan</h2>
                <hr width="120px">

                <div class="row">
                    <?php foreach($data['contents'] as $d) : ?>
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= BASEURL ?>Content/admin/<?= $d['id']; ?>" style="color: black;"><h5 class="card-title"><?= $d['peraturan']; ?></h5></a>

                                <h6 class="card-subtitle mb-2 text-muted"><?= $d['time_create']; ?></h6>

                                <p class="card-text"><?= $d['tentang']; ?> <a href="<?= BASEURL ?>Content/admin/<?= $d['id']; ?>" style="text-decoration: none;">More...</a></p>

                                <a href="<?= BASEURL ?>admin/edit/<?= $d['id']; ?>" class="btn btn-warning">ubah</a>

                                <a href="<?= BASEURL ?>admin/hapus/<?= $d['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')">hapus</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </div>
</section>





    