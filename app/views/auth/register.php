
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="#">NaKer</a>
      <div class="navbar-nav">
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-2x"></i>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>auth">Login</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>





<section style="margin-top: 110px;">
    <div class="container">

        <div class="row mb-3">
            <div class="col-md-12">
                <h3>Registrasi</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <form action="<?= BASEURL ?>auth/register" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="fullname" autocomplete="off" required value="<?php if(isset($_POST['submit'])) { echo $_POST['name']; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="masukkan email" autocomplete="off" required value="<?php if(isset($_POST['submit'])) { echo $_POST['email']; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="masukkan Password">
                    </div>
                    <div class="mb-3">
                        <label for="passwordC" class="form-label">Konfirmasi password</label>
                        <input type="password" name="passwordC" class="form-control" id="passwordC" placeholder="Konfirmasi ulang password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    <a href="<?= BASEURL?>auth"><button type="button" class="btn btn-danger">Back to Login</button></a>
                </form>
            </div>
        </div>

    </div>
</section>

