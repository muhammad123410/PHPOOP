<?php

    class Model {

       public $localhost = "localhost";
       public $user = "root";
       public $password = "";
       public $dbname = "finalpaper";
       public $conn; 
       public $result;
      
       function ConnectToDataBase(){
        $this->conn = new mysqli($this->localhost,$this->user,$this->password,$this->dbname);
       }

       function insert($title,$description,$docs,$file){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $sql = "insert into Document(Title,Description,Docs,Files) values ('$title','$description','$docs','$target_file')";


        $this->conn->query($sql);

        }
        function update($title,$description,$docs,$file,$id){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($file["name"]);
            $uploadOk = 1;
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $sql = "Update Document set Title='$title', Description='$description', docs='$docs', Files='$target_file' where id='$id'";
            $this->conn->query($sql);
        }
        function delete($id){
            $sql = "DELETE FROM Document WHERE id='$id'";
            $this->conn->query($sql);
        }
        function View(){
            $sql = "select * from Document";
            $this->result=$this->conn->query($sql);
        } 

         function display(){ 
             $this->View();
             ?>
                <table class="table table-striped">
                    <thead>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Docs</td>
                        <td>File</td>
                        <td>operations</td>

                    </thead>
                    <?php while($row=mysqli_fetch_array($this->result)){ ?>
                    <tr>
                        <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Docs']; ?></td>
                        <td><?php echo $row['Files']; ?></td>
                        <td>
                           <?php echo "<a class='breadcrumb-item' href='delete.php?id=".$row['id']."'>Delete</a>"?>
                           <?php echo "<a class='breadcrumb-item' href='updatev.php?id=".$row['id']."'>Update</a>"?>

                            
                        </td>

                    </tr>
                    <?php } ?>
                </table>
        <?php }
        function Close(){
            $this->conn->close();
        }
        
    }
?>