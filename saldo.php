<?php
	session_start();
	if (isset($_SESSION['sukses'] ))
		echo “saldo anda : 0”;
	else
		echo “anda belum login”;
?>