<?php
    include_once 'connect.php';

    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $docs = $_POST['docs'];
    $File = $_FILES['file'];
    
    
    $model->insert($Title,$Description,$docs,$File);

    

?>