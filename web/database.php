<?php


	// $link = mysqli_connect("localhost","root","") or die("khong the ket noi");
	// mysqli_select_db($link,"internet");


	//biến toàn cục
    $database = "internet";
    $servername = "/cloudsql/php-project-226801:us-central1:phpdata";

// Nếu chưa kết nối thì thực hiện kết nối

    $link = mysqli_connect( null, "root","",$database,0,$servername);
    // Thiết lập font chữ kết nối
    mysqli_set_charset($link, 'utf8');
        if (!$link){
                die("connection failed:".mysqli_connect_error());
            }

?>