

 
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesoc | Főoldal</title>
    <link rel="shortcut icon" href="Wesoc_favicon_white.png" type="image/x-icon">
    <link rel="stylesheet" href="./styles/bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./styles/webs.css">
    <link rel="stylesheet" href="./styles/gorgo.css">
    <script src="./js/attunes.js"></script>
    <script src="./js/ujratoltfelgorget.js"></script>
    <script src="./js/felgorgetes.js"></script>
    
</head>
<body>
  <button onclick="fel()" id="felgorget" ><img src="pics/fel.png"></button>
    <header>

      <nav class="navbar navbar-expand-lg navbar-dark megjelenites">
        
          <a class="navbar-brand" href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="120px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tamogatas') }}"><img src="pics/support.png" height="auto" width="20px" class="nav-link-icon">Támogatás</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('projekt') }}"><img src="pics/projekt.png" height="auto" width="20px" class="nav-link-icon">Projekt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('adatvedelem') }}"><img src="pics/protect.png" height="auto" width="20px" class="nav-link-icon">Adatvédelem</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('elerhetoseg') }}"><img src="pics/email.png" height="auto" width="20px" class="nav-link-icon">Elérhetőség</a>
                </li>
                <a class=" gomb feherhtr float-right bold" href="{{ url('login') }}">Belépek</a>
            </ul>
       
          
        </div>
      </nav>
  

 
        <div id="headerszoveg" class="megjelenites">
