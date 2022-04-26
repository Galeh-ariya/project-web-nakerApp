<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>user">NaKer</a>
      <div class="navbar-nav">

        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= strtoupper($data['user']['name']); ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth/logOut" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>

<section style="margin-top: 100px;">
    <div class="container" >
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="<?= BASEURL ?>user/index/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tanya Jawab</li>
        </ol>
        <div class="row">
            <div class="col-md-10">
                <h1>Tanya Jawab</h1>
                <hr style="width: 18vw;">
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 30px;">

    <div class="container">

        <div class="row">

            <?php foreach($data['qall'] as $d) : ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= BASEURL ?>User/asw/<?= $d['judul'] ?>" style="color: black; text-decoration: none;"><h5 class="card-title mb-3"><?= $d['judul']; ?></h5></a>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $d['time_create']; ?></h6>
                        <a href="<?= BASEURL ?>User/asw/<?= $d['judul'] ?>" class="card-link" style="text-decoration: none;">Lihat lebih</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            
        </div>

    </div>

</section>