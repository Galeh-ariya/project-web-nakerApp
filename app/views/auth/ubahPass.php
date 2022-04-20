


<div class="container">

<div class="row justify-content-center text-center mt-5">
    <div class="col-md-5">
    <main class="form-signin">
  <form action="<?= BASEURL ?>auth/cPassword" method="POST">
    <!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <?php Flashalert::flash(); ?>
    <h1 class="h3 mb-3 fw-normal">Ubah sandi dari</h1>
    <h5 class="h5 fw-normal"><?= $data['user_data']; ?></h5>

    <!-- <div class="form-floating mt-5">
      <input type="email" class="form-control mb-3" id="floatingInput" autofocus placeholder="name@example.com" name="email" required autocomplete="off" value="">
      <label for="floatingInput">Email</label>
    </div> -->
    <div class="form-floating mt-5">
      <input type="password" class="form-control mb-2" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password Baru</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="passwordC" required>
      <label for="floatingPassword">Ulangi password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Ubah password</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    
    
  </form>
</main>
    </div>
</div>

</div>