<h1>Egy <span class="masbetu">oldal..</span></h1>
<p>..ami egy fantasztikus közösségi felületet nyújt minden ember számára.</p>
<div id="headergombok">
<a href="{{ url('register') }}" class="gomb feketehtr bold">Regisztráció</a><a class="gomb feherhtr bold" href="#tartalom">Információk</a>
</div>
        </div>
      


        <svg class="waveh" class="img-fluid" width="100%"  id="svg" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
          <path d="M 0,400 L 0,150 C 60.332531776021995,176.97835795259363 120.66506355204399,203.95671590518722 195,205 C 269.334936447956,206.04328409481278 357.6722775678461,181.1514943318447 436,182 C 514.3277224321539,182.8485056681553 582.6458261765715,209.43730676743388 645,183 C 707.3541738234285,156.56269323256612 763.7444177258675,77.0992785984198 826,90 C 888.2555822741325,102.9007214015802 956.3765029199587,208.16557883888697 1031,220 C 1105.6234970800413,231.83442116111303 1186.7495705942974,150.2384060460323 1256,123 C 1325.2504294057026,95.7615939539677 1382.6252147028513,122.88079697698385 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="rgb(247, 246, 246)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
        </svg>
    
      </header>
      
     <div id="tartalom"  >
          <section id="szekcio1">
        
     
     
              <div class="row justify-content-center attunes">
                <div class="col-lg-4 attunes jobbra">
                <h1 >Mit várhatsz a weboldalunktól?</h1>
                  <p>
                   
                  Lorem ipsum dolor sit amet, <b>consectetur</b> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet.  
                  </p>
                </div>
                <div class="col-lg-4 text-center jobbattunes">
                  <img src="pics/question.png" height="auto"  class="img-fluid">
                </div>
            </div>
          </section>
          <div class="attunes">
          <svg class="sectfelwave" class="img-fluid" width="100%" style=" transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path style="transform:translate(0, 0px); opacity:1"      fill="#0d181e" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
          </svg>
          <section id="szekcio2" >
            
         
     
              <div class="row justify-content-center ">
                
                <div class="col-lg-4 text-center balattunes">
                  <img src="pics/design.png" height="auto"  class="img-fluid ">
                </div>
                
                <div class="col-lg-4 attunes balra">
                <h1>Gondos dizájn, letiszult megjelenés.</h1>
                  <p>
                  
                  Lorem ipsum dolor sit amet, <b>consectetur</b> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. 
                  </p>
              
              </div>
            </div>
  
         
            </section>
      

          <svg class="sectlewave" class="img-fluid" width="100%" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path style="transform:translate(0, 0px); opacity:1"      fill="#0d181e" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
          </svg>    </div>
          <section id="szekcio3" >
        
           
     
              <div class="row justify-content-center attunes">
                <div class="col-lg-4 attunes jobbra">
                <h1> Mire vársz még? Csatlakozz hozzánk!</h1>
                  <p>
                    
                  Lorem ipsum dolor sit amet, <b>consectetur</b> adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. 
                  </p>
                </div>
                <div class="col-lg-4 text-center jobbattunes">
                  <img src="pics/together.png" height="auto"  class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center ">
              <a href="{{ url('register') }}" class="gomb feketehtr bold attunes " id="csatlakozzhozzank">Regisztráció az oldalra</a>
             </div>
          </section>
     </div>

    
     <footer class="attunes">

  
      <svg class="wave" class="img-fluid" width="100%" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 60 1440 280" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path style="transform:translate(0, 0px); opacity:1"      fill="rgb(247, 246, 246)" d="M0,168L21.8,144.7C43.6,121,87,75,131,70C174.5,65,218,103,262,135.3C305.5,168,349,196,393,214.7C436.4,233,480,243,524,214.7C567.3,187,611,121,655,98C698.2,75,742,93,785,116.7C829.1,140,873,168,916,172.7C960,177,1004,159,1047,149.3C1090.9,140,1135,140,1178,140C1221.8,140,1265,140,1309,149.3C1352.7,159,1396,177,1440,163.3C1483.6,149,1527,103,1571,74.7C1614.5,47,1658,37,1702,32.7C1745.5,28,1789,28,1833,60.7C1876.4,93,1920,159,1964,177.3C2007.3,196,2051,168,2095,168C2138.2,168,2182,196,2225,186.7C2269.1,177,2313,131,2356,130.7C2400,131,2444,177,2487,168C2530.9,159,2575,93,2618,93.3C2661.8,93,2705,159,2749,182C2792.7,205,2836,187,2880,182C2923.6,177,2967,187,3011,177.3C3054.5,168,3098,140,3120,126L3141.8,112L3141.8,280L3120,280C3098.2,280,3055,280,3011,280C2967.3,280,2924,280,2880,280C2836.4,280,2793,280,2749,280C2705.5,280,2662,280,2618,280C2574.5,280,2531,280,2487,280C2443.6,280,2400,280,2356,280C2312.7,280,2269,280,2225,280C2181.8,280,2138,280,2095,280C2050.9,280,2007,280,1964,280C1920,280,1876,280,1833,280C1789.1,280,1745,280,1702,280C1658.2,280,1615,280,1571,280C1527.3,280,1484,280,1440,280C1396.4,280,1353,280,1309,280C1265.5,280,1222,280,1178,280C1134.5,280,1091,280,1047,280C1003.6,280,960,280,916,280C872.7,280,829,280,785,280C741.8,280,698,280,655,280C610.9,280,567,280,524,280C480,280,436,280,393,280C349.1,280,305,280,262,280C218.2,280,175,280,131,280C87.3,280,44,280,22,280L0,280Z" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
      </svg>
      <div class="row justify-content-center attunes">
        <div class="col-lg-3">
        <h1 class="attunes"><img src="pics/goal.png" height="auto" width="30px" class="footer-icon">Célunk</h1>
        <p class="attunes">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. 
      </p>
        </div>
        <div class="col-lg-3">
        <h1 class="attunes"><img src="pics/navigation.png" height="auto" width="30px" class="footer-icon">Navigáció</h1>
        <p class="attunes">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet. 
      </p>
        </div>
        <div class="col-lg-3">
          <h1 class="attunes"><img src="pics/support.png" height="auto" width="30px" class="footer-icon">Támogass</h1>
          <p class="attunes">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Bibendum ut tristique et egestas quis. Duis ultricies lacus sed turpis tincidunt id aliquet.
          </p>
          
        </div>
      <hr>
      
        <div class="row justify-content-center copyright ">
        
        <div class="col-lg">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="550" height="200" id="logo">
