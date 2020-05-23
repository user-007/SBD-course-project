<html>
  <head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="resources/bootstrap.min.css">
    <script src="resources/jquery-3.5.1.min.js"></script>
    <script src="resources/bootstrap.min.js"></script>
    <style>
        img {
            width:1347px;
            height:553px;
        }
    </style>
    <script>
    function addImage(pk) {
    alert("addImage: " + pk);
}

    </script>
  </head>
  <body>
<title>Музикален магазин</title>
   
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="index.html">Музикален магазин</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="models.html">Модели</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pieces.php">Муз. произведения</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Информация
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="about.html">За програмата</a>
       
        
          </li>
          &nbsp; &nbsp; &nbsp;
     
          <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" readonly type="search" placeholder="Търсене" onkeyup="" data-toggle="modal" data-target="#myModal" aria-label="Search">
      </form>
      </nav>
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="margin-left:5px !important">Инфо</h4>
      </div>
      <div class="modal-body">
        <p>Използвайте полетата по-долу за да търсите по произведение, година или композитор.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
      <script>
function searchName() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchYear() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
  
}
function searchComposer() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<a href="pieces.php" class="btn btn-primary">Опресняване</a>
<a href="addComposer.php" class="btn btn-primary">Добавяне</a>
<a href="deleteEntry.php" class="btn btn-primary" data-toggle="modal" data-target="#modalD">Изтриване</a>
</br>
</br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Произведение <input  type="search" id="myInput" onkeyup = "searchName()"></th>
      <th scope="col">Година  <input  type="search" id="myInput2" onkeyup="searchYear()"></th>
      <th scope="col">Композитор <input type="search" id="myInput3" onkeyup="searchComposer()"></th>

    </tr>
  </thead>
  <tbody>
  <table id="myTable" class = "table">
  <?php
  try{
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $db = "mydb";
    $conn = new mysqli($servername,$username,$password,$db);
    $sql = "select title, year, composer.name from piece join composer on piece.idComposer =composer.idComposer;";
    $result = $conn->query($sql);
    
      //while($res = $result->fetch_array(MYSQLI_NUM)){
    $i = 1;
        while($res = $result->fetch_assoc()){
        echo "<tr>";
        echo "<th>".$i."</th>";
        echo "<td>".$res["title"]."</td>";
        echo "<td>".$res["year"]."</td>";
        echo "<td>".$res["name"]."</td>";
       echo "</tr>";
       $i++;
       
   }
  
   
  } catch (Exception $e){
      echo $e->getMessage();
  }
  ?>
  </table>
  </tbody>
</table>
<!-- Modal -->
<div id="modalD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Изтриване</h4>
      </div>
      <div class="modal-body">
      <form action="">
     <p>Въведете номер на реда от таблицата, който да бъде изтрит:</p><input type="text">
     <input type="hidden" value=document>
      </form>
      </div>
      <div class="modal-footer">
        <button>Изтриване </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</html>