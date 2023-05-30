<div class="">
    <div class="text-center pt-5">
        <h1 class="uppercase text-lg text-green-500 font-extrabold">Reservez votre billet et voyagez avec BacaExpress</h1>
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
                        <div class="w-full">
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
                            <div class="w-full">
                                <div class="w-full">
                                    <label for="dateDepart">Départ</label> <br>
                                    <input type="date" name="dateDepart" id="" value="{{date('Y-m-d')}}" class="border border-gray-300 rounded w-full">
                                </div>
                            </div>
                            <!--Nombre de passager -->
                            <div class="w-full">
                                <div class="">
                                    <label for="passagers">Voyageurs</label> <br>
                                    <select name="passagers" id="passagers" class="border border-gray-300 rounded w-full">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="contactPassagers">+10</option>
                                    </select>
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