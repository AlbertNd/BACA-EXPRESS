

<div class="">
    <div class="text-center pt-5">
        <h1 class="uppercase text-lg text-green-500 font-extrabold">Reservez votre billet et voyagez avec Baca-Express</h1>
    </div>
    <div class="p-2 sm:p-10 w-full">
        <!-- Le formulaire de reservation -->
        <form action="/Home" method="post">
            @csrf
            <!--Section avec les button radio aller simple et retour et les destination -->
            <div class=" w-full">
                <!-- Bouttons radio aller simple et aller-retour -->
                @include('PagesAcceuil.SectionPageAcceuil.ButtonRadioTrajet')
                <!-- les input de destination (depart et arrivé), le jour de départ, nombre de passagé et le button de recherge-->
                <div class="lg:flex lg:space-x-2">
                    <!-- le ville de départ et ville destination -->
                    <div class="sm:flex sm:space-x-2 w-full">
                        <!--Ville départ -->
                        <div class="hidden sm:block w-full">
                            <label for="depart">De</label> <br>
                            <select name="depart" id="depart" class="w-full">
                                @foreach($villeDepart as $villes)
                                <option value="{{$villes -> nom}}">
                                    {{$villes -> nom}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="destination">À</label> <br>
                            <select name="destination" id="destination" class="w-full">
                                @foreach($villeArrive as $villes)
                                <option value="{{$villes -> nom}}">
                                    {{$villes -> nom}}
                                </option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <!-- Section avec la date de depart le nombre de voyageurs et button recherhe -->
                    <div class="w-full">
                        <div class="sm:flex sm:space-x-2">
                            <!--Date de depart et date de retour -->
                            <div class="flex w-full">
                                <div class="w-full">
                                    <label for="dateDepart">Départ</label> <br>
                                    <input type="date" name="dateDepart" id="" value="{{date('Y-m-d')}}" class="border border-gray-300 rounded w-full">
                                </div>
                                <div id="statuImput" class="w-full" style="display:none;">
                                    <label for="dateRetour">Retour</label> <br>
                                    <input type="date" name="dateRetour" id="" value="{{date('Y-m-d')}}" class="border border-gray-300 rounded w-full">
                                </div>
                            </div>
                            <!--Nombre de passager -->
                           
                                <div class="w-full flex items-end mx-auto">
                                    <div class="flex items-center">
                                        
                                        <div class="flex justify-center">
                                            <input type="number" name="passagers" id="nombrePlace" value="0" class="w-full text-center">
                                        </div>
                                        
                                    </div>
                                </div>
                           
                            <!--button recherche -->
                            <div class="w-full flex items-end">
                                <div class="w-full p-2 sm:p-0">
                                    <button class="px-3 py-2 border border-gray-300 rounded bg-yellow-500 w-full">Recherche</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Le script javascript pour le controle des affichage des numero de tva et nom de la societe -->

<script>
    var nombrePlace = 0;

    function Comptage() {
        nombrePlace++;
        document.getElementById("nombrePlace").value = nombrePlace;

    }

    function Decomptage() {
        nombrePlace--;
        document.getElementById("nombrePlace").value = nombrePlace;

    }
    document.getElementById("up").addEventListener("click", Comptage);
    document.getElementById("down").addEventListener("click", Decomptage);
</script>