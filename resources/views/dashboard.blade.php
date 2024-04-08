<x-app-layout>
    <div class="container-fluid mt-4 justify-content-center pt-2" id="dashboard" >
        <div class="row">
            <!-- Bal oldali sáv -->
            <div class="col-md-3  " >

                <div  id="baloldalisav" class="p-4">
                    @include('layouts.bal-nav')
                </div>

            </div>

            <!-- Középső tartalomterület -->
            <div class="col-md " id="kozepsosav">

                <div class=" ps-2 pe-2 ">



                <!-- Bejegyzés létrehozása űrlap -->


                    <!-- Teszt tartalmak -->
                    @include('bejegyzes-letrehozas')
                    @include('bejegyzesek')

                </div>
</div>


            <!-- Jobb oldali sáv -->
            <div class="col-md-3    " >


                <div  id="jobboldalisav" class="p-4">
                    @include('layouts.jobb-nav')
                </div>


            </div>
        </div>
    </div>

</x-app-layout>
