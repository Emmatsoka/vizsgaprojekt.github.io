

 
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesoc | Főoldal</title>
    <link rel="shortcut icon" href="Wesoc_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./styles/webs.css">
    <link rel="stylesheet" href="./styles/gorgo.css">
    
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center bold" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('tamogatas') }}">Támogatás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('adatvedelem') }}">Adatvédelem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('elerhetoseg') }}">Elérhetőség</a>
              </li>
           
          </ul>
          
          <a class=" gomb feherhtr float-right bold" href="{{ url('login') }}">Belépek</a>
        </div>

      
      </nav>

 
        <div id="headerszoveg">
<h1>Egy <span class="lilahatter">oldal..</span></h1>
<p>Ami egy fantasztikus közösségi felületet nyújt minden ember számára.</p>
<div id="headergombok">
<a href="{{ url('register') }}" class="gomb feketehtr bold">Regisztráció</a><a class="gomb feherhtr bold" href="">Információk</a>
</div>
        </div>
    
        <svg class="waveh" class="img-fluid" width="100%"  id="svg" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
          <path d="M 0,400 L 0,150 C 60.332531776021995,176.97835795259363 120.66506355204399,203.95671590518722 195,205 C 269.334936447956,206.04328409481278 357.6722775678461,181.1514943318447 436,182 C 514.3277224321539,182.8485056681553 582.6458261765715,209.43730676743388 645,183 C 707.3541738234285,156.56269323256612 763.7444177258675,77.0992785984198 826,90 C 888.2555822741325,102.9007214015802 956.3765029199587,208.16557883888697 1031,220 C 1105.6234970800413,231.83442116111303 1186.7495705942974,150.2384060460323 1256,123 C 1325.2504294057026,95.7615939539677 1382.6252147028513,122.88079697698385 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="rgb(247, 246, 246)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>
    
      </header>
     
     <div id="tartalom">
          <section id="bemutato">
        
            <h1>Tartalom</h1>
     
              <div class="row justify-content-center">
                <div class="col-lg-4">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Id cursus metus aliquam eleifend mi in. Sem fringilla ut morbi tincidunt augue interdum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Enim tortor at auctor urna.
                  </p>
                </div>
                <div class="col-lg-4 text-center">
                  <img src="pics/sample.png" height="auto"  class="img-fluid">
                </div>
            </div>
          </section>
          <svg class="sectfelwave" class="img-fluid" width="100%" style=" transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path style="transform:translate(0, 0px); opacity:1"      fill="#eae1ff" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
          </svg>
          <section id="bemutato2">
            
            <h1>Tartalom</h1>
     
              <div class="row justify-content-center">
             
                <div class="col-lg-4 text-center">
                  <img src="pics/sample.png" height="auto"  class="img-fluid">
                </div>
                <div class="col-lg-4">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Id cursus metus aliquam eleifend mi in. Sem fringilla ut morbi tincidunt augue interdum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Enim tortor at auctor urna.
                  </p>
                </div>
            </div>
  
         
         
          </section>
          <svg class="sectlewave" class="img-fluid" width="100%" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path style="transform:translate(0, 0px); opacity:1"      fill="#eae1ff" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
          </svg>
          <section id="bemutato">
        
            <h1>Tartalom</h1>
     
              <div class="row justify-content-center">
                <div class="col-lg-4">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Id cursus metus aliquam eleifend mi in. Sem fringilla ut morbi tincidunt augue interdum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. Ac feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Enim tortor at auctor urna.ű
                  </p>
                </div>
                <div class="col-lg-4 text-center">
                  <img src="pics/sample.png" height="auto"  class="img-fluid">
                </div>
            </div>
          </section>
     </div>

     <footer>

  
      <svg class="wave" class="img-fluid" width="100%" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path style="transform:translate(0, 0px); opacity:1"      fill="rgb(247, 246, 246)" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
      </svg>
      <div class="row justify-content-center">
        <div class="col-lg-4">
        <h1>Footer</h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Id cursus metus aliquam eleifend mi in. Sem fringilla ut morbi tincidunt augue interdum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus.
      </p>
        </div>
        <div class="col-lg-4">
          <h1>Footer</h1>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. Posuere urna nec tincidunt praesent semper. Id cursus metus aliquam eleifend mi in. Sem fringilla ut morbi tincidunt augue interdum. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus.
          </p>
        </div>
        <div class="row ">
         <b>Wesoc Copyright 2024</b>
        </div>
     </footer>

     <script src="./styles/bootstrap/js/bootstrap.js"></script>
     <script src="./styles/bootstrap/js/bootstrap.min.js"></script>
     <script src="./styles/bootstrap/js/bootstrap.bundle.min.js"></script>
     
</body>

</html>
