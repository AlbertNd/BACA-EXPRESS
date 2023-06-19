<div class="mx-auto px-1">
    <div class="">
        <div class="text-center bg-green-500 p-2">
            <h1 class="font-extrabold text-white uppercase serif text-lg">Ci-dessous les horaires des prochains voyages : {{$depart}} - {{$destination}}</h1>
        </div>
    </div>

</div>

<div class="container mx-auto">


    @foreach($pays as $pays)
    <form action="{{route('postreservation')}}" method="post">
        @csrf
        <div class="justify-center my-4 px-3">
            <!-- Le nom du pays de depart -->
            <div class="font-bold font-serif uppercase">
                <span class="font-light text-sm font-serif lowercase">Pays de départ :</span>
                <input type="text" name="paysDepartHoraire" class="border border-white" value="{{$pays->nom}}">
            </div>

            <!-- Le nom de la ville de depart -->

            @foreach($pays -> ville as $villes)
            <div class="justify-center my-4">
                <div class="flex font-bold font-serif uppercase">
                    <!-- Ville d'embarquement -->
                    <div class="w-full">
                        <span class="font-light text-sm font-serif lowercase">Ville d'embarquement : </span>
                        <input type="text" name="villeDepartHoraire" id="" value="{{$villes -> nom}}" class="border border-white">
                    </div>
                    <!-- Ville de destination -->
                    <div class="w-full">
                        <span class="font-light text-sm font-serif lowercase">Ville de destination : </span>
                        <input type="text" name="villeDestinationHoraire" id="" value="{{$destination}}" class="border border-white">
                    </div>
                </div>

                <!-- Informations sur les horaire -->
                @foreach($villes -> horaire as $horaire)
                <div class="sm:flex border border-gray-300 p-3">
                    <!-- Les date -->
                    <div class="w-full sm:w-1/5 font-bold font-serif uppercase text-center">
                        <h1 class="font-light text-sm font-serif lowercase">Date de depart : </h1>
                        <input type="text" name="dateDepartHoraire" id="" value="{{$horaire -> dateDepart}}" class="border border-white text-center">
                    </div>
                    <!-- Les heures -->
                    <div class="w-full sm:w-1/5 font-bold font-serif uppercase text-center">
                        <h1 class="font-light text-sm font-serif lowercase">Heure de depart :</h1>
                        <input type="text" name="heureDepartHoraire" id="" value="{{$horaire -> heureDepart}}" class="border border-white text-center">
                    </div>
                    <!-- nombre de billet -->
                    <div class="w-full sm:w-1/5 font-bold font-serif uppercase text-center">
                        <h1 class="font-light text-sm font-serif lowercase"> nombre de billet</h1>
                        <input type="text" name="nombreBilletDepartHorraire" id="" value="{{$nombre}}" class="border border-white text-center">
                    </div>
                    <!-- le prix -->
                    <div class="w-full sm:w-1/5 font-bold font-serif uppercase text-center">
                        <h1 class="font-light text-sm font-serif lowercase"> Prix / <span>FCFA</span></h1>
                        <input type="text" name="prixDepartHorraire" id="" value="{{$prix}}" class="border border-white text-center">
                    </div>

                    <div class="w-full sm:w-1/5 flex justify-center mx-auto">
                        <button class="w-full px-2 py-2 border border-gray-300 bg-yellow-500 rounded">
                            Reservation <span>&#x27AA;</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </form>
    @endforeach
</div>