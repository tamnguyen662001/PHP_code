<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Register';
include('includes/header.html');


?>



<ul class="top-level-menu">
    <li><a href="#">Bài tập Mảng</a>
	<ul class="second-level-menu">
            <li><a href="./baitap/array/B6_Timkiem.php">Tìm kiếm trong mảng</a></li>
            <li><a href="./baitap/array/B7_Thaythe.php">Thay thế phần tử</a></li>
            <li><a href="./baitap/array/B9_Ghepmang.php">Ghép mảng</a></li>
			<li><a href="./baitap/array/Matran.php">Ma trận số nguyên</a></li>
        </ul></li>
    <li><a href="#">Bài tập Form</a>
	<ul class="second-level-menu">
            <li><a href="./baitap/form/tinhtiendien.php">Tính tiền điện</a></li>
            <li><a href="./baitap/form/pheptinh.php">Tính toán 2 số</a></li>
            <li><a href="#">Seattle</a></li>
        </ul>
	</li>
    <li>
        <a href="#">Bài tập MySQL</a>
        <ul class="second-level-menu">
            <li><a href="./baitap/mysql/B2_Thongtinkhachhang.php">Thông tin khách hàng</a></li>
            <li><a href="./baitap//mysql//B1_Thongtinhangsua.php">Thông tin hãng sữa</a></li>
            <li>
                <a href="#">Thông tin sữa</a>
                <ul class="third-level-menu">
                    <li><a href="./baitap/mysql/B7_Sanpham.php">Thông tin sản phẩm</a></li>
                    <li><a href="./baitap/mysql/B8_Chitietsanphamcophantrang.php">Chi tiết sản phẩm 2</a></li>
                    <li><a href="./baitap/mysql/B5_Thongtinsua2.php">Thông tin sản phẩm 2</a></li>
                </ul>
            </li>
            <li><a href="#">Tìm kiếm</a>
			<ul class="third-level-menu">
                    <li><a href="./baitap/mysql/B9_Timkiemsua.php">Tìm kiếm sữa</a></li>
                    <li><a href="./baitap/mysql/B10_Timkiemnangcao.php">Tìm kiếm sữa nâng cao</a></li>
                    
                </ul></li>

        </ul>
    </li>
	<li><a href="#">Bài tập OOP</a>
	<ul class="second-level-menu">
            <li><a href="./baitap/oop/B2_QuanlyNV.php">Quản lí nhân viên</a></li>
            <li><a href="./baitap/oop/B4_Chuvi.php">Tính chu vi</a></li>
            <li><a href="#">Seattle</a></li>
        </ul>
	</li>
    <li><a href="#">Contact</a></li>
</ul>

	<center>
		<img src="./images/bg.jpg" width="640px"  alt="">
	</center>

<?php include('includes/footer.html'); ?>