<?php
namespace Uas;
class Laptop {
	function tambahLaptop($brand, $model, $thn_keluar){
		$db = new Db();
		
		$stmt = $db->prepare("INSERT INTO laptop (brand, model, thn_keluar) VALUES (?, ?, ?)");
		$stmt->bindParam(1, $brand);
		$stmt->bindParam(2, $model);
		$stmt->bindParam(3, $thn_keluar);
		$stmt->execute();
		
		echo "Data Laptop berhasi di simpan";
	}
}