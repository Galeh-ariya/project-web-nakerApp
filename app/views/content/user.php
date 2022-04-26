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

    <ol class="breadcrumb mb-5">
        <li class="breadcrumb-item"><a href="<?= BASEURL ?>user/index/#here">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Peraturan : UU No 1 Tahun 1946 (Get judul where)</li>
    </ol>

    <div class="row justify-content-between mb-5">

        <div class="col-md-8 mb-4">
            <h3><?= $data['userD']['peraturan']; ?></h3>
            <h5 class="text-muted mb-3"><?= $data['userD']['tentang']; ?></h5>
            <p><b>Diupload</b> <?= date($data['userD']['time_create']); ?></p>
            <hr style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">

            <div class="mb-4">
                <a href="<?= BASEURL ?>Qa"><button class="btn btn-primary">Ajukan pertanyaan</button></a>
                <a href="<?= BASEURL ?>user/index/#here"><button class="btn btn-danger">Kembali</button></a>
            </div>


            <div style="background-color: #EAEAEA;">
                <p style="padding: 20px;"><?= $data['userD']['content']; ?></p>
            </div>
        </div>

        <div class="col-md-3">
            <h3>Peraturan Lain</h3>
            <hr width="200vw" style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Looping Judul</a>
                        <br>
                        Looping Tentang
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Judul Singkat</a>
                        <br>
                        Tentang Panjang : Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, libero.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Judul Panjang : Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, odit.</a>
                        <br>
                        Tentang Singkat
                    </div>
                </li>
            </ol>
        </div>

    </div>

</div>