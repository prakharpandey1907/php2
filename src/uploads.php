<?php
    session_start();
    //make sure you have created the *upload* directory

    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "uploads/" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    

    if(!isset($_SESSION['picture'])){
        $_SESSION['picture']=array($destination);
    }
    else{
        array_push($_SESSION['picture'],$destination);
    }
 header('Location: form.php');
    ?>
