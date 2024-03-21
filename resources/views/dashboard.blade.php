<x-app-layout>
    <div class="container-fluid mt-4 justify-content-center pt-2" id="dashboard" >
        <div class="row">
            <!-- Bal oldali sáv -->
            <div class="col-md-3  " >
                <div class=" ps-2 pe-2 mb-4 " >
           
               
                    @include('layouts.bal-nav')
               
                </div>
            </div>

            <!-- Középső tartalomterület -->
            <div class="col-md " id="kozepsosav">
     
                <div class=" ps-2 pe-2 ">
                 

                    
                <!-- Bejegyzés létrehozása űrlap -->
                @include('bejegyzes-letrehozas')

                    <!-- Teszt tartalmak -->
                    @for ($i = 1; $i <= 5; $i++)
                    @include('bejegyzes')
                    @endfor
                </div>

            </div>
        
            <!-- Jobb oldali sáv -->
            <div class="col-md-3    " >
                <div class=" ps-2 pe-2 mb-4 " >
          
                <div class="p-3 flex-grow-1" id="jobboldalisav">
                    @include('layouts.jobb-nav')
                </div>
                
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
