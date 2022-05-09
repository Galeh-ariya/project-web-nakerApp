


<div class="container">

<div class="row justify-content-center text-center mt-5">
    <div class="col-md-5">
    <main class="form-signin">
  <form action="<?= BASEURL ?>Auth/forgotpassword" method="POST">
    <!-- <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <?php Flashalert::flash(); ?>
    <h1 class="h3 mb-3 fw-normal">Lupa sandi?</h1>

    <div class="form-floating mt-5">
      <input type="email" class="form-control mb-3" id="floatingInput" autofocus placeholder="name@example.com" name="email" required autocomplete="off" value="<?php if(isset($_POST['submit'])) { echo $_POST['email']; } ?>">
      <label for="floatingInput">Email</label>
    </div>
    <!-- <div class="form-floating">
      <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div> -->

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Reset Password</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    
    <a href="<?= BASEURL ?>Auth" class="mt-5 mb-3" style="text-decoration: none;"><i class="bi bi-arrow-left"></i> Kembali</a>
  </form>
</main>
    </div>
</div>

</div>