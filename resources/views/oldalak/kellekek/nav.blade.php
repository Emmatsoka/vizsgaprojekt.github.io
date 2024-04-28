<nav class="navbar navbar-expand-lg navbar-dark megjelenites ">

    <a class="navbar-brand" href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="120px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://www.buymeacoffee.com/wesoc" target="_blank"><img src="pics/support.png" height="auto" width="20px" class="nav-link-icon">Támogatás</a>
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
          @if (Auth::user())
          <a class=" gomb feherhtr float-right bold" href="{{ url('login') }}">Megnyitás</a>
          @else
          <a class=" gomb feherhtr float-right bold" href="{{ url('login') }}">Belépek</a>
          @endif

      </ul>


  </div>
</nav>
