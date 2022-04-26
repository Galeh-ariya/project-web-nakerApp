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

<div class="container" style="margin-top: 120px;">

    <ol class="breadcrumb mb-5">
        <li class="breadcrumb-item"><a href="<?= BASEURL ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= BASEURL ?>Home/qa">Tanya Jawab</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tanya Jawab : Cewek TikTok (Get judul where)</li>
    </ol>

    <div class="row justify-content-between mb-5">
        <div class="col-md-8">
            <h1><?= str_replace(["-"], ' ', $data['asw']['judul']); ?></h1>
            <hr style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">

            <h6 class="ms-5 mt-5"><?= $data['asw']['name']; ?> | <span class="text-muted"><?= $data['asw']['time_create']; ?></span></h6>

            <p class="mt-5" style="text-align: justify;"><?= $data['asw']['ask']; ?></p>

            <div class="p-3 mt-5" style="background-color: #eaeaea;">
                <h3>Ulasan</h3>
                <p class="mt-3" style="text-align: justify;"><?= $data['asw']['answer']; ?></p>
            </div>
        </div>

        <div class="col-md-3">
            <h3>Tanya Jawab Lain</h3>
            <hr width="230vw" style="height:3px; border:0; box-shadow: 0 5px -5px #8c8c8c inset">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Looping Judul</a>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Judul Singkat</a>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <a href="#" class="fw-bold text-dark text-decoration-none">Judul Panjang : Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, odit.</a>
                    </div>
                </li>
            </ol>
        </div>
    </div>

</div>