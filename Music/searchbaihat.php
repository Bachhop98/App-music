<?php 
    require "connect.php";

    class BaiHat{
        function BaiHat($idbaihat,$tenbaihat,$hinhbaihat,$casi,$linkbaihat,$luotthich){
            $this->IdBaiHat = $idbaihat;
            $this->TenBaiHat = $tenbaihat;
            $this->HinhBaiHat = $hinhbaihat;
            $this->CaSi = $casi;
            $this->LinkBaiHat = $linkbaihat;
            $this->LuotThich = $luotthich;
        }
    }
    $arraycakhuc = array();


    if(isset($_POST['tukhoa'])){
        $tukhoa = $_POST['tukhoa'];
        $query = "SELECT * FROM BaiHat WHERE lower(TenBaiHat) LIKE '%$tukhoa' ";
        $data = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($data)){
            array_push($arraycakhuc,new BaiHat($row['IdBaiHat']
                                            ,$row['TenBaiHat']
                                            ,$row['HinhBaiHat']
                                            ,$row['CaSi']
                                            ,$row['LinkBaiHat']
                                            ,$row['LuotThich']));
        }
        echo json_encode($arraycakhuc);
    }

  

?>