
<?php 
    session_start(); 
    include'../koneksi.php'; 
    if(!isset($_SESSION['superadmin'])){
        echo "<script>alert('Silahkan login terlebih dahulu!');</script>";
        echo "<script>location='login.php';</script>";
    }
?><html>
    <head>
        <title><?php echo $_SESSION['superadmin']['username']; ?></title>
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/ayomagang.css">
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="dashboard.php">
                <img src="../assets/img/logo/logo%20putih.png" width="100%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#footer">Butuh Bantuan?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" onclick="return confirm('Yakin Logout?')" href="logout.php">Logout</a>
                    </li>
<!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <?php echo $_SESSION['superadmin']['fullname']; ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="return confirm('Yakin Logout?')" href="logout.php">Logout</a>
                        </div>
                    </li>
-->
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row align-items-top">
                <div class="col-sm-2" id="homemade-navbar1">
                    <div class="nav flex-column nav-pills nav-justified" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</a>
                      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                      <a class="nav-link" id="v-pills-student-tab" data-toggle="pill" href="#v-pills-student" role="tab" aria-controls="v-pills-student" aria-selected="false">Students</a>
                      <a class="nav-link" id="v-pills-company-tab" data-toggle="pill" href="#v-pills-company" role="tab" aria-controls="v-pills-company" aria-selected="false">Companies</a>
                      <a class="nav-link" id="v-pills-vacancy-tab" data-toggle="pill" href="#v-pills-vacancy" role="tab" aria-controls="v-pills-vacancy" aria-selected="false">Vacancies</a>
                      <a class="nav-link" id="v-pills-application-tab" data-toggle="pill" href="#v-pills-application" role="tab" aria-controls="v-pills-application" aria-selected="false">Applications</a>
                    </div>
                </div>
                <div class="col-sm-10" id="homemade-navbar2">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                            <div class="row shadow-sm" style="background-color: #f8f8f8;">
                                <div class="col text-left" style="padding-top:20px;padding-bottom:20px;">
                                    <h3>Welcome back <i><?php echo $_SESSION['superadmin']['fullname']; ?></i>!</h3>
                                    <h5>Let's pickup what we missed!</h5>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col" style="padding-top:20px;padding-bottom:20px;">
                                    <div class="jumbotron shadow">
                                        <h4>Total User : 20</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col" style="padding-top:20px;padding-bottom:20px;">
                                    <div class="jumbotron shadow">
                                        <h4>Total Student terdaftar: 10</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col" style="padding-top:20px;padding-bottom:20px;">
                                    <div class="jumbotron shadow">
                                        <h4>Total Company terdaftar: 10</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="padding-top:20px;padding-bottom:20px;">
                                    <div class="jumbotron shadow">
                                        <h4>Total Bukaan Magang: 1</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col" style="padding-top:20px;padding-bottom:20px;">
                                    <div class="jumbotron shadow">
                                        <h4>Total Aplikasi / Lamaran Magang Siswa: 10</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="container" style="padding-top:20px;padding-bottom:20px;">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>Profile</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <th>ID Kamu</th><td><?php echo $_SESSION['superadmin']['superadmin_id']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fullname</th><td><?php echo $_SESSION['superadmin']['fullname']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Username</th><td><?php echo $_SESSION['superadmin']['username']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th><td><?php echo $_SESSION['superadmin']['email']; ?></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <a href="#" class="btn btn-success">Edit Info ini</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-student" role="tabpanel" aria-labelledby="v-pills-student-tab">
                            <div class="container" style="padding-top:20px;padding-bottom:20px;">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>Student</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive shadow-sm">
                                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" style="font-size:14px;">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>ID Siswa</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Username</th>
                                                        <th>NIS/NIM</th>
                                                        <th>Institusi Pendidikan</th>
                                                        <th>Alamat</th>
                                                        <th>Telepon</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $query = $koneksi->query("SELECT * FROM student");
                                                        $nomor = 1;
                                                        while ($dataapp = $query->fetch_assoc()){ 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo $dataapp['student_id']; ?></td>
                                                        <td><?php echo $dataapp['fullname']; ?></td>
                                                        <td><?php echo $dataapp['username']; ?></td>
                                                        <td><?php echo $dataapp['student_number']; ?></td>
                                                        <td><?php echo $dataapp['institution_name']; ?></td>
                                                        <td><?php echo $dataapp['address']; ?></td>
                                                        <td><?php echo $dataapp['phone']; ?></td>
                                                        <td><?php echo $dataapp['email']; ?></td>
                                                        <td colspan="2" class="text-center">
                                                            <a href="#" class="btn btn-primary btn-sm"> Edit </a> <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $nomor++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
                            <div class="container" style="padding-top:20px;padding-bottom:20px;">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>Company</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive shadow-sm">
                                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" style="font-size:14px;">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>ID Perusahaan</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Username</th>
                                                        <th>SIUP</th>
                                                        <th>Alamat</th>
                                                        <th>Telepon</th>
                                                        <th>Email</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $query = $koneksi->query("SELECT * FROM company");
                                                        $nomor = 1;
                                                        while ($dataapp = $query->fetch_assoc()){ 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo $dataapp['company_id']; ?></td>
                                                        <td><?php echo $dataapp['company_name']; ?></td>
                                                        <td><?php echo $dataapp['username']; ?></td>
                                                        <td><?php echo $dataapp['siup']; ?></td>
                                                        <td><?php echo $dataapp['address']; ?></td>
                                                        <td><?php echo $dataapp['phone']; ?></td>
                                                        <td><?php echo $dataapp['email']; ?></td>
                                                        <td colspan="2" class="text-center">
                                                            <a href="#" class="btn btn-primary btn-sm"> Edit </a> <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $nomor++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-vacancy" role="tabpanel" aria-labelledby="v-pills-vacancy-tab">
                            <div class="container" style="padding-top:20px;padding-bottom:20px;">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>Vacancy</h4>
                                        <hr>
                                    </div>                               
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive shadow-sm">
                                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" style="font-size:14px;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Lowongan</th>
                                                        <th>ID Perusahaan</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Alamat Perusahaan</th>
                                                        <th>Bidang Perusahaan</th>
                                                        <th>Telepon</th>
                                                        <th>Syarat Magang</th>
                                                        <th>Author</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $query = $koneksi->query("SELECT * FROM vacancies");
                                                        $nomor = 1;
                                                        while ($dataapp = $query->fetch_assoc()){ 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo $dataapp['vacancies_id']; ?></td>
                                                        <td><?php echo $dataapp['company_id']; ?></td>
                                                        <td><?php echo $dataapp['company_name']; ?></td>
                                                        <td><?php echo $dataapp['company_address']; ?></td>
                                                        <td><?php echo $dataapp['company_speciality']; ?></td>
                                                        <td><?php echo $dataapp['phone']; ?></td>
                                                        <td><?php echo $dataapp['intern_policies']; ?></td>
                                                        <td><?php echo $dataapp['author']; ?></td>
                                                        <td colspan="2" class="text-center">
                                                            <a href="#" class="btn btn-primary btn-sm"> Edit </a> <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $nomor++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-application" role="tabpanel" aria-labelledby="v-pills-application-tab">
                            <div class="container" style="padding-top:20px;padding-bottom:20px;">
                                <div class="row">
                                    <div class="col text-left">
                                        <h4>Application</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive shadow-sm">
                                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0" style="font-size:14px;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Aplikasi</th>
                                                        <th>ID Lowongan</th>
                                                        <th>ID Siswa</th>
                                                        <th>ID Perusahaan</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Alamat Perusahaan</th>
                                                        <th>Email Perusahaan</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Status Lowongan</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $query = $koneksi->query("SELECT * FROM application");
                                                        $nomor = 1;
                                                        while ($dataapp = $query->fetch_assoc()){ 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo $data["application_id"];?></td>
                                                        <td><?php echo $data["vacancies_id"];?></td>
                                                        <td><?php echo $data["student_id"];?></td>
                                                        <td><?php echo $data["company_id"];?></td>
                                                        <td><?php echo $data["company_name"];?></td>
                                                        <td><?php echo $data["company_address"];?></td>
                                                        <td><?php echo $data["company_email"];?></td>
                                                        <td><?php echo $data["student_name"];?></td>
                                                        <td><?php echo $data["status"];?></td>
                                                        <td colspan="2" class="text-center">
                                                            <a href="#" class="btn btn-primary btn-sm"> Edit </a> <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        $nomor++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include ('../footer.php');;
        ?>
    
    </body>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/fontawesome/js/all.js"></script>
</html>