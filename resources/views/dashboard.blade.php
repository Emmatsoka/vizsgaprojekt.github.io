<x-app-layout>
    <div class="container-fluid mt-4 justify-content-center pt-2" >
        <div class="row">
            <!-- Bal oldali sáv -->
            <div class="col-md-3 text-dark " >
                <div class=" ps-2 pe-2 mb-4 " >
                <!-- Ide jöhetnek a bal oldali sáv elemek -->
                <div class="p-3 flex-grow-1" id="baloldalisav">
                    Bal oldali sáv
                </div>
                </div>
            </div>

            <!-- Középső tartalomterület -->
            <div class="col-md-6 " id="kozepsosav">
                <!-- Ide jöhetnek a bejegyzések és egyéb tartalmak -->
                <div class=" ps-2 pe-2 ">
                 

                    
                <!-- Bejegyzés létrehozása űrlap -->
                <div class="p-4  mb-4 text-dark" id="bejegyzesletrehozas">
                    <h4 class="mb-3 syne-bold">Bejegyzés létrehozása</h4>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="postContent" class="form-label">Bejegyzés címe</label>
                            <textarea class="form-control" id="postContent" name="postContent" rows="1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="postContent" class="form-label">Bejegyzés tartalma</label>
                            <textarea class="form-control" id="postContent" name="postContent" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="images" class="drop-container" id="dropcontainer">
                                <span class="drop-title">Fájlok csatolása</span>
                                vagy
                                <input type="file" id="images" accept="image/*" required>
                              </label>
                        </div>
                        <button type="submit" class="gomb feketehtr">Küldés</button>
                    </form>
                </div>
                    <!-- Teszt tartalmak -->
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="card text-dark mb-4 p-2 mt-4" id="bejegyzes">
                            <div class="card-header syne-bold">
                                Felhasználónév {{ $i }}
                            </div>
                            <div class="card-body">
                                Tartalom a bejegyzéshez {{ $i }}
                            </div>
                        </div>
                    @endfor
                </div>

            </div>

            <!-- Jobb oldali sáv -->
            <div class="col-md-3 text-dark   " >
                <div class=" ps-2 pe-2 mb-4 " >
                <!-- Ide jöhetnek a jobb oldali sáv elemek -->
                <div class="p-3 flex-grow-1" id="jobboldalisav">
                    Jobb oldali sáv<br><br><br><br>
                </div>
                
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
