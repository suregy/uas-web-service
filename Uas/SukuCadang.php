<?php
namespace Uas;
class SukuCadang{
  function tambahSukuCadang($laptop_id,$kategori_id,$no_sukucadang,$keterangan){
    $db = new Db();
    $stmt = $db->prepare("INSERT INTO sukucadang (laptop_id,kategori_id,no_sukucadang,keterangan) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $laptop_id);
    $stmt->bindParam(2, $kategori_id);
    $stmt->bindParam(3, $no_sukucadang);
	$stmt->bindParam(4, $keterangan);
    $stmt->execute();
	
	echo "Data Suku Cadang berhasil di simpan";
  }
}