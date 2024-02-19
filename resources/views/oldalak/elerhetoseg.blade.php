

 
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesoc | Elérhetőség</title>
    <link rel="shortcut icon" href="Wesoc_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/webs.css">
    <link rel="stylesheet" href="./styles/gorgo.css">
    
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ url('fooldal') }}">WESOC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center bold" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Támogatás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('adatvedelem') }}">Adatvédelem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link aktiv" href="{{ url('elerhetoseg') }}">Elérhetőség</a>
              </li>
           
          </ul>
          
          <a class=" gomb feherhtr float-right bold" href="{{ url('login') }}">Belépek</a>
        </div>

      
      </nav>

 
        <div id="headerszoveg">
<h1>Elérhetőség</h1>


        </div>
      </header>
     <div id="tartalom">

     </div>
    <script src="./styles/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
