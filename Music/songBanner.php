<?php 
require "connect.php";
$query = "SELECT QuangCao.IdQuangCao,QuangCao.HinhAnh,QuangCao.NoiDung,QuangCao.IdBaiHat,BaiHat.TenBaiHat,BaiHat.HinhBaiHat 
FROM `BaiHat`INNER JOIN QuangCao On QuangCao.IdBaiHat = BaiHat.IdBaiHat 
WHERE QuangCao.IdBaiHat = BaiHat.IdBaiHat";
$data = mysqli_query($con,$query);
class Quangcao{
    function Quangcao($idquangcao,$hinhanh,$noidung,$idbaihat,$tenbaihat,$hinhbaihat){
        $this->IdQuangCao = $idquangcao;
        $this->HinhAnh = $hinhanh;
        $this->NoiDung = $noidung;
        $this->IdBaiHat = $idbaihat;
        $this->TenBaiHat = $tenbaihat;
        $this->HinhBaiHat = $hinhbaihat;
    }
}
$mangquangcao = array();
while($row = mysqli_fetch_assoc($data)){
    array_push($mangquangcao,new Quangcao($row['IdQuangCao']
                                            ,$row['HinhAnh']
                                            ,$row['NoiDung']
                                            ,$row['IdBaiHat']
                                            ,$row['TenBaiHat']
                                            ,$row['HinhBaiHat']));
}
echo json_encode($mangquangcao);
?>