<?php
	session_start();
	include'koneksi.php'; 

	if(!isset($_SESSION['company'])){
        echo "<script>alert('Silahkan login terlebih dahulu!');</script>";
        echo "<script>location='../login.php';</script>";
    }

    $company_id  = $_GET['id'];
    $queryvalid = $koneksi->query("SELECT * FROM company WHERE company_id = '$company_id'");
	$datavalid  = $queryvalid->fetch_assoc(); 
	
	// Mengambil id url
	$valid_url = $datavalid['company_id'];
	// Mengambil id user
	$user_login = $_SESSION['company']['company_id'];
	// Jika id url dengan id user tidak sesuai
	if($valid_url !== $user_login){
		echo "<script>alert('Data does not match!')</script>";
        echo "<script>location='index.php'</script>";
        exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Ayo Magang | List Lowongan </title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<?php include 'menu.php'; ?>
		<div class="container-fluid">
	    <!-- Page Heading -->
	    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
	    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
	    <div class="card shadow mb-4">
	        <div class="card-header py-3">
	            <h3 class="m-0 font-weight-bold text-primary">List Application</h3>
	        </div>
	        <div class="card-body">
	            <div class="table-responsive">
	                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
	                    <thead>
	                        <tr>
	                            <th>No</th>
								<th>Nama Perusahaan</th>
								<th>Author</th>
								<th>Bidang Perusahaan</th>
								<th>
									<div class="row">
										<div class="col-md-6">
											Aksi
										</div>
									</div>
								</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <?php
								//Query menampilkan data pada tabel "vacancies" 
								$query = $koneksi->query("SELECT * FROM vacancies WHERE company_id = '$_GET[id]'");
								//Membuat nomor urut
								$nomor = 1;
								//Menampilkan data
								while ($dataapp = $query->fetch_assoc()){ 
							?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $dataapp['company_name']; ?></td>
								<td><?php echo $dataapp['author']; ?></td>
								<td><?php echo $dataapp['company_speciality']; ?></td>
								<td>
									<a href="detail-lowongan.php?&id=<?php echo $dataapp['vacancies_id']; ?>" class="btn btn-primary btn-sm"> Detail</a>
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

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>