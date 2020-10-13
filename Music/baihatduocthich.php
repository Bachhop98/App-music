<?php 
require "connect.php";
class Baihat{
    function Baihat($idbaihat,$tenbaihat,$hinhbaihat,$casi,$linkbaihat,$luotthich){
        $this->Idbaihat = $idbaihat;
        $this->Tenbaihat = $tenbaihat;
        $this->Hinhbaihat = $hinhbaihat;
        $this->Casi = $casi;
        $this->Linkbaihat = $linkbaihat;
        $this->Luotthich = $luotthich;
    }
}
$arraycasi = array();
$query = "SELECT * FROM BaiHat ORDER BY LuotThich Desc LIMIT 5" ;
$data = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($data)){
    array_push($arraycasi, new Baihat($row['IdBaiHat']
                                    ,$row['TenBaiHat']
                                    ,$row['HinhBaiHat']
                                    ,$row['CaSi']
                                    ,$row['LinkBaiHat']
                                    ,$row['LuotThich']));
}
echo json_encode($arraycasi);
?>