<path d="M0 0 C19.93409407 16.27272985 34.56193681 36.57574204 37.296875 62.875 C39.15107579 88.2157441 33.63787307 111.68689202 17.171875 131.421875 C1.20263877 149.71995818 -19.55402424 162.25433409 -44.22558594 164.05957031 C-70.28162122 165.37514928 -93.03576559 158.77333185 -112.828125 141.5 C-130.54027381 125.03129377 -141.78605364 104.17138466 -143.0234375 79.6640625 C-143.8288744 53.24061103 -136.08971042 30.70163801 -118 11.24609375 C-87.66780336 -20.06622489 -35.68971822 -26.82717075 0 0 Z M-116.703125 28.875 C-119.44285545 31.46663691 -120.59724853 32.99939497 -121.05297852 36.76831055 C-120.89569884 42.55226839 -118.64116699 47.97537996 -116.79296875 53.39453125 C-116.38784561 54.60711105 -115.98272247 55.81969086 -115.56532288 57.0690155 C-114.70664365 59.63734044 -113.84107609 62.20319756 -112.9699707 64.76733398 C-111.87300179 67.99676224 -110.78882524 71.23028955 -109.70914268 74.4655323 C-105.92379931 85.80303856 -102.1039852 97.13583809 -97.89453125 108.32421875 C-97.51396828 109.36845757 -97.51396828 109.36845757 -97.12571716 110.43379211 C-95.22746856 115.33791858 -92.58769694 120.43271403 -87.703125 122.875 C-82.75054597 123.36148522 -78.25679867 123.66836528 -73.765625 121.375 C-68.49987464 114.99227229 -66.43869071 107.30609154 -64.25 99.48046875 C-63.94491516 98.41129715 -63.63983032 97.34212555 -63.32550049 96.24055481 C-62.68654055 93.99517868 -62.05140784 91.74871025 -61.41992188 89.5012207 C-60.45058851 86.05347817 -59.46845876 82.60957368 -58.484375 79.16601562 C-57.86383223 76.97937968 -57.24401478 74.79253774 -56.625 72.60546875 C-56.18447296 71.05861641 -56.18447296 71.05861641 -55.73504639 69.48051453 C-55.46766663 68.52554581 -55.20028687 67.57057709 -54.92480469 66.58666992 C-54.68816101 65.74698166 -54.45151733 64.9072934 -54.20770264 64.04216003 C-53.58974314 61.75887926 -53.58974314 61.75887926 -53.703125 58.875 C-53.043125 58.875 -52.383125 58.875 -51.703125 58.875 C-51.5363903 59.77821487 -51.5363903 59.77821487 -51.36628723 60.69967651 C-50.16629878 66.97041314 -48.6269806 73.06825486 -46.83984375 79.1953125 C-46.42905327 80.61056717 -46.42905327 80.61056717 -46.00996399 82.05441284 C-45.43327505 84.03323198 -44.85415783 86.01134494 -44.27270508 87.98876953 C-43.39188397 90.99570215 -42.52883498 94.00739135 -41.66601562 97.01953125 C-41.10004642 98.95344376 -40.53302447 100.88704857 -39.96484375 102.8203125 C-39.71256516 103.71009796 -39.46028656 104.59988342 -39.20036316 105.51663208 C-36.36553681 115.09447794 -36.36553681 115.09447794 -29.68974304 122.06814575 C-27.33907899 123.02285533 -25.42551262 123.27919322 -22.890625 123.375 C-21.67439453 123.45234375 -21.67439453 123.45234375 -20.43359375 123.53125 C-16.24208641 122.52384909 -13.59542388 120.00782341 -10.703125 116.875 C-9.18961937 114.29449582 -8.29023555 111.63330583 -7.38671875 108.7890625 C-7.1085582 107.97764801 -6.83039764 107.16623352 -6.54380798 106.33023071 C-5.92319802 104.51596592 -5.31180973 102.69852844 -4.70819092 100.87854004 C-3.62756699 97.64920237 -2.50393757 94.43713839 -1.37158203 91.22558594 C0.76311878 85.1638981 2.86062451 79.09022663 4.94262695 73.01025391 C5.81068734 70.4833467 6.68300366 67.95849909 7.5637207 65.43603516 C8.85363568 61.74129949 10.12092178 58.03900919 11.38671875 54.3359375 C11.97718239 52.65762344 11.97718239 52.65762344 12.57957458 50.94540405 C14.70160319 44.66380279 15.9308578 39.51336801 15.296875 32.875 C12.77319475 29.20419236 11.12651617 28.11635016 6.859375 26.875 C2.52575336 26.875 0.73672629 27.19956011 -2.703125 29.875 C-6.25173697 36.75368538 -8.21749764 44.50249226 -10.375 51.90234375 C-10.70228088 53.01307755 -11.02956177 54.12381134 -11.36676025 55.26820374 C-12.05140008 57.59615736 -12.73364002 59.92481803 -13.41357422 62.25415039 C-14.45775764 65.82835737 -15.51155608 69.39963146 -16.56640625 72.97070312 C-17.23234204 75.23941574 -17.89772648 77.50829029 -18.5625 79.77734375 C-18.87805847 80.84605209 -19.19361694 81.91476044 -19.51873779 83.01585388 C-19.94983856 84.49868614 -19.94983856 84.49868614 -20.38964844 86.01147461 C-20.64405701 86.88066025 -20.89846558 87.74984589 -21.1605835 88.64537048 C-21.82134177 90.97837561 -21.82134177 90.97837561 -21.703125 93.875 C-22.363125 93.875 -23.023125 93.875 -23.703125 93.875 C-23.8138736 93.27539459 -23.92462219 92.67578918 -24.03872681 92.05801392 C-25.25309145 85.71455951 -26.8141173 79.5400555 -28.6015625 73.3359375 C-28.87779449 72.37023834 -29.15402649 71.40453918 -29.43862915 70.40957642 C-30.01978108 68.38376666 -30.60309172 66.35857503 -31.18847656 64.33398438 C-32.07705193 61.2537198 -32.95285059 58.17000417 -33.828125 55.0859375 C-34.39766097 53.10654723 -34.96794812 51.12737292 -35.5390625 49.1484375 C-35.79650238 48.23677826 -36.05394226 47.32511902 -36.31918335 46.38583374 C-38.12009865 40.21931031 -40.06924091 33.79108595 -44.453125 28.9375 C-49.4089078 26.59726923 -53.30926097 26.48007186 -58.453125 27.9375 C-66.11882394 32.50743591 -67.33340614 40.55246047 -69.55859375 48.67578125 C-69.90569901 49.90789841 -70.25280426 51.14001556 -70.61042786 52.4094696 C-71.52664901 55.66703722 -72.43397889 58.92679727 -73.33648682 62.18817139 C-74.61508138 66.80133607 -75.90862186 71.41032018 -77.20295715 76.01908875 C-77.89057122 78.47070349 -78.57401101 80.9234934 -79.25297546 83.3775177 C-79.5603212 84.47923813 -79.86766693 85.58095856 -80.18432617 86.71606445 C-80.45427902 87.6905806 -80.72423187 88.66509674 -81.00236511 89.66914368 C-81.703125 91.875 -81.703125 91.875 -82.703125 92.875 C-82.86741501 92.31948959 -83.03170502 91.76397919 -83.20097351 91.19163513 C-84.93420352 85.33297625 -86.67106898 79.4754035 -88.40991211 73.6184082 C-89.05567429 71.44159326 -89.70055402 69.26451631 -90.34448242 67.0871582 C-94.79007705 52.02488919 -94.79007705 52.02488919 -99.47265625 37.03515625 C-99.83593018 35.89828369 -100.1992041 34.76141113 -100.57348633 33.59008789 C-101.67369026 30.94574644 -102.42241012 29.56684613 -104.703125 27.875 C-109.32896997 26.76137066 -112.54943393 26.40523774 -116.703125 28.875 Z " fill="#F9F9FA" transform="translate(155.703125,27.125)"/>
<path d="M0 0 C1.83549408 -0.01270432 1.83549408 -0.01270432 3.70806885 -0.02566528 C7.04930891 -0.04499915 10.3899893 -0.05081633 13.73124719 -0.04891777 C16.52915745 -0.04879764 19.32701614 -0.0573794 22.12491196 -0.06569529 C28.73158474 -0.08489901 35.33813119 -0.08782468 41.94482422 -0.08105469 C48.7392826 -0.07441979 55.5331973 -0.0972624 62.32754546 -0.13436842 C68.17920612 -0.16515556 74.03069271 -0.17641564 79.88243264 -0.1725316 C83.36931677 -0.17047293 86.85577786 -0.17580488 90.34258461 -0.20042419 C94.23641515 -0.22701129 98.12954461 -0.21289482 102.0234375 -0.1953125 C103.16403122 -0.20857574 104.30462494 -0.22183899 105.4797821 -0.23550415 C113.63932266 -0.15020638 120.47069621 1.53440254 126.61916065 7.17533112 C131.9770421 12.86871817 134.07290067 18.92571567 134.12573242 26.6652832 C134.13420197 27.35249954 134.14267151 28.03971588 134.15139771 28.74775696 C134.17462392 30.9993487 134.17579321 33.2502511 134.17456055 35.50195312 C134.18167197 37.08225267 134.18937239 38.66254967 134.19763184 40.24284363 C134.21104448 43.54876893 134.2126605 46.85445557 134.20678711 50.16040039 C134.20090073 54.37352356 134.2314523 58.58549049 134.27190399 62.79839039 C134.29789988 66.06119331 134.30064761 69.32372242 134.29701233 72.58661461 C134.29869319 74.13859647 134.30823497 75.69059241 134.32615662 77.24247169 C134.42715513 87.07039268 133.98195098 95.71393247 126.95031738 103.31843567 C119.58997421 110.31282826 112.15653174 110.86474939 102.41162109 110.83984375 C100.57612701 110.85254807 100.57612701 110.85254807 98.70355225 110.86550903 C95.36231219 110.8848429 92.02163179 110.89066008 88.68037391 110.88876152 C85.88246365 110.88864139 83.08460495 110.89722315 80.28670913 110.90553904 C73.68003635 110.92474276 67.07348991 110.92766843 60.46679688 110.92089844 C53.67233849 110.91426354 46.87842379 110.93710615 40.08407563 110.97421217 C34.23241498 111.00499931 28.38092838 111.01625939 22.52918845 111.01237535 C19.04230433 111.01031668 15.55584323 111.01564863 12.06903648 111.04026794 C8.17520594 111.06685504 4.28207648 111.05273857 0.38818359 111.03515625 C-1.32270699 111.05505112 -1.32270699 111.05505112 -3.06816101 111.0753479 C-11.22770157 110.99005013 -18.05907512 109.30544121 -24.20753956 103.66451263 C-29.565421 97.97112558 -31.66127957 91.91412808 -31.71411133 84.17456055 C-31.72258087 83.48734421 -31.73105042 82.80012787 -31.73977661 82.09208679 C-31.76300283 79.84049505 -31.76417212 77.58959265 -31.76293945 75.33789062 C-31.77005088 73.75759108 -31.77775129 72.17729408 -31.78601074 70.59700012 C-31.79942339 67.29107482 -31.80103941 63.98538818 -31.79516602 60.67944336 C-31.78927964 56.46632019 -31.81983121 52.25435326 -31.8602829 48.04145336 C-31.88627879 44.77865044 -31.88902652 41.51612133 -31.88539124 38.25322914 C-31.88707209 36.70124728 -31.89661387 35.14925134 -31.91453552 33.59737206 C-32.01553403 23.76945107 -31.57032989 15.12591128 -24.53869629 7.52140808 C-17.17835312 0.52701549 -9.74491065 -0.02490564 0 0 Z M-23.29418945 37.66992188 C-25.18124924 42.8593363 -25.04119384 46.73104239 -22.85668945 51.66992188 C-17.2101651 57.72960655 -9.17008611 59.15321068 -1.34765625 61.02587891 C3.50093965 62.21505098 3.50093965 62.21505098 5.70581055 64.41992188 C6.15692756 67.87848561 6.12600095 69.7439634 4.26831055 72.73242188 C-0.37440285 75.7898185 -5.24870155 75.80586299 -10.60668945 74.79492188 C-14.4087277 72.84969301 -16.40475771 70.19878536 -18.29418945 66.41992188 C-21.75918945 66.91492188 -21.75918945 66.91492188 -25.29418945 67.41992188 C-24.72328464 71.41625559 -23.82153142 74.24036262 -21.29418945 77.41992188 C-14.20914872 82.46120086 -6.76372256 82.33629759 1.70581055 81.41992188 C7.01055817 79.93268379 10.94658169 77.27616467 13.70581055 72.41992188 C14.84339153 67.71792046 15.42751559 63.52544089 13.15112305 59.01367188 C7.55690173 52.84490891 -3.74981332 51.31388257 -11.45825195 49.31445312 C-14.29418945 48.41992188 -14.29418945 48.41992188 -16.29418945 46.41992188 C-16.65044766 43.64110787 -16.79850362 42.08801652 -15.0793457 39.81054688 C-11.70104367 37.17887177 -7.44337509 37.42657121 -3.29418945 37.41992188 C0.46760592 38.23770348 1.3635811 38.929393 3.58081055 42.10742188 C4.28206055 42.87054688 4.98331055 43.63367188 5.70581055 44.41992188 C9.40635464 44.35631397 9.40635464 44.35631397 12.70581055 43.41992188 C10.67507795 37.73420275 10.67507795 37.73420275 6.70581055 33.41992188 C-3.24805782 29.5110305 -15.77247428 29.2079923 -23.29418945 37.66992188 Z M27.89331055 38.16992188 C22.40663805 46.32154958 21.74753888 53.72831069 22.70581055 63.41992188 C24.14890304 69.82793971 26.69641716 74.16880511 31.8269043 78.26367188 C38.1533767 82.15688566 44.46117579 82.21927182 51.70581055 81.41992188 C58.36111746 79.4888949 62.50016943 76.43361855 65.8659668 70.38476562 C69.13883676 62.72777218 68.9831742 52.25480297 66.86987305 44.25585938 C64.21090459 38.3490234 60.5819319 35.06294717 54.70581055 32.41992188 C44.77887331 29.1109428 35.25505264 30.97177405 27.89331055 38.16992188 Z M82.18237305 36.99804688 C76.06578744 44.8470758 75.99993749 53.83090785 76.70581055 63.41992188 C77.91926303 69.61118676 80.12541307 74.7257614 85.28393555 78.60742188 C91.34954055 82.27736776 97.81224615 82.27193545 104.70581055 81.41992188 C110.03988567 79.84413665 113.79418741 77.2352986 116.70581055 72.41992188 C117.54918854 70.09336189 118.13697908 67.8374556 118.70581055 65.41992188 C117.60593064 64.13635479 117.60593064 64.13635479 114.95581055 63.85742188 C111.69147926 64.06224191 111.69147926 64.06224191 110.26831055 66.13476562 C109.40276642 67.559307 108.57326091 69.0064642 107.78393555 70.47460938 C106.70581055 72.41992188 106.70581055 72.41992188 104.70581055 74.41992188 C98.68611388 75.74629572 95.23631719 75.56471977 89.70581055 72.41992188 C85.3559158 68.2200235 84.58992672 62.30047322 84.39331055 56.48242188 C84.54759236 50.1375824 86.11088424 45.56168006 89.89331055 40.48242188 C93.50225503 37.83586258 96.28280127 37.28479939 100.70581055 37.41992188 C104.70859536 38.16462603 106.21220525 39.86275423 108.51831055 43.04492188 C109.25932955 44.16215053 109.99254788 45.28477193 110.70581055 46.41992188 C114.17081055 45.92492187 114.17081055 45.92492187 117.70581055 45.41992188 C116.53055752 39.42613144 114.92204467 36.99969039 109.70581055 33.41992188 C100.90793672 29.17010147 89.16381526 29.76598879 82.18237305 36.99804688 Z " fill="#F6F5F6" transform="translate(396.294189453125,58.580078125)"/>
<path d="M0 0 C3.3 0 6.6 0 10 0 C11.22783484 5.03108119 12.45459148 10.06242371 13.68041992 15.09399414 C14.0961511 16.79979266 14.5121589 18.50552378 14.9284668 20.21118164 C16.11456453 25.07118499 17.29514178 29.93246336 18.46734619 34.7958374 C18.8087214 36.20847437 19.15193767 37.62066846 19.49749756 39.0322876 C19.93457794 40.818424 20.36403415 42.60642118 20.79296875 44.39453125 C21.02910889 45.3688208 21.26524902 46.34311035 21.50854492 47.34692383 C21.99334967 49.96409878 22.09316333 52.34529735 22 55 C22.66 55 23.32 55 24 55 C24.1043335 53.90816406 24.20866699 52.81632812 24.31616211 51.69140625 C24.99512256 46.29346715 26.46290979 41.16299451 27.94140625 35.9375 C28.22853989 34.90560547 28.51567352 33.87371094 28.81150818 32.81054688 C29.72319318 29.53885371 30.64271843 26.2694251 31.5625 23 C32.18476524 20.77228073 32.80651549 18.54441753 33.42773438 16.31640625 C34.94586823 10.87592056 36.47103394 5.43745093 38 0 C42.29 0 46.58 0 51 0 C52.67512893 6.10072628 54.34739388 12.2022279 56.01708984 18.30444336 C56.58467576 20.37724645 57.15302326 22.44984117 57.72216797 24.5222168 C58.54338043 27.51295464 59.36178805 30.50444841 60.1796875 33.49609375 C60.43185028 34.41208847 60.68401306 35.32808319 60.94381714 36.27183533 C62.4571468 41.8199173 63.79482725 47.37669393 65 53 C66.91553712 47.63270845 68.23915491 42.17441369 69.56640625 36.640625 C69.80536118 35.65503601 70.0443161 34.66944702 70.29051208 33.6539917 C71.05027473 30.5199106 71.8067665 27.38505493 72.5625 24.25 C73.56104591 20.10870212 74.56277344 15.96819263 75.56640625 11.828125 C75.91017052 10.39536224 75.91017052 10.39536224 76.26087952 8.93365479 C76.58142555 7.61152985 76.58142555 7.61152985 76.90844727 6.26269531 C77.09560806 5.4858136 77.28276886 4.70893188 77.4756012 3.9085083 C78 2 78 2 79 0 C82.3 0 85.6 0 89 0 C85.78828901 13.17570098 82.29504775 26.27360631 78.77172852 39.36889648 C77.80071734 42.98133486 76.83489531 46.59513765 75.86914062 50.20898438 C75.25291955 52.50268892 74.63639466 54.79631187 74.01953125 57.08984375 C73.73100784 58.17192612 73.44248444 59.25400848 73.1452179 60.36888123 C72.87791367 61.35824173 72.61060944 62.34760223 72.33520508 63.36694336 C72.10078201 64.24023788 71.86635895 65.11353241 71.62483215 66.01329041 C71 68 71 68 70 69 C68.31391034 69.07205511 66.62499341 69.08386068 64.9375 69.0625 C63.55884766 69.04896484 63.55884766 69.04896484 62.15234375 69.03515625 C61.08693359 69.01775391 61.08693359 69.01775391 60 69 C59.81429947 68.32792511 59.62859894 67.65585022 59.43727112 66.96340942 C57.68842185 60.63551719 55.93759706 54.30817532 54.18454075 47.98144722 C53.28330878 44.72865588 52.3828471 41.47565536 51.48413086 38.22216797 C50.45098753 34.48351164 49.41521288 30.74559306 48.37890625 27.0078125 C48.05596085 25.83695099 47.73301544 24.66608948 47.40028381 23.45974731 C47.10004807 22.37877777 46.79981232 21.29780823 46.49047852 20.18408203 C46.22622574 19.22921906 45.96197296 18.27435608 45.68971252 17.29055786 C45.07084802 14.99974849 45.07084802 14.99974849 44 13 C43.81429947 13.68682358 43.62859894 14.37364716 43.43727112 15.08128357 C41.68973212 21.54227805 39.93896757 28.0023886 38.18454075 34.46151638 C37.28260925 37.78253648 36.38194484 41.10388957 35.48413086 44.42602539 C34.45278039 48.24206241 33.41599995 52.05661338 32.37890625 55.87109375 C32.05596085 57.06899033 31.73301544 58.2668869 31.40028381 59.50108337 C31.10004807 60.6021492 30.79981232 61.70321503 30.49047852 62.83764648 C30.22622574 63.81249496 29.96197296 64.78734344 29.68971252 65.79173279 C29 68 29 68 28 69 C26.31391034 69.07205511 24.62499341 69.08386068 22.9375 69.0625 C21.55884766 69.04896484 21.55884766 69.04896484 20.15234375 69.03515625 C19.08693359 69.01775391 19.08693359 69.01775391 18 69 C13.99601391 55.15580045 10.13331576 41.27961673 6.42041016 27.35449219 C5.60854271 24.31335335 4.79064703 21.27387182 3.97265625 18.234375 C3.45276201 16.28915948 2.93321675 14.34385064 2.4140625 12.3984375 C2.17039948 11.49547943 1.92673645 10.59252136 1.6756897 9.66220093 C1.45480682 8.82927521 1.23392395 7.99634949 1.00634766 7.13818359 C0.81126617 6.40876556 0.61618469 5.67934753 0.41519165 4.92782593 C0 3 0 3 0 0 Z " fill="#FAFAFA" transform="translate(209,71)"/>
<path d="M0 0 C1.17632492 -0.00852997 2.35264984 -0.01705994 3.56462097 -0.02584839 C4.85665436 -0.02494202 6.14868774 -0.02403564 7.47987366 -0.02310181 C8.85312262 -0.02908556 10.22636822 -0.03589076 11.59960938 -0.04345703 C15.33100421 -0.06113879 19.06230735 -0.06581329 22.79374003 -0.0670886 C25.90763971 -0.06898691 29.02151798 -0.07634356 32.13540941 -0.08343279 C39.48103612 -0.09972222 46.82661378 -0.1046012 54.17225647 -0.10317993 C61.75281516 -0.10197798 69.33308938 -0.12308909 76.91357607 -0.15466726 C83.41981597 -0.18080581 89.92596282 -0.19154827 96.43225485 -0.19026911 C100.31912422 -0.18975881 104.20574078 -0.19547949 108.09255791 -0.21662521 C111.74768415 -0.23596742 115.40231534 -0.23616019 119.05745888 -0.22159195 C121.03908809 -0.2184987 123.02071714 -0.23520791 125.00227356 -0.25247192 C126.1814183 -0.24408295 127.36056305 -0.23569397 128.57543945 -0.22705078 C129.60026397 -0.22814032 130.62508848 -0.22922985 131.68096828 -0.2303524 C135.05521575 0.39866368 136.2717762 1.58794015 138.35121155 4.26742554 C138.17367542 7.28553976 137.5138594 8.10477769 135.35121155 10.26742554 C132.8958292 10.52190113 132.8958292 10.52190113 129.74002075 10.52812195 C128.54679703 10.53520676 127.3535733 10.54229156 126.12419128 10.54959106 C124.8082901 10.54711365 123.49238892 10.54463623 122.13661194 10.54208374 C120.74218471 10.54642908 119.34775988 10.55161163 117.95333862 10.55757141 C114.15996139 10.57099217 110.3666836 10.57153667 106.57328725 10.56900811 C103.4096386 10.56794044 100.24601024 10.57281656 97.08236593 10.57761353 C89.62028935 10.58871945 82.1582631 10.5891401 74.69618225 10.58309937 C66.99127197 10.57705806 59.28654423 10.58937199 51.5816651 10.61066943 C44.97270353 10.62826767 38.36380015 10.6342896 31.754816 10.63103169 C27.80485763 10.62921577 23.85502945 10.63188552 19.90509224 10.64574623 C16.1909492 10.65829112 12.4770913 10.65641248 8.7629528 10.64333534 C6.74654783 10.63982926 4.73013428 10.65117218 2.71376038 10.66290283 C0.91969505 10.65238136 0.91969505 10.65238136 -0.91061401 10.64164734 C-1.95240783 10.64181508 -2.99420164 10.64198282 -4.06756496 10.64215565 C-6.64878845 10.26742554 -6.64878845 10.26742554 -8.51523685 8.90419292 C-9.64878845 7.26742554 -9.64878845 7.26742554 -9.52378845 4.70492554 C-7.80282403 -0.08918963 -4.50505959 0.01473922 0 0 Z " fill="#FCFCFC" transform="translate(212.64878845214844,150.73257446289063)"/>
<path d="M0 0 C4.91158972 2.98278947 8.32354107 7.08458215 10.875 12.1875 C11.77288749 16.85651497 11.5 21.68293348 11.5 26.4375 C-0.71 26.4375 -12.92 26.4375 -25.5 26.4375 C-22.88789995 36.15332207 -22.88789995 36.15332207 -16.5 41.4375 C-10.51602279 42.88523642 -6.95470271 42.689342 -1.5 39.4375 C-0.84 38.385625 -0.18 37.33375 0.5 36.25 C1.16 35.321875 1.82 34.39375 2.5 33.4375 C5.9846985 33.01693294 8.33263796 32.85381898 11.5 34.4375 C10.51711084 40.45769608 8.28659085 43.05308955 3.66796875 46.95703125 C-2.90808205 51.44770378 -9.79497542 51.00626767 -17.5 50.4375 C-22.70390898 49.30274642 -26.02454126 46.39566135 -29.5 42.4375 C-30.056875 41.81875 -30.61375 41.2 -31.1875 40.5625 C-35.83670019 33.0352235 -35.75119611 22.96673788 -33.84765625 14.5546875 C-31.4914931 7.94125101 -27.55613376 2.49315963 -21.203125 -0.7265625 C-14.67105493 -2.74659573 -6.30171375 -2.84003734 0 0 Z M-19.5 8.4375 C-23.41256957 12.24710721 -23.5448413 13.7065478 -24.5 19.4375 C-15.59 19.4375 -6.68 19.4375 2.5 19.4375 C2.1016319 12.82853006 2.1016319 12.82853006 -0.5 9.625 C-6.82219482 5.01506627 -12.65137308 4.27460913 -19.5 8.4375 Z " fill="#FAFAFA" transform="translate(336.5,90.5625)"/>
<path d="M0 0 C5.01490199 4.81120191 5.76943258 8.81549229 6.0625 15.625 C5.93016083 22.72720188 4.20593822 28.01423531 -0.5625 33.3125 C-5.66288889 36.0945303 -9.5658668 36.31576719 -15 34.75 C-20.09207335 31.77161747 -22.59708177 28.69860262 -24.6875 23.1875 C-26.0287415 16.48129252 -25.62267583 9.43285166 -22.5625 3.3125 C-15.7537445 -4.25278389 -8.61268717 -7.08084807 0 0 Z " fill="#ECECEE" transform="translate(451.3125,99.1875)"/>
</svg>
      </div>
<div class="col-lg">
         <span id="copyright">Wesoc project - 2024</span>
      </div>
     
        </div>
        
     </footer>

  
     <script src="./styles/bootstrap/js/bootstrap.min.js"></script>

     
</body>

</html>
