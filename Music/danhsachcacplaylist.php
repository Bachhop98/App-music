<?php 
 require "connect.php";
 $query = "SELECT * FROM PlayList";
 $data = mysqli_query($con,$query);
 class Danhsachplaylist{
     function Danhsachplaylist($idplaylist,$ten,$hinhnen,$hinhicon){
         $this->IdPlaylist = $idplaylist;
         $this->Ten = $ten;
         $this->HinhPlaylist = $hinhicon;
         $this->Icon = $hinhicon;
     }

 }
 $arrayplaylist = array();
 while($row = mysqli_fetch_assoc($data)){
     array_push($arrayplaylist,new Danhsachplaylist($row['IdPlayList']
                                            ,$row['Ten']
                                            ,$row['HinhNen']
                                            ,$row['HinhICon']));
 }
 echo json_encode($arrayplaylist);
?>