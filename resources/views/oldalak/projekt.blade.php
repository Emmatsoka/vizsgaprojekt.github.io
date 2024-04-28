


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesoc | A projekt</title>
    <link rel="shortcut icon" href="Wesoc_favicon_white.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/webs.css">
    <link rel="stylesheet" href="./styles/gorgo.css">
    <script src="./js/attunes.js"></script>
    <script src="./js/ujratoltfelgorget.js"></script>
    <script src="./js/felgorgetes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/mozgatas.js"></script>
</head>
<body>
  <button onclick="fel()" id="felgorget" ><img src="pics/fel.png"></button>
    <header class="header" id="header">

        @include('oldalak.kellekek.nav')


        <div id="headerszoveg">
<h1>A projekt</h1>
<p>Dokumentációk, készítők stb.. (Fejlesztés alatt)</p>
<div id="headergombok">
<a class="gomb feherhtr bold" href="#tartalom">Információk</a>
    </div>
        </div>
        <svg class="waveh" class="img-fluid" width="100%"  id="svg" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 60.332531776021995,176.97835795259363 120.66506355204399,203.95671590518722 195,205 C 269.334936447956,206.04328409481278 357.6722775678461,181.1514943318447 436,182 C 514.3277224321539,182.8485056681553 582.6458261765715,209.43730676743388 645,183 C 707.3541738234285,156.56269323256612 763.7444177258675,77.0992785984198 826,90 C 888.2555822741325,102.9007214015802 956.3765029199587,208.16557883888697 1031,220 C 1105.6234970800413,231.83442116111303 1186.7495705942974,150.2384060460323 1256,123 C 1325.2504294057026,95.7615939539677 1382.6252147028513,122.88079697698385 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="rgb(247, 246, 246)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>

      </header>
     <div id="tartalom">

      <section id="szekcio1"  class="aprojekt">
        <h1 class="attunes">Készítők</h1>
      <div class="row justify-content-center attunes">
        <div class="col-lg-3 ">
            <h2 class="attunes">Szanyi ... <span>(Fullstack)</span></h2>
                    <p class="attunes">
                        Én alkottam meg a Wesoc kinézetét, és szerintem a kinézet egy oldalban nagyon fontos a használhatóság mellett, mivel ha valami jól néz ki, azt szívesebben használja bárki. Ezek mellett én készítettem a profil szerkesztését, a dashboardot, a profilkeresőt is, és a témaválasztást is és egy jópár funkciót.
                    </p>
        </div>
        <div class="col-lg-3">
            <h2 class="attunes">Némedi Dániel <span>(Backend)</span></h4>
                <p class="attunes">
                    Én felelek azért, hogy ti könnyen tudjatok posztolni az oldalon. Emellett az oldal logóját én terveztem. Köszönöm a bizalmat, és remélem, hogy az általam létrehozott elemek segítik az oldal sikeres működését.
                </p>
        </div>
        <div class="col-lg-3">
            <h2 class="attunes">Gresu Gábor <span>(Database)</span></h2>
                    <p class="attunes">
                        Én terveztem és hoztam létre az adatbázist a weboldalunkhoz. Az adatbázis tervezése során alaposan átgondoltam hogy megfeleljen a webhelyünk funkcióinak és remélhetőleg ez az adatbázis megfelelő lesz későbbiekben is a weblapunk működéséhez.
                    </p>
        </div>
      </div>
     </div>
    </div>
    @include('oldalak.kellekek.footer')


     <script src="./styles/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
