 <?php 
    include_once 'view/header.php';
    include_once 'view/topmenu.php';
    include_once 'view/footer.php';

    //Biodata
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $handphone = $_POST['handphone'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $about = $_POST['about'];

    //Skill
    $kemampuan = $_POST['kemampuan'];
    $kemampuan_2 = $_POST['kemampuan_2'];
    $kemampuan_3 = $_POST['kemampuan_3'];
    $kemampuan_4 = $_POST['kemampuan_4'];

    //pengalaman
    $pengalaman = $_POST['pengalaman'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    //pengalaman kedua
    $pengalaman_2 = $_POST['pengalaman_2'];
    $judul_2 = $_POST['judul_2'];
    $tanggal_2 = $_POST['tanggal_2'];
    $keterangan_2 = $_POST['keterangan_2'];

    //riwayat sekolah
    $nama_sekolah = $_POST['nama_sekolah'];
    $gelar = $_POST['gelar'];
    $tanggal_tamat = $_POST['tanggal_tamat'];
    $ipk = $_POST['ipk'];

    //penghargaan
    $penghargaan = $_POST['Penghargaan'];
    $penghargaan_2 = $_POST['penghargaan_2'];
    $penghargaan_3 = $_POST['penghargaan_3'];
    $penghargaan_4 = $_POST['penghargaan_4'];
   ?>
 <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h2 class="mb-0"><?php echo "$nama_depan" ?> 
          <span class="text-primary"><?php echo "$nama_belakang" ?></span>
        </h2>
        <div class="subheading mb-5"><?php echo "$alamat" ?> · <?php echo "$handphone" ?> ·
          <a href="https://mail.google.com/mail/u/3/?pli=1#inbox"><?php echo "$email" ?></a>
        </div>
        <p class="lead mb-5"><?php echo "$about" ?></p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo "$pengalaman" ?></h3>
            <div class="subheading mb-3"><?php echo "$judul" ?></div>
            <p><?php echo "$keterangan" ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo "$tanggal" ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo "$pengalaman_2" ?></h3>
            <div class="subheading mb-3"><?php echo "$judul_2" ?></div>
            <p><?php echo "$keterangan_2" ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo "$tanggal_2" ?></span>
          </div>
        </div>

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo "$nama_sekolah" ?></h3>
            <div class="subheading mb-3"><?php echo "$gelar" ?></div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo "$tanggal_tamat" ?></span>
            <p><?php echo "$ipk" ?></p>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo "$kemampuan" ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo "$kemampuan_2" ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo "$kemampuan_3" ?></li>
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo "$kemampuan_4" ?></li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo "$penghargaan" ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo "$penghargaan_2" ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            <?php echo "$penghargaan_3" ?></li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            <?php echo "$penghargaan_4" ?></li>
        </ul>
      </div>
    </section>

  </div>
