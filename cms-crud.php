<?php 

include('config.php');
$link  = mysqli_connect($hostname, $username, $password, $dbname);


function cmsInsert($query, $err = 'erro'){
    global $link;
    if($link){

        $sql = mysqli_query($link, $query);
            
        if($sql == true){
                return $sql;
            }else{
                return $sql;
            }
        }else{
            $err;
        }
}

function cmsGetDataByColumn($query, $err = 'erro'){
    global $link;
    if($link){

        $sql = mysqli_query($link, $query);
            
      return $sql;
        }else{
            $err;
        }
}

function getAllData($query, $err = 'erro'){
    global $link;
    if($link){

        $sql = mysqli_query($link, $query);
            
      return $sql;
        }else{
            $err;
        }
}

?>