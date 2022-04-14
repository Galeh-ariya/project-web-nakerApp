

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="#"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger">4</span>
        </a> 
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> Name User
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
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
            <form class="d-flex justify-content-center" style="margin-top: 100px;">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" style="width: 300px;">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</section>


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
                            <li class="list-group-item">
                            Tanya <span class="badge bg-secondary text-right">4</span></li>
                            <li class="list-group-item">Jawaban<span class="badge bg-secondary text-right">4</span></li>
                            <div class="dropdown">
                                <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori
                                </p>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Hukum</a></li>
                                    <li><a class="dropdown-item" href="#">Budaya</a></li>
                                    <li><a class="dropdown-item" href="#">dan lain lain</a></li>
                                </ul>
                            </div>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <h2 class="mt-5">Content</h2>
                <hr width="120px">

                <div class="row">
                    <?php foreach($data['content'] as $val) : ?>
                    <div class="col-md-4 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" style="color: black;"><?= $val['judul']; ?></a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">hukum</h6>
                                <p class="card-text">Tenaga kerja adalah setiap orang yang mampu melakukan pekerjaan guna menghasilkan barang dan/atau jasa baik untuk memenuhi kebutuhan sendiri maupun untuk masyarakat <a href="#" style="text-decoration: none;">More...</a></p>
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
    <div class="container ">
        <div class="row p">
            <div class="col-md-4 ">
                <h4>Judul website</h4>
            </div>
            <div class="col-md-6 offset-1">
                <h4>Sosmed</h4>
            </div>
        </div>
    </div>
</div>


    