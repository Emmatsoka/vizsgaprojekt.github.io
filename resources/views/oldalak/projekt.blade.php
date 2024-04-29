


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesoc | A projekt</title>
    <meta name="title" content="Wesoc | A projekt" />
    <meta name="description" content="Ezen az oldalon megtalálhatóak a projekt dokumentációi, információk a készítőkről, valamint egyéb fontos tartalmak és részletek." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://wesoc.site/projekt" />
    <meta property="og:title" content="Wesoc | A projekt" />
    <meta property="og:description" content="Ezen az oldalon megtalálhatóak a projekt dokumentációi, információk a készítőkről, valamint egyéb fontos tartalmak és részletek." />
    <meta property="og:image" content="https://www.kepfeltoltes.eu/images/2024/04/29/125Wesoc_A_projekt.png" />
    <meta name="theme-color" content="#111d24">
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://wesoc.site/projekt" />
    <meta property="twitter:title" content="Wesoc | A projekt" />
    <meta property="twitter:description" content="Ezen az oldalon megtalálhatóak a projekt dokumentációi, információk a készítőkről, valamint egyéb fontos tartalmak és részletek." />
    <meta property="twitter:image" content="https://www.kepfeltoltes.eu/images/2024/04/29/125Wesoc_A_projekt.png" />
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
<p>Dokumentációk, információk a készítőkről, és még sok más.</p>
<div id="headergombok">
<a class="gomb feherhtr bold" href="#tartalom">További információk</a>
    </div>
        </div>
        <svg class="waveh" class="img-fluid" width="100%"  id="svg" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,400 L 0,150 C 60.332531776021995,176.97835795259363 120.66506355204399,203.95671590518722 195,205 C 269.334936447956,206.04328409481278 357.6722775678461,181.1514943318447 436,182 C 514.3277224321539,182.8485056681553 582.6458261765715,209.43730676743388 645,183 C 707.3541738234285,156.56269323256612 763.7444177258675,77.0992785984198 826,90 C 888.2555822741325,102.9007214015802 956.3765029199587,208.16557883888697 1031,220 C 1105.6234970800413,231.83442116111303 1186.7495705942974,150.2384060460323 1256,123 C 1325.2504294057026,95.7615939539677 1382.6252147028513,122.88079697698385 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="rgb(247, 246, 246)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>

      </header>
     <div id="tartalom">

      <section id="szekcio1"  class="aprojekt">
        <h1 class="attunes">Készítők</h1>
      <div class="row justify-content-center attunes">
        <div class="col-lg-3 ">
            <h2 class="attunes"><img src="pics/szanyi.jpg" height="auto" width="45px" class="projektkep" style="border-radius: 100% !important;">Szanyi <span>(Fullstack)</span></h2>
                    <p class="attunes">
                        Én formáltam a Wesoc kinézetét. Hiszem, hogy egy jól megtervezett weboldal nemcsak hatékony, de vonzó is lehet. Ezért alkottam meg a profil szerkesztését, a dashboardot, a profilkeresőt és a témaválasztást is, hogy a Wesoc mégszebb és könnyebben használható legyen. Minden részletre figyeltem, hogy a platform egy még jobb közösségi élményt nyújtson. 👀
                    </p>
        </div>
        <div class="col-lg-3">
            <h2 class="attunes"><img src="pics/darpy.webp" height="auto" width="45px" class="projektkep" style="border-radius: 100% !important;">Némedi <span>(Backend)</span></h4>
                <p class="attunes">
                    Én, a Wesoc Backend fejlesztőjeként felelek azért, hogy könnyedén tudjatok posztolni az oldalon. Az én feladatom a posztok létrehozása, hogy minél simább legyen az oldalon való tartalom megosztása. Emellett az oldal logóját is én terveztem. Nagyon köszönöm a bizalmat, és remélem, hogy az általam létrehozott elemek hozzájárulnak az oldal sikeres működéséhez. 😎
                </p>
        </div>
        <div class="col-lg-3">
            <h2 class="attunes"><img src="pics/gabor.webp" height="auto" width="45px" class="projektkep" style="border-radius: 100% !important;">Gresu <span>(Database)</span></h2>
                    <p class="attunes">
                        Én felelek az adatbázis tervezéséért és létrehozásáért a weboldalunkhoz. Az adatbázis megtervezése során alaposan átgondoltam, hogy minden szükséges funkciónknak megfeleljen, és biztosítottam, hogy az adatbázisunk jól működjön a weboldalunk számára. Reményeim szerint az elkészült adatbázis hozzájárul a webhelyünk hatékony működéséhez a jövőben is. 🍺
                    </p>
        </div>
      </div>
     </div>
     <div class="attunes">
        <svg class="sectfelwave" class="img-fluid mozgatas" width="100%" style=" transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path style="transform:translate(0, 0px); opacity:1"      fill="#0d181e" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>
        <section id="szekcio2" >



            <div class="row justify-content-center ">

              <div class="col-lg-4 text-center balattunes">
                <img src="pics/project.jpg" height="auto"  class="img-fluid ">
              </div>

              <div class="col-lg-4 attunes balra">
              <h1>Dokumentációk, stb..</h1>
                <p>
                    Itt találod a weboldal Fejlesztői, Tesztelői és Felhasználói dokumentációit. A Fejlesztői dokumentáció a technikai részletekre fókuszál, míg a Tesztelői és Felhasználói dokumentációk segítséget nyújtanak a teszteléshez és az oldal használatához.
                </p>
                <div class="row justify-content-center ">
                    <a href="https://drive.google.com/drive/folders/1Awh-xPlA8Yb-3VU0sr9eJytkcWWTeNzk?usp=sharing" class="gomb feherhtr bold " id="csatlakozzhozzank" target="_blank">Letöltés</a>
                   </div>
            </div>
          </div>


          </section>


        <svg class="sectlewave" class="img-fluid" width="100%" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path style="transform:translate(0, 0px); opacity:1"      fill="#0d181e" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>    </div>
        <section id="szekcio3" class="adatvedelmi">
        <h1 class="attunes text-center">A projektről</h1>
        <div class="row justify-content-center attunes">
            <div class="col-lg-8 attunes">

                <p class="attunes">Hol is kezdjem..</p>

                <p class="attunes">Amikor elindítottuk ezt a projektet, szembesültünk számos kihívással. Kezdetben nem volt világos számunkra, hogy milyen komplexitással jár egy ilyen közösségi platform létrehozása. Az első lépések után azonban rájöttünk, hogy rengeteg területen van még fejleszteni való. Például, még nincs kész a barátok jelölése, a privát beszélgetések funkciója, vagy a bejegyzések mentése lehetősége. Ezek csak néhány példa a számtalan feladatra, amivel még szembe kell néznünk. </p>

                <p class="attunes"><b>DE, EZT NEM HAGYJUK ANNYIBAN</b></p>
                <p class="attunes">Határozottak vagyunk abban, hogy folyamatosan fejleszteni fogjuk a weboldalt. A tervezett funkciók nem maradnak csak elképzelések szintjén, hanem be is fognak épülni a platformba. Így, ahogy haladunk előre, egyre jobb és felhasználóbarátabb élményt fogunk nyújtani mindenkinek!</p>
                <p class="attunes"><i>A jövőben célunk olyan sikeresnek lenni, mint a legnagyobb közösségi platformok, például a Discord, Facebook vagy a Twitter. De nem elégszünk meg ezzel. Célunk az, hogy minden felhasználó igényét kielégítsük, és egy még jobb, még biztonságosabb közösségi teret teremtsünk, mint bármelyik meglévő platform.</i> </p>
                <p class="attunes">Addig is <b><i>"A türelem rózsát terem"</i></b> - és mi hisszük, hogy az eredmény minden várakozásunkat felülmúlja majd. </p>
            </div>
        </div>
       </section>
    </div>
    @include('oldalak.kellekek.footer')


     <script src="./styles/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
