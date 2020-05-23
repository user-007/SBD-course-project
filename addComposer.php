<html>
    <head>
    <link rel="stylesheet" href="resources/bootstrap.min.css">
    <script src="resources/jquery-3.5.1.min.js"></script>
    <script src="resources/bootstrap.min.js"></script>
    <style>
    .form-group{
      margin-right:110px;
    }
    </style>
    
    </head>
    <body>
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
      </nav>
      <form class="form-group" action="doTask.php" method="post" >
        Препоръчително е данните да се въвеждат с латинската азбука.
        <p>Заглавие:</p> <input type="text" name="title" class="form-control">
        <p>Година:</p><input type="text" name="year" class="form-control">
        <p>Композитор</p><input type="text" name = "composer" class = "form-control">
        <p>Жанр</p><input type="text" name="genre" class="form-control">
        <p>Инструмент</p><input type="text" name="instrument" class = "form-control">
        <p>Тип</p><input type="text" name = "type" class= "form-control">
        <br>
        <br>
      <button class="btn btn-primary">Давай!</button>
      </form>
    </body>
</html>