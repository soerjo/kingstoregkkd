<?php 
	include_once('../config/connection.php');
	$n=7; 
	if(isset($_POST["submit"])){
		
		session_start();
		$idbarang = $_POST["idbarang"];
		$jumlah_beli = $_POST["jpembelian"];
		$total_harga = $_POST["tharga"];
		$idsatelit = $_POST["idsatelit"];
		$no_kwitansi = "KWI_".random_strings($n);
		
		$_SESSION['jml_beli'] = $jumlah_beli;
		$_SESSION['tot_harga'] = $total_harga;
		
		$query_insert = "insert into barang_terbeli(jumlah_barang_dibeli, total_harga_pembelian, no_kwitansi, fk_informasi_barang, fk_informasi_alamat_kirim) values ('".$jumlah_beli."','".$total_harga."','".$no_kwitansi."','".$idbarang."','".$idsatelit."')";
		
		if (mysqli_query($db,$query_insert)){
			header('Location: ../information-afterpurchase.php');
		}else{
			echo "id brg ".$idbarang."<br/>";
			echo "jmlBeli ".$jumlah_beli."<br/>";
			echo "total_harga ".$total_harga."<br/>";
			echo "satelit ".$idsatelit."<br/>";
			echo "no Kwi ".$no_kwitansi."<br/>";
			
			echo "insert failure happens!";
		}
		
		mysqli_close($db);
	
	}else{
		echo "id barang ".$_POST["idbarang"];
		echo $cons="console.log('not set')";
	}
	
	function random_strings($length_of_string) 
	{ 
	  
		// String of all alphanumeric character 
		$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
	  
		// Shufle the $str_result and returns substring 
		// of specified length 
		return substr(str_shuffle($str_result),  
						   0, $length_of_string); 
	}

?>