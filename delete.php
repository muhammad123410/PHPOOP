<?php
    include_once 'connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $model->delete($id);
    }

?>