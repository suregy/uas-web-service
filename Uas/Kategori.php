<?php
namespace Uas;
class Kategori {
   function tambahKategori($nmkategori){
     $db = new Db();
	 $stmt = $db->prepare("INSERT INTO kategori (nmkategori) VALUES (?)");
	 $stmt->bindParam(1, $nmkategori);
	 $stmt->execute();
	 
	 echo "Data Kategori berhasil di simpan";
   }
}
