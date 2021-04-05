<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        img {
            width: 100px;
            height: 100px;
        }
        header{
            background:white;
            width: 100%;
            height: 50px;
            
        }
        header>h1{
            
                color:white;
                background:green;
                width:300px;

        }
    </style>
</head>
<body>
    <?php include 'header.php';

       
        
    ?>

    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Title</label>
            <input type="text" name="title" id="">
        <label for="">Description</label>
            <input type="text" name="description" id="">
        <label for="">My Docs Type:</label>
            <select name="docs" id="">
                <option value="word">Word</option>
                <option value="pdf">PDF</option>
                <option value="excel">Excel</option>
            </select>
        <label for="">File</label>
        <input type="file" name="file">
        <input type="submit" value="Submit">
    </form>

    
    <a href="display.php"><button class="btn btn-primary">CLick Me!</button></a>
    <a href="index.php" class="btn btn-primary nav-item">Home</a>
</body>
</html>