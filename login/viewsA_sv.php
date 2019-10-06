<?php include'connect.php';	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/views.css">
    <link rel="stylesheet" href="css/Sv.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Trang chủ</title>
</head>
<?php include'top.php' ?>

		<div class="menu">
			<a href="viewsAdmin.php">Trang chủ</a>
			<a href="viewsA_sv.php" class="active">Tra cứu điểm</a>
			<a href="">Đăng ký học</a>
			<a href="">Tra cứu học phí</a>
		</div>
	</div>
	<div class="main">
		<div class="side">
			<h5>MENU MAIN</h5>
			<a href="" class="active">Tin tức</a>
			<a href="">Hướng dẫn & Trợ giúp</a>
			<a href="">Cài đặt</a>
		</div>
		<div class="content">
			<div>
				<form method="get">
					<input type="text" name="Search" placeholder="  Tìm kiếm sinh viên" class="search" style="background-color: rgba(0,0,0,0.1);margin: 8px 0px;">
					<button name="ok"><i class="fas fa-search" style="-webkit-appearance: none;"></i></button>
					
				</form>
			</div>
			<form method="get">
				<div class="choose">
					<div>
						<label>Khoa:</label>
						<br>
					    <select>
					        <option selected>Công nghệ thông tin</option>
					        <option disabled>Công trình</option>
					        <option disabled>Kinh tế</option>
					        <option disabled>Quản trị kinh doanh</option>
					    </select>
					</div>
					<div>
						<label>Khóa:</label>
						<br>
					    <select>
					        <option selected>K20</option>
					        <option disabled>K19</option>
					        <option disabled>K18</option>
					        <option disabled>K17</option>
					    </select>
					</div>
					<div>
						<label>Năm học:</label>
						<br>
					    <select>
					        <option selected>2019-2020</option>
					        <option disabled>2018-2019</option>
					        <option disabled>2017-2018</option>
					    </select>
					</div>
					
				</div>
				<div class="choose">
					
					<div>
						<label>Học kỳ:</label>
						<br>
					    <select>
					        <option selected>1</option>
					        <option disabled>2</option>
					        <option disabled>--</option>
					    </select>
					</div>
					<div>
						<label>Lớp:</label>
						<br>
					    <select name="Lop">
					        <option selected>---</option>
					        <option value ="20HT">20HT</option>
					        <option value ="20TH1">20TH1</option>
					        <option disabled>20TH2</option>
					        <option disabled>20PM</option>
					    </select>
					</div>
				</div>
				<div style="text-align: right;"><input type="submit" name="view" value="Xem"></div>
				<div>
					<?php include'search.php' ?>
				</div>
				<div class="result">
					<?php include'result.php' ?>
				</div>
				<iframe src="details.php" name="detail" width="100%" height="400" style="border:none; ">
					
				</iframe>
				<?php 
					if(isset($_GET['btnEdit'])){
						header('location:adminEdit.php');
					}
					elseif (isset($_GET['btnDel'])) {
						header('location:adminEdit.php');
					}
				 ?>
			</form>
		</div>
	</div>

<?php include'bottom.php' ?>