<?php
	include ('database.php');
	$sql2 = "select * from goicuoc";
	$result2 = mysqli_query($link, $sql2);
	$sql3 = "select * from user";
	$result3 = mysqli_query($link, $sql3);

?>
<?php include('header.php'); ?>
<!-- ************************************************************************************** -->
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Gói internet cáp quang.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>TÊN GÓI CƯỚC</td>
			<td>GIÁ / THÁNG</td>
			<td>BĂNG THÔNG</td>
			<td>THỜI GIAN</td>
			<td>SỬA</td>
			<td>XÓA</td>
			<td><a href='themgc.php'>THÊM</a></td>
		 </tr>
	<?php
	while($row2 = mysqli_fetch_array($result2)){
		$idgc = $row2["idgoicuoc"];
		$ten = $row2["tengoicuoc"];
		$gia = $row2["gia"];
		$bangthong = $row2["bangthong"];
		$thoigian = $row2["thoigian"];
		echo"<tr>
				<td>".$ten."</td>
				<td>".$gia."</td>
				<td>".$bangthong."</td>
				<td>".$thoigian."</td>
				<td><a href='suagc.php?idgc=".$idgc."'>Sửa</a></td>
				<td><a href='xoagc.php?idgc=".$idgc."'>Xóa</a></td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Danh sách khách hàng.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>Tên</td>
			<td>Giới tính</td>
			<td>Số điện thoại</td>
			<td>Email</td>
			<td>Địa chỉ</td>
		 </tr>
	<?php
	while($row2 = mysqli_fetch_array($result3)){
		$ten = $row2["tenuser"];
		$gioitinh = $row2["gioitinh"];
		$sdt = $row2["sdt"];
		$email = $row2["email"];
		$diachi = $row2["diachi"];
		echo"<tr>
				<td>".$ten."</td>
				<td>".$gioitinh."</td>
				<td>".$sdt."</td>
				<td>".$email."</td>
				<td>".$diachi."</td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php') ?>