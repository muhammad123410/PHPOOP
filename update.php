<?php
    include_once 'connect.php';
    $id = $_POST['id'];
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $docs = $_POST['docs'];
    $File = $_FILES['file'];
    
    
    $model->update($Title,$Description,$docs,$File,$id);

    

?>