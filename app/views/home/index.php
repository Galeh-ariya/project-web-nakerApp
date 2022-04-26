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




<section style="padding-top: 45px;">
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="section-head d-flex justify-content-between align-items-center border-bottom mt-5 mb-3">
                    <h2>Peraturan</h2>
                    <div class="read-more">
                        <a href="#" class="d-md-block text-decoration-none text-dark">
                            <span>Lihat Selengkapnya <i class="fa fa-arrow-right ml-2"></i></span>
                        </a>
                    </div>
                </div>

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
        <nav aria-label="Page navigation example" class="mt-5">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>


<div class="ftr mt-5">
    <div class="back text-center">
        <a href="#"><i class="fas fa-chevron-up fa-xl" style="color: white;"></i></a>
    </div>
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 text-warning fw-bold">Company Name</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error voluptates laboriosam dolorem illum officiis repellat?</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 text-warning fw-bold">Products</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none;">The Providers</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Creativity</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Source Files</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Bootstrap 5</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 text-warning fw-bold">Useful Links</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Your Account</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Become an Affiliates</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Shipping Rates</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none;">Help</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 text-warning fw-bold">Contact</h5>
                    <p><i class="fas fa-home me-3"></i>Surabaya</p>
                    <p><i class="fas fa-envelope me-3"></i>email@email.com</p>
                    <p><i class="fas fa-phone me-3"></i>+62 1234576</p>
                    <p><i class="fas fa-print me-3"></i>+62 423334</p>
                </div>

                <hr class="mb-4">

                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright ©2022 All rights reserved by: <a href="#" style="text-decoration: none;"><strong class="text-warning">The Providers</strong></a></p>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-end">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

