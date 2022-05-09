<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL ?>Admin">NaKer</a>
      <div class="navbar-nav">

        <a class="nav-link mx-4" aria-current="page" href="<?= BASEURL ?>Qa/admin"><i class="bi bi-chat-left-text-fill fa-1x"></i><span class="badge bg-danger"><?= $data['notify']['notif']; ?></span>
        </a> 
        
        <div class="dropdown">
            <p class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fa-1x"></i> <?= $data['user']['name']; ?>
            </p>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?= BASEURL ?>Profile/admin">Profile</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Admin/insert">Tambah data</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL ?>Auth/logOut" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a></li>
            </ul>
        </div>
      </div>
  </div>
</nav>


<div class="container" style="margin-top: 140px;">
    <div class="row justify-content-center">
    <?php Flashalert::flash(); ?>
        <div class="col-md-12 mt-2 text-center">
            <h2>Daftar User</h2>
        </div>
        <div class="col-md-12">
        <form action="<?= BASEURL ?>Admin/cariUser/#here" method="POST" class="d-flex justify-content-center mt-4">
                <input class="form-control me-1" type="search" name="keyword" placeholder="Search" aria-label="Search" style="width: 300px; caret-color: #003366;" autocomplete="off" autofocus>
                <button id="here" class="btn btn-outline-primary" type="submit" name="submit">Search</button>
            </form>
        </div>
        <div class="col-md-12 mt-5">
            <a href="<?= BASEURL ?>Admin"><button class="btn btn-danger">Kembali</button></a>
        </div>
    </div>
</div>


<div class="container mt-3 table-responsive mb-1">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <table class="table table-hover table-striped">
                <thead class="text-center" style="background-color: #003366; color:white;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Telp.</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1; ?>
                    <?php foreach($data['user_data'] as $d) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $d['name']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['gender']; ?></td>
                        <td><?= $d['telp']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= ($d['is_active'] == 1) ? 'aktif' : 'tidak aktif'; ?></td>
                        <td><a href="<?= BASEURL ?>Admin/deleteUser/<?= $d['id'] ?>"><button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus user?')">Hapus</button></a></td>
                    </tr>
                        <?php $no++; endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>