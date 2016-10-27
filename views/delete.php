<?php

require('../config/config.php'); 
if ( !empty($_GET['id'])) {
        $id = $_GET['id'];
    echo $id;
        }
        else{"there is error ";}
        
$query="DELETE FROM `news` WHERE id=$id";
$result = mysqli_query($conn,$query);
header('Location:../index.php'); 