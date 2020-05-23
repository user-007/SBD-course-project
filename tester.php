<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/bootstrap.min.css">
    <script src="resources/jquery-3.5.1.min.js"></script>
    <script src="resources/bootstrap.min.js"></script>
    </head> 
    <body>
    <?php $servername = "localhost";
    $username = "root";
    $password = "admin";
    $db = "mydb";
    $conn = new mysqli($servername,$username,$password,$db);
    $sql = "select title,year,composer.name from piece
    join composer
    on piece.idComposer = composer.idComposer;
    ";
    $result = $conn->query($sql);
    $i = 1;
    while($res = $result->fetch_array(MYSQLI_NUM)){
        
        echo $res[0]." ".$res[1];
        $i++;
          
    }
    ?>
    </body>
</html>
