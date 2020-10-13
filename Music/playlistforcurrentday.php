<?php 
require "connect.php";
$query = "SELECT DISTINCT * FROM PlayList ORDER BY rand(date('Ymd')) LIMIT 3";
class PlaylistToday{
    function PlaylistToday($idplaylist,$ten,$hinh,$icon,$casi){
        $this->IdPlaylist = $idplaylist;
        $this->Ten = $ten;
        $this->HinhPlaylist = $hinh;
        $this->Icon = $icon;
        $this->Casi = $casi;
    }
}
$arrayplaylistfortoday = array();
$data = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($data)){

    array_push($arrayplaylistfortoday, new PlaylistToday($row['IdPlayList']
                                                        ,$row['Ten']
                                                        ,$row['HinhNen']
                                                        ,$row['HinhICon']
                                                        ,$row['CaSi']));
}
echo json_encode($arrayplaylistfortoday);
